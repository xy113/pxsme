<?php
/**
 * ============================================================================
 * 版权所有 (C) 2010-2099 WWW.SONGDEWEI.COM All Rights Reserved。
 * 网站地址: http://www.songdewei.com
 * ============================================================================
 * @author:     David Song<songdewei@163.com>
 * @version:    v1.0
 * ---------------------------------------------
 * $Date: 2012-02-08
 * $ID: admincp_category.php
*/
if (!defined('IN_XSCMS'))die('Access Denied!');
!$operation && $operation = 'list';
$ctype = MyGet('ctype');
!in_array($ctype,array('article','image','video','goods','job')) && $ctype = 'article';
$admin->checkadminpriv('allowadmin'.$ctype);
//=================================
/**AJAX修改分类名称**/
//=================================
if($operation == 'editname'){
    $categoryid = max(array(0,intval(MyGet('cid'))));
    $db->update('sdw_category',array('name'=>MyGet('val')),"cid=$categoryid");
    $admin->cplog($LANG['edit'].$LANG['category'][$ctype].':'.MyGet('val'));
    dexit(MyGet('val'));
}
//================================
/**AJAX修改分类排序**/
//=================================
if($operation == 'editorder'){
	$categoryid = max(array(0,intval(MyGet('cid'))));
    $db->update('sdw_category',array('displayorder'=>MyGet('val')),"cid=$categoryid");
    dexit(MyGet('val'));
}
if ($operation == 'toggle_disabled'){
	$categoryid = max(array(0,intval(MyGet('cid'))));
	$data = $db->GetOne("SELECT name,disabled FROM sdw_category WHERE cid=$categoryid");
	$disabled = $data['disabled']==0 ? 1 : 0;
	$db->query("UPDATE sdw_category SET disabled='$disabled'  WHERE cid=$categoryid");
	$admin->cplog($LANG['edit'].$LANG['category'][$ctype].':'.$data['name']);
	dexit($disabled);
}
//================================
/**保存分类信息**/
//=================================
if($operation=='save'){
	$categoryid = intval(MyPost('cid'));
    $category = $_POST['category'];
    if ($categoryid>0){
	    $db->update('sdw_category',$category,"cid=$categoryid");
	    $admin->cplog($LANG['add'].$LANG['category'][$category['ctype']].':'.$category['name']);
	    $links[0] = array('text'=>$LANG['back_list'],'href'=>ADMINSCRIPT."?action=category&ctype=$category[ctype]");
	    $links[1] = array('text'=>$LANG['reedit'],'href'=>ADMINSCRIPT."?action=category&operation=edit&ctype=$category[ctype]&cid=$categoryid");
    	$links[2] = array('text'=>$LANG['category']['addnew'],'href'=>ADMINSCRIPT."?action=category&operation=addnew&ctype=$category[ctype]&fid=$category[fid]");
	    showmsg('category_modi_succeed',0,$links);
    }else {
	    $categoryid = $db->insert('sdw_category',$category,true);
	    $admin->cplog($LANG['edit'].$LANG['category'][$category['ctype']].':'.$category['name']);
	    $links[0] = array('text'=>$LANG['back_list'],'href'=>ADMINSCRIPT."?action=category&ctype=$category[ctype]");
	    $links[1] = array('text'=>$LANG['reedit'],'href'=>ADMINSCRIPT."?action=category&operation=edit&ctype=$category[ctype]&cid=$categoryid");
    	$links[2] = array('text'=>$LANG['category']['addnew'],'href'=>ADMINSCRIPT."?action=category&operation=addnew&ctype=$category[ctype]&fid=$category[fid]");
	    showmsg('category_save_succeed',0,$links);
    }
}
//================================
/**删除分类信息**/
//=================================
if($operation=='drop'){
    $categoryid = max(array(0,intval(MyGet('val'))));
    $data = $db->GetOne("SELECT COUNT(*) FROM sdw_category WHERE fid=$categoryid");
    if ($data['COUNT(*)']>0){
    	$links[0] = array('text'=>$LANG['go_back'],'href'=>ADMINSCRIPT."?action=category&ctype=$ctype");
    	showmsg('category_drop_error',1,$links,false);
    }else {
    	$db->query("DELETE FROM sdw_category WHERE cid=$categoryid");
    	$operation = 'list';
    }
}
//================================
/**获取要修改的分类信息**/
//=================================
if($operation=='edit'){
    $categoryid = max(array(0,intval(MyGet('cid'))));
    $category = $db->GetOne("SELECT * FROM sdw_category WHERE cid=$categoryid");
    $smarty->assign('category',$category);
    $smarty->assign('categories',listcategries($category['fid'],$ctype));
}elseif ($operation=='addnew'){
	$smarty->assign('categories',listcategries(MyGet('fid'),$ctype));
}else{
	$smarty->assign('categories',listcategries(0,$ctype));
}
$smarty->assign('ctype',$ctype);
cpheader($LANG['category']['manage']);
$smarty->display('admin_category.htm');
cpfooter();
?>