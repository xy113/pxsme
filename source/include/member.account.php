<?php
if (!$my->logined) header('location:member.php?action=login');
if ($do == 'save'){
	$member = $_POST['membernew'];
	$db->update('sdw_members',$member,"uid=$my->uid");
	$links[0] = array('text'=>'������һҳ','href'=>$_SERVER['HTTP_REFERER']);
	$links[1] = array('text'=>'��վ��ҳ','href'=>'index.php');
	message("��Ϣ�޸ĳɹ���",0,$links);
}else {
	$smarty->assign('member',$db->GetOne("SELECT * FROM sdw_members WHERE uid=$my->uid"));
	$smarty->display('account.htm');
}
?>