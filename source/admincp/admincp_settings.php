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
 * $ID: admincp_sesstings.php
**/
if (!defined('IN_XSCMS'))die('Access Denied!');
!$operation && $operation = 'basic';
if ($do == 'modify'){
	$settings = $_POST['settingnew'];
	foreach ($settings as $key=>$value){
		if (is_array($value)) $value = implode(':',$value);
		$db->query("UPDATE sdw_settings SET svalue='$value' WHERE skey='$key'");
	}
	$admin->cplog($LANG['setting_modify']);
	$links[0] = array('text'=>$LANG['go_back'],'href'=>$_SERVER['HTTP_REFERER']);
	showmsg('setting_modi_succeed',0,$links);
}else {
	cpheader();
	$smarty->display('admin_settings.htm');
	cpfooter();
}
?>