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
 * $ID: admincp_account.php
*/
if (!defined('IN_XSCMS'))die('Access Denied!');
if ($operation == 'save'){
	$admindata = $member = array();
	$admindata['adminim'] = MyPost('adminim');
	$member['question'] = MyPost('question');
	$member['email'] = MyPost('email');
	if (MyPost('password1')){
		$admindata['random'] = random(4);
		$admindata['password'] = md5(md5(MyPost('password1')).md5($admindata['random']));
	}
	$db->update('sdw_admins',$admindata,'adminid='.$admin->adminid);
	if (MyPost('password2')){
		$member['password'] = md5(md5(MyPost('password2')));
	}
	if(MyPost('answer')){
		$member['answer'] = md5(md5(MyPost('answer')));
	}
	$db->update('sdw_members',$member,"adminid=$admin->adminid");
	$links[0] = array('text'=>$LANG['go_back'],'href'=>ADMINSCRIPT.'?action=account');
	showmsg('modi_success',0,$links);
}else {
	cpheader();
	$admindata = $db->GetOne("SELECT a.*,m.question,m.answer,m.email FROM sdw_admins a LEFT JOIN sdw_members m ON m.adminid=a.adminid  WHERE a.adminid=$admin->adminid");
	$smarty->assign('admin',$admindata);
	$smarty->display('admin_account.htm');
	cpfooter();
}
?>