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
 * $ID: admincp_contactus.php
**/
if (!defined('IN_XSCMS'))die('Access Denied!');
$admin->checkadminpriv('allowadmincontactus');
cpheader();
//================================
/**保存修改后的**/
//=================================
if($operation=='save'){
	$contactus = $_POST['contactusnew'];
    $db->update('sdw_contactus',$contactus,'id=1');
    $links[0] = array('text'=>$LANG['go_back'],'href'=>ADMINSCRIPT."?action=contactus");
    showmsg('modi_success',0,$links);
}
$smarty->assign('contact',$db->GetOne("SELECT * FROM sdw_contactus LIMIT 0,1"));
$smarty->display('admin_contactus.htm');
cpfooter();
?>