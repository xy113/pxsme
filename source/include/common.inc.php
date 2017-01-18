<?php
/**
 * ============================================================================
 * 版权所有 (C) 2010-2099 WWW.SONGDEWEI.COM All Rights Reserved。
 * 网站地址: http://www.songdewei.com
 * ============================================================================
 * @author:     David Song<songdewei@163.com>
 * @version:    v1.0
 * ---------------------------------------------
 * $Date: 2012-02-06
 * $ID: common.inc.php
*/ 
define('IN_XSCMS',true);
error_reporting(0);
set_time_limit(600);
set_magic_quotes_runtime(0);
@date_default_timezone_set('Asia/Shanghai');
//==========================================
//开始计算页面执行时间
//==========================================
$start_time = $end_time = 0;
$mtime = explode(' ', microtime());
$start_time = $mtime[1] + $mtime[0];
define('MAGIC_QUOTES_GPC', get_magic_quotes_gpc());
!defined('CURSCRIPT') && define('CURSCRIPT', '');
/* 取得当前系统所在的根目录 */
//echo '您的网站已到期。';exit();
define('ROOT_PATH', str_replace("/source/include/common.inc.php", '', str_replace('\\', '/', __FILE__)));
require_once  ROOT_PATH."/config/config.php";
require_once  ROOT_PATH."/source/function/function.common.php";
header("Content-type: text/html;charset=".$config['output']['charset']); 
@ini_set('session.gc_maxlifetime',600); 
@ini_set('session.auto_start',0);
@ini_set('session.cache_expire',  180);
@ini_set('session.use_trans_sid', 0);
@ini_set('session.use_cookies',   1);
@ini_set('max_execution_time',600);
@ini_set('session.save_path', ROOT_PATH.'/data/sessions');
if (isset($_REQUEST['sessionid'])) session_id(authcode(base64_decode($_REQUEST['sessionid'])));
session_start();
if(PHP_VERSION < '4.1.0') {
	$_GET    = &$HTTP_GET_VARS;
	$_POST   = &$HTTP_POST_VARS;
	$_COOKIE = &$HTTP_COOKIE_VARS;
	$_SERVER = &$HTTP_SERVER_VARS;
	$_ENV    = &$HTTP_ENV_VARS;
	$_FILES  = &$HTTP_POST_FILES;
	$_SESSION = &$HTTP_SESSION_VARS;
}
unset($HTTP_GET_VARS,$HTTP_POST_VARS,$HTTP_POST_FILES,$HTTP_COOKIE_VARS,$HTTP_ENV_VARS,$HTTP_SERVER_VARS,$HTTP_SESSION_VARS);
if (!MAGIC_QUOTES_GPC){
	$_GET && $_GET = daddslashes($_GET);
	$_POST && $_POST = daddslashes($_POST);
	$_POST && $_REQUEST = daddslashes($_REQUEST);
}
$_XCOOKIE = $articles = $images = $videos = $messages = $jobs = $goods = $category = array();
$prelength = strlen($config['cookie']['cookiepre']);
foreach($_COOKIE as $key => $val) {
	if(substr($key, 0, $prelength) == $config['cookie']['cookiepre']) {
		$_XCOOKIE[(substr($key, $prelength))] = MAGIC_QUOTES_GPC ? $val : daddslashes($val);
	}
}
unset($prelength);
$timestamp = time();
$ipaddr = $_SERVER['REMOTE_ADDR'];
$inajax = (MyGet('inajax')==1);
$action = htmlspecialchars(MyGet('action'));
$page = max(array(1,intval(MyGet('page'))));
$do = htmlspecialchars(MyGet('do'));
$PHP_SELF = $_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
$BASESCRIPT = basename($_SERVER['PHP_SELF']);
$_SERVER['HTTP_REFERER'] = isset($_SERVER['HTTP_REFERER']) ?  $_SERVER['HTTP_REFERER'] : 'index.php';
if ($inajax || defined('IN_ADMINCP')){
	header('Expires: Fri, 14 Mar 1980 20:53:00 GMT');
	header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
	header('Cache-Control: no-cache, must-revalidate');
	header('Pragma: no-cache');
}
require_once  ROOT_PATH."/source/class/db_mysql.php";
//==========================================
//Mysql Connection
//==========================================
$db = new DB($config['db']['dbhost'], $config['db']['dbuser'], $config['db']['dbpwd'], $config['db']['dbname'], $config['db']['pconnect']);
$query = $db->query("SELECT skey,svalue FROM sdw_settings");
while(list($key,$value)=$db->fetch_row($query)){
	$config[$key] = $value;
}
$config['randcodestatus'] = explode(':',$config['randcodestatus']);
//=================================================
//Smarty
//=================================================
makedir(ROOT_PATH.'/data/template');
makedir(ROOT_PATH.'/data/admincp');
makedir(ROOT_PATH.'/data/cache');
require_once ROOT_PATH."/source/class/smarty/Smarty.class.php";
$smarty=new Smarty();
if (defined('IN_ADMINCP')){
	$smarty->template_dir = ROOT_PATH.'/templates/admincp';
}else {
	$smarty->template_dir = ROOT_PATH.'/templates/'.$config['template'];
}
$smarty->compile_dir  = ROOT_PATH.'/data/template';
$smarty->assign('config',$config);
$smarty->assign('action',$action);
$smarty->assign('inajax',$inajax);
$smarty->assign('ipaddr',$ipaddr);
$smarty->assign('page',$page);
$smarty->assign('do',$do);
require_once ROOT_PATH.'/source/class/member.class.php';
$my = new Member();
$smarty->assign('logined',$my->logined);
$smarty->assign('my',$my->useraccess);
/* 判断是否支持gzip模式 */
/*
if (function_exists('ob_gzhandler')){
    ob_start('ob_gzhandler');
}
*/
?>