<?php
/**
 * ============================================================================
 * 版权所有 (C) 2010-2099 WWW.SONGDEWEI.COM All Rights Reserved。
 * 网站地址: http://www.songdewei.com
 * ============================================================================
 * @author:     David Song<songdewei@163.com>
 * @version:    v1.0
 * ---------------------------------------------
 * $Date: 2012-02-08
 * $ID: admincp_admin.php
*/ 
if (!defined('IN_XSCMS'))die('Access Denied!');
$admin->checkadminpriv('allowadminadmins');
if ($admin->adminid<>1){
	$links[0] = array('text'=>$LANG['go_back'],'href'=>'javascript:;');
	showmsg($LANG['priv_error'],1,$links,false);
}
!$operation && $operation = 'list';
cpheader();
/*
 * 检测用户名是否可用
 */
$admindata = $admins = $member = array();
if ($operation == 'checkadmin' && $inajax){
	checkname(MyGet('admin')) ? dexit('1') : dexit('0');
}
//================================
/**保存管理员信息**/
//=================================
if($operation=='save'){
	$admindata = $_POST['adminnew'];
	$userdata['password'] = MyPost('password2');
	if ($userdata['password']){
		$userdata['password'] = md5(md5($userdata['password']));
	}else {
		$userdata['password'] = md5(md5($admindata['password']));
	}
	if ($admindata['password']){
		$admindata['random'] = random(4);
		$admindata['password'] = md5(md5($admindata['password']).md5($admindata['random']));
	}
	$adminid = $db->insert('sdw_admins',$admindata,true);
	$member['username'] = $admindata['admin'];
	$member['adminid'] = $adminid;
	$member['regdate'] = $timestamp;
	$member['regip'] = $ipaddr;
	$db->insert('sdw_members',$member);
	$admin->cplog($LANG['admin']['addnew'].':'.$admindata['admin']);
	$links[0] = array('text'=>$LANG['back_list'],'href'=>ADMINSCRIPT.'?action=admin');
	$links[1] = array('text'=>$LANG['remodify'],'href'=>ADMINSCRIPT.'?action=admin&operation=edit&adminid='.$adminid);
    showmsg('admin_save_suceed',0,$links);
}
if ($operation == 'modify'){
	$adminid = intval(MyPost('adminid'));
	$admindata = $_POST['adminnew'];
	if ($admindata['password']){
		$admindata['random'] = random(4);
		$admindata['password'] = md5(md5($admindata['password']).md5($admindata['random']));
	}
	$db->update('sdw_admins',$admindata,"adminid=$adminid");
	if (MyPost('password2')){
		$db->query("UPDATE sdw_members SET password='".md5(md5(MyPost('password2')))."' WHERE adminid=$adminid");
	}
	$admindata = $db->GetOne("SELECT admin FROM sdw_admins WHERE adminid=$adminid");
	$admin->cplog($LANG['admin']['edit'].':'.$admindata['admin']);
	$links[0] = array('text'=>$LANG['back_list'],'href'=>ADMINSCRIPT.'?action=admin');
	showmsg('admin_modi_suceed',0,$links);
}
//================================
/**删除管理员信息**/
//=================================
if($operation=='drop'){
	$adminid = MyGet('val');
	!$adminid && $adminid = 0;
	$query = $db->query("SELECT admin,adminid FROM sdw_admins WHERE adminid IN ($adminid) AND adminid<>1");
	while ($result = $db->fetch_array($query)){
		$admin->cplog($LANG['admin']['drop'].':'.$result['admin']);
		$db->query("DELETE FROM sdw_admins WHERE adminid=$result[adminid]");
	}
	$operation = 'list';
}
//================================
/**获取要修改的管理员信息**/
//=================================
if($operation=='edit'){
	$adminid = max(array(0,intval(MyGet('adminid'))));
	$admindata = $db->GetOne("SELECT * FROM sdw_admins WHERE adminid=$adminid");
	$smarty->assign('admin',$admindata);
	$smarty->assign('admingroups',listadmingroups($admindata['cpgroupid']));
}
if ($operation=='addnew'){
	$cpgroupid = max(array(0,intval(MyGet('cpgroupid'))));
	$smarty->assign('admingroups',listadmingroups($cpgroupid));
}
if($operation=='list'){
	$where = array();
	$pagesize = 20;
	$cpgroupid = max(array(0,intval(MyGet('cpgroupid'))));
	if ($cpgroupid>0) $where[] = "a.cpgroupid=$cpgroupid";
	$key = MyGet('q');
	if (!empty($key)) $where[] = "a.admin LIKE '%$key%'";
	$wheresql = !empty($where) ? ' WHERE '.implode(' AND ',$where) : '';
	$data = $db->GetOne("SELECT COUNT(*) FROM sdw_admins a LEFT JOIN sdw_admingroups g ON g.cpgroupid=a.cpgroupid $wheresql");
	$totalrecords = $data['COUNT(*)'];
	$pagecount = $count<$pagesize ? 1 : ceil($totalrecords/$pagesize);
	$page = min(array($page,$pagecount));
	$limit = ($page-1) * $pagesize;
    $query = $db->query("SELECT a.adminid,a.admin,a.lastip,a.lastlogin,a.logintimes,g.cpgroupid,g.cpgroupname FROM sdw_admins a LEFT JOIN sdw_admingroups g ON g.cpgroupid=a.cpgroupid $wheresql ORDER BY a.adminid ASC LIMIT $limit,$pagesize");
    while($result = $db->fetch_array($query)){
	    $admins[] = $result;
   }
   $smarty->assign('admins',$admins);
   $smarty->assign('cpgroupid',$cpgroupid);
   $smarty->assign('totalrecords',$totalrecords);
   $smarty->assign('pagelink',adminpage($page,$pagecount,"cpgroupid=$cpgroupid"));
   $smarty->assign('admingroups',listadmingroups($cpgroupid));
   $smarty->assign('cpgroup',$cpgroupid>0 ? $db->GetOne("SELECT cpgroupname FROM sdw_admingroups WHERE cpgroupid=$cpgroupid") : array('cpgroupname'=>$LANG['admin_list']));
}
$smarty->display('admin_admin.htm');
cpfooter();
/**function**/
function checkadmin($username=''){
	global $db;
	if (empty($username))return false;
	$admindata = $db->GetOne("SELECT admin FROM sdw_admins WHERE admin='$username'");
	return !empty($admindata);
}
function listadmingroups($cpgroupid=0){
	$groups = array();
	$query = $GLOBALS['db']->query("SELECT cpgroupid,cpgroupname FROM sdw_admingroups ORDER BY cpgroupid ASC");
	while ($result = $GLOBALS['db']->fetch_array($query)){
		$result['current'] = ($result['cpgroupid']==$cpgroupid);
		$groups[] = $result;
	}
	return $groups;
}
?>