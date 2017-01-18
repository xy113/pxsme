<?php
if ($do == 'checkname'){
	$username = MyGet('username');
	$userdata = $db->GetOne("SELECT COUNT(*) FROM sdw_members WHERE username='$username'");
	dexit($userdata['COUNT(*)']);
}elseif ($do == 'save'){
	if (MyPost('hash') != $_SESSION['hash']){
		$links[0] = array('text'=>'返回上一页','href'=>$_SERVER['HTTP_REFERER']);
		message('请不要重站外提交数据。',1,$links);
	}
	$member = $_POST['membernew'];
	$userdata = $db->GetOne("SELECT COUNT(*) FROM sdw_members WHERE username='$member[username]'");
	if ($userdata['COUNT(*)']>0){
		$links[0] = array('text'=>'返回上一页','href'=>$_SERVER['HTTP_REFERER']);
		message('你输入的用户名已被人使用，请重新输入。',1,$links);
	}else {
		$member['regdate'] = $timestamp;
		$member['regip'] = $ipaddr;
		$member['password'] = md5(md5($member['password']));
		$db->insert('sdw_members',$member);
		unset($member,$userdata);
		$links[0] = array('text'=>'登录页','href'=>'member.php?action=login');
		$links[1] = array('text'=>'网站首页','href'=>'index.php');
		message("欢迎您加入$config[sitename]。",0,$links);
	}
}else {
	$_SESSION['hash'] = random(10);
	$smarty->display('register.htm');
}
?>