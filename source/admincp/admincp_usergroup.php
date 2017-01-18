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
 * $ID: admincp_usergroup.php
*/ 
if(!defined('IN_XSCMS')){die('Access Denied!');}
$group = $groups = array();
!$operation && $operation = 'list';
cpheader();
if ($operation == 'editmin'){
	$groupid = intval(MyGet('groupid'));
	$group['minexp'] = intval(MyGet('val'));
	$db->query("UPDATE sdw_usergroups SET minexp='$group[minexp]' WHERE groupid=$groupid");
	dexit($group['minexp']);
}
if ($operation == 'editmax'){
	$groupid = intval(MyGet('groupid'));
	$group['maxexp'] = intval(MyGet('val'));
	$db->query("UPDATE sdw_usergroups SET maxexp='$group[maxexp]' WHERE groupid=$groupid");
	dexit($group['maxexp']);
}
if ($operation == 'drop'){
	$groupid = MyGet('val');
	!$groupid && $groupid = 0;
	$db->query("DELETE FROM sdw_usergroups WHERE groupid IN ($groupid)");
	$operation = 'list';
}
if ($operation == 'save'){
	$group = $_POST['newgroup'];
	$groupid = intval(MyPost('groupid'));
	if ($groupid>0){
		$db->update('sdw_usergroups',$group,"groupid=$groupid");
		$links[0] = array('text'=>$LANG['go_back'],'href'=>ADMINSCRIPT.'?action=usergroup&operation=edit&groupid='.$groupid);
		showmsg('modi_success',0,$links);
	}else {
		$groupid = $db->insert('sdw_usergroups',$group,TRUE);
		$links[0] = array('text'=>$LANG['go_back'],'href'=>ADMINSCRIPT.'?action=usergroup&operation=addnew');
		showmsg('save_success',0,$links);
	}
}
if ($operation == 'edit'){
	$groupid = intval(MyGet('groupid'));
	$smarty->assign('group',$db->GetOne("SELECT * FROM sdw_usergroups WHERE groupid=$groupid"));
}
if ($operation == 'list'){
	$query = $db->query("SELECT * FROM sdw_usergroups ORDER BY groupid ASC");
	while ($result = $db->fetch_array($query)){
		$groups[] = $result;
	}
	$smarty->assign('groups',$groups);
}
$smarty->display('admin_usergroup.htm');
cpfooter();
?>