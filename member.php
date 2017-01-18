<?php
require_once './source/include/common.inc.php';
if (!in_array($action,array('login','logout','register','password'))) $action = 'account';
$smarty->assign('navs',listnavs());
$smarty->assign('contactus',get_contactus());
include "./source/include/member.$action.php";
?>