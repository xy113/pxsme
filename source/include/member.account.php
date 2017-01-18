<?php
if (!$my->logined) header('location:member.php?action=login');
if ($do == 'save'){
	$member = $_POST['membernew'];
	$db->update('sdw_members',$member,"uid=$my->uid");
	$links[0] = array('text'=>'返回上一页','href'=>$_SERVER['HTTP_REFERER']);
	$links[1] = array('text'=>'网站首页','href'=>'index.php');
	message("信息修改成功。",0,$links);
}else {
	$smarty->assign('member',$db->GetOne("SELECT * FROM sdw_members WHERE uid=$my->uid"));
	$smarty->display('account.htm');
}
?>