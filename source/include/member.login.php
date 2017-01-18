<?php
if ($do == 'login'){
	$my->Login(MyPost('username'),MyPost('password'),MyPost('randcode'));
}elseif ($do == 'logout'){
	$my->Logout();
}else {
	if ($my->logined) header('location:index.php');
	$smarty->display('login.htm');
}
?>