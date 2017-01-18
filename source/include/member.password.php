<?php
if (!$my->logined) header('location:member.php?action=login');
if ($do == 'save'){
	$password = MyPost('password');
	$passwordnew = MyPost('passwordnew');
	$member = $db->GetOne("SELECT password FROM sdw_members WHERE uid=$my->uid");
	if (!(md5(md5($password)) == $member['password'])){
		$links[0] = array('text'=>'返回上一页','href'=>$_SERVER['HTTP_REFERER']);
		message('原密码输入错误。',1,$links);
	}else {
		$passwordnew = md5(md5($passwordnew));
		$db->query("UPDATE sdw_members SET password='$passwordnew' WHERE uid=$my->uid");
		unset($password,$passwordnew,$member);
		$links[0] = array('text'=>'个人中心','href'=>'member.php');
		$links[1] = array('text'=>'返回上一页','href'=>$_SERVER['HTTP_REFERER']);
		$links[2] = array('text'=>'网站首页','href'=>'index.php');
		message("密码修改成功。",0,$links);
	}
}
$smarty->display('password.htm');
?>