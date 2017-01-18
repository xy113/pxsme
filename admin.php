<?php
/**
 * ============================================================================
 * ��Ȩ���� (C) 2010-2099 WWW.SONGDEWEI.COM All Rights Reserved��
 * ��վ��ַ: http://www.songdewei.com
 * ============================================================================
 * @author:     David Song<songdewei@163.com>
 * @version:    v1.0
 * ---------------------------------------------
 * $Date: 2012-02-03
 * $ID: admin.php
**/
define('NOROBOT', TRUE);
define('IN_ADMINCP', TRUE);
define('CURSCRIPT', 'admin');
define('ADMINSCRIPT', basename(__FILE__));
require_once './source/include/common.inc.php';
require_once './source/admincp/session.class.php';
require_once './source/admincp/admincp_common.php';
require_once "./source/lang/admincp/lang.$config[language].php";
$operation = htmlspecialchars(MyGet('operation'));
$smarty->assign('operation',$operation);
$smarty->assign('lang',$LANG);
$smarty->assign('adminscript',ADMINSCRIPT);
$admin = new Admin();
$admin->admincp['isfounder'] = $admin->isfounder;
$smarty->assign('admincp',$admin->admincp);
if ($admin->cpaccess==0 && $action=='login') {
	$admin->AdminLogin($_POST['admin'],$_POST['password'],$_POST['randcode']);
}elseif ($admin->cpaccess==0) {
	$smarty->display('admin_login.htm');
}elseif ($action=='logout'){
	$admin->AdminLogout();
}elseif (!empty($action)){
	include "./source/admincp/admincp_$action.php";
}else {
	$smarty->display('admin.htm');
}
?>