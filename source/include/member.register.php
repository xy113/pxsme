<?php
if ($do == 'checkname'){
	$username = MyGet('username');
	$userdata = $db->GetOne("SELECT COUNT(*) FROM sdw_members WHERE username='$username'");
	dexit($userdata['COUNT(*)']);
}elseif ($do == 'save'){
	if (MyPost('hash') != $_SESSION['hash']){
		$links[0] = array('text'=>'������һҳ','href'=>$_SERVER['HTTP_REFERER']);
		message('�벻Ҫ��վ���ύ���ݡ�',1,$links);
	}
	$member = $_POST['membernew'];
	$userdata = $db->GetOne("SELECT COUNT(*) FROM sdw_members WHERE username='$member[username]'");
	if ($userdata['COUNT(*)']>0){
		$links[0] = array('text'=>'������һҳ','href'=>$_SERVER['HTTP_REFERER']);
		message('��������û����ѱ���ʹ�ã����������롣',1,$links);
	}else {
		$member['regdate'] = $timestamp;
		$member['regip'] = $ipaddr;
		$member['password'] = md5(md5($member['password']));
		$db->insert('sdw_members',$member);
		unset($member,$userdata);
		$links[0] = array('text'=>'��¼ҳ','href'=>'member.php?action=login');
		$links[1] = array('text'=>'��վ��ҳ','href'=>'index.php');
		message("��ӭ������$config[sitename]��",0,$links);
	}
}else {
	$_SESSION['hash'] = random(10);
	$smarty->display('register.htm');
}
?>