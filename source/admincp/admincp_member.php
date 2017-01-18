<?php
/**
 * ============================================================================
 * 版权所有 (C) 2010-2099 WWW.SONGDEWEI.COM All Rights Reserved。
 * 网站地址: http://www.songdewei.com
 * ============================================================================
 * @author:     David Song<songdewei@163.com>
 * @version:    v1.0
 * ---------------------------------------------
 * $Date: 2012-02-16
 * $ID: admincp_member.php
*/
if (!defined('IN_XSCMS'))die('Access Denied!');
!$operation && $operation = 'list';
$member = $members = array();
cpheader();
//==================================
/**保存用户信息**/
//==================================
if($operation=='save'){
    $member = $_POST['member'];
    if (!checkuser($member['username'])){
    	$links[0] = array('text'=>$LANG['go_back'],'href'=>$_SERVER['HTTP_REFERER']);
    	showmsg($LANG['member_exists'],1,$links);
    }
    if (!$member['password']){
    	$links[0] = array('text'=>$LANG['go_back'],'href'=>$_SERVER['HTTP_REFERER']);
    	showmsg($LANG['member_passerr'],1,$links);
    }else {
    	$member['password'] = md5(md5($member['password']));
    }
    $member['regdate'] = $timestamp;
    $db->insert('sdw_members',$member);
    $admin->cplog($LANG['member']['addnew'].':'.$member['username']);
    $links[0] = array('text'=>$LANG['continue_add'],'href'=>ADMINSCRIPT.'?action=member&operation=addnew');
    $links[1] = array('text'=>$LANG['back_list'],'href'=>ADMINSCRIPT.'?action=member');
    showmsg('save_success',0,$links);
}
if ($operation == 'modify'){
	$uid = intval(MyPost('uid'));
	$member = $_POST['member'];
	if ($member['password']){
		$member['password'] = md5(md5($member['password']));
	}else {
		unset($member['password']);
	}
	$db->update('sdw_members',$member,"uid=$uid");
	$admin->cplog($LANG['member']['edit'].'UID:'.$uid);
	$links[0] = array('text'=>$LANG['reedit'],'href'=>ADMINSCRIPT.'?action=member&operation=edit&uid='.$uid);
    $links[1] = array('text'=>$LANG['back_list'],'href'=>ADMINSCRIPT.'?action=member');
    showmsg('save_success',0,$links);
}
//==================================
/**删除用户信息**/
//==================================
if($operation=='drop'){
	$uid = MyGet('val');
	!$uid && $uid = 0;
	$query = $db->query("SELECT uid,username FROM sdw_members WHERE uid IN ($uid)");
	while ($result = $db->fetch_array($query)){
		$admin->cplog($LANG['member']['drop'].':'.$result['username']);
		$db->query("DELETE FROM sdw_members WHERE uid=$result[uid]");
	}
	$operation = 'list';
}
//==================================
/**获取要修改的用户信息**/
//==================================
if($operation=='edit'){
	$smarty->assign('member',$db->GetOne("SELECT * FROM sdw_members WHERE uid=".intval(MyGet('uid'))));
}
if($operation=='list'){
	$where = $filter = array();
	$pagesize = 20;
	$filter['key'] = MyGet('q');
	$filter['groupid'] = intval(MyGet('groupid'));
	if ($filter['key']) $where[] = "(m.uid='$filter[key]' OR m.username LIKE '$filter[key]')";
	if ($filter['groupid']>0) $where[] = "m.groupid=$filter[groupid]";
	$wheresql = $where ? 'WHERE '.implode(' AND ',$where) : '';
	$data = $db->GetOne("SELECT COUNT(*) FROM sdw_members m LEFT JOIN sdw_usergroups g ON g.groupid=m.groupid $wheresql");
	$totalrecords = $data['COUNT(*)'];
	$pagecount = $totalrecords<$pagesize ? 1 : ceil($totalrecords/$pagesize);
	$page = min(array($page,$pagecount));
	$limit = ($page-1) * $pagesize;
	$query = $db->query("SELECT m.uid,m.username,m.email,m.exp,m.credits,m.regdate,m.lastlogin,m.lastip,m.logintimes,g.groupname FROM sdw_members m LEFT JOIN sdw_usergroups g ON g.groupid=m.groupid $wheresql ORDER BY uid ASC LIMIT $limit,$pagesize");
	while($result = $db->fetch_array($query)){
	   $members[] = $result;
	}
	$smarty->assign('members',$members);
	$smarty->assign('totalrecords',$totalrecords);
	$smarty->assign('pagelink',adminpage($page,$pagecount,"q=$filter[key]&groupid=$filter[groupid]"));
	$smarty->assign('querystring',"q=$filter[key]&groupid=$filter[groupid]&page=$page");
	$smarty->assign('groups',listusergroup($filter['groupid']));
}
$smarty->display('admin_member.htm');
cpfooter();
//==================================
/**function**/
//==================================
function checkuser($username){
	global $db;
	$member = $db->GetOne("SELECT username FROM sdw_members WHERE username='$username' OR email='$username'");
	return empty($member);
}
function listusergroup($groupid){
	$groups = array();
	$query = $GLOBALS['db']->query("SELECT groupid,groupname FROM sdw_usergroups ORDER BY groupid ASC");
	while ($result = $GLOBALS['db']->fetch_array($query)){
		$result['current'] = ($result['groupid']==$groupid);
		$groups[] = $result;
	}
	return $groups;
}
?>