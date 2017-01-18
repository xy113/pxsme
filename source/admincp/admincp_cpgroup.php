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
 * $ID: admincp_cpgroup.php
*/ 
if(!defined('IN_XSCMS')){die('Access Denied!');}
$admin->checkadminpriv('allowadminadmins');
if ($admin->adminid<>1){
	$links[0] = array('text'=>$LANG['go_back'],'href'=>'javascript:;');
	showmsg($LANG['priv_error'],1,$links,false);
}
$cpgroup = $cpgroups = array();
!$operation && $operation = 'list';
cpheader();
if ($operation=='drop'){
	$cpgroupid = MyGet('val');
	!$cpgroupid && $cpgroupid = 0;
	$query = $db->query("SELECT cpgroupid,cpgroupname FROM sdw_admingroups WHERE cpgroupid IN ($cpgroupid)");
	while ($result = $db->fetch_array($query)){
		$admin->cplog($LANG['cpgroup']['drop'].':'.$result['cpgroupname']);
		$db->query("DELETE FROM sdw_admingroups WHERE cpgroupid=$result[cpgroupid]");
	}
	$operation = 'list';
}
if ($operation=='save'){
	$cpgroupid = intval(MyPost('cpgroupid'));
	$cpgroup['cpgroupname'] = MyPost('cpgroupname');
	$cpgroup['cpgrouptext'] = MyPost('cpgrouptext');
	$cpgroup['cpgroupperms'] = isset($_POST['perm']) ? implode(',',$_POST['perm']) : '';
	if ($cpgroupid>0){
		$db->update('sdw_admingroups',$cpgroup,"cpgroupid=$cpgroupid");
		$admin->cplog($LANG['cpgroup']['edit'].':'.$cpgroup['cpgroupname']);
		$links[0] = array('text'=>$LANG['go_back'],'href'=>ADMINSCRIPT.'?action=cpgroup');
		showmsg('modi_success',0,$links);
	}else {
		$db->insert('sdw_admingroups',$cpgroup);
		$admin->cplog($LANG['cpgroup']['addnew'].':'.$cpgroup['cpgroupname']);
		$links[0] = array('text'=>$LANG['go_back'],'href'=>ADMINSCRIPT.'?action=cpgroup');
		showmsg('save_success',0,$links);
	}
}
if ($operation=='edit'){
	$cpgroupid = intval(MyGet('cpgroupid'));
	$cpgroup = $db->GetOne("SELECT * FROM sdw_admingroups WHERE cpgroupid=$cpgroupid");
	foreach (explode(',',$cpgroup['cpgroupperms']) as $key=>$value){
		$cpgroup['priv'][$value] = true; 
	}
	$smarty->assign('cpgroup',$cpgroup);
}
if ($operation=='list'){
	$query = $db->query("SELECT cpgroupid,cpgroupname,cpgrouptext FROM sdw_admingroups ORDER BY cpgroupid ASC");
	while ($result = $db->fetch_array($query)){
		$groups[] = $result;
	}
	$smarty->assign('groups',$groups);
}
$smarty->display('admin_cpgroup.htm');
cpfooter();
?>