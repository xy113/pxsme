<?php
/**
 * ============================================================================
 * 版权所有 (C) 2010-2099 WWW.SONGDEWEI.COM All Rights Reserved。
 * 网站地址: http://www.songdewei.com
 * ============================================================================
 * @author:     David Song<songdewei@163.com>
 * @version:    v1.0
 * ---------------------------------------------
 * $Date: 2012-02-14
 * $ID: admincp_goods.php
*/ 
if(!defined('IN_XSCMS')){die('Access Denied!');}
$admin->checkadminpriv('allowadmingoods');
!$operation && $operation = 'list';
cpheader();
//================================
/**AJAX修改产品价格**/
//=================================
if($inajax && $operation=='editprice'){
    $goodsid = intval(MyGet('id'));
    $goods['price'] = MyGet('val');
    $db->query("UPDATE sdw_goods SET price='$goods[price]' WHERE id=$goodsid");
    dexit($goods['price']);
}
//================================
/**AJAX修改产品规格**/
//=================================
if($operation=='editsize'){
	$goodsid = intval(MyGet('id'));
	$goods['size'] = MyGet('val');
    $db->query("UPDATE sdw_goods SET size='$goods[size]' WHERE id=$goodsid");
    dexit($goods['size']);
}
//================================
/**AJAX切换产品推荐状态**/
//=================================
if($operation=='toggle_recommend'){
    $goodsid = intval(MyGet('id'));
    $data = $db->GetOne("SELECT recommend FROM sdw_goods WHERE id=$goodsid");
    $recommend = $data['recommend']==1 ? 0 : 1;
    $db->query("UPDATE sdw_goods SET recommend=$recommend WHERE id=$goodsid");
    dexit($recommend);
}
//================================
/**AJAX切换审核状态**/
//=================================
if($operation=='toggle_audited'){
    $goodsid = intval(MyGet('id'));
    $data = $db->GetOne("SELECT audited FROM sdw_goods WHERE id=$goodsid");
    $audited = $data['audited']==1 ? 0 : 1;
    $db->query("UPDATE sdw_goods SET audited=$audited WHERE id=$goodsid");
    dexit($audited);
}
//================================
/**保存产品信息**/
//=================================
if($operation=='save'){
	$goodsid = intval(MyPost('id'));
	$goods = $_POST['goods'];
	!$goods['allowcomment'] && $goods['allowcomment'] = 0;
	!$goods['allowvote'] && $goods['allowvote'] = 0;
	!$goods['recommend'] && $goods['recommend'] = 0;
	!$goods['audited'] && $goods['audited'] = 0;
	if (!empty($goods['tags'])){
		$goods['tags'] = str_replace(' ',',',$goods['tags']);
		checktags(explode(',',$goods['tags']));
	}
	if ($goodsid>0){
		$db->update('sdw_goods',$goods,"id=$goodsid");
		$admin->cplog($LANG['goods']['modify'].':'.$goods['title']);
		$links[0] = array('text'=>$LANG['reedit'],'href'=>ADMINSCRIPT.'?action=goods&operation=edit&id='.$goodsid);	
		$links[1] = array('text'=>$LANG['product_add'],'href'=>ADMINSCRIPT.'?action=goods&operation=addnew&cid='.$goods['cid']);
		$links[2] = array('text'=>$LANG['view'],'href'=>'detail.php?id='.$goodsid,'target'=>'_blank');
		$links[3] = array('text'=>$LANG['back_list'],'href'=>ADMINSCRIPT.'?action=goods&cid='.$goods['cid']);
		showmsg('goods_modi_succeed',0,$links,false);
	
	}else {
		$goods['dateline'] = $timestamp;
		$goods['author'] = $admin->admincp['admin'];
		$goods['authorid'] = $admin->adminid;
		$goodsid = $db->insert('sdw_goods',$goods,true);
		$admin->cplog($LANG['goods']['addnew'].':'.$goods['title']);
	    $links[0] = array('text'=>$LANG['reedit'],'href'=>ADMINSCRIPT.'?action=goods&operation=edit&id='.$goodsid);	
		$links[1] = array('text'=>$LANG['continue_add'],'href'=>ADMINSCRIPT.'?action=goods&operation=addnew&cid='.$goods['cid']);
		$links[2] = array('text'=>$LANG['view'],'href'=>'detail.php?id='.$goodsid,'target'=>'_blank');
		$links[3] = array('text'=>$LANG['back_list'],'href'=>ADMINSCRIPT.'?action=goods&cid='.$goods['cid']);
		showmsg('goods_save_succeed',0,$links,false);	
	}
}
//================================
/**删除产品信息**/
//=================================
if($operation=='drop'){
	$goodsid = MyGet('val');
	!$goodsid && $goodsid = 0;
	$query = $db->query("SELECT title FROM sdw_goods WHERE id IN ($goodsid)");
	while ($result = $db->fetch_array($query)){
		$admin->cplog($LANG['goods']['drop'].':'.$result['title']);
	}
	$db->query("DELETE FROM sdw_goods WHERE id IN ($goodsid)");
	$operation = 'list';
}
//================================
/**推荐产品**/
//=================================
if($operation == 'recommend'){
	$goodsid = MyGet('val');
	!$goodsid && $goodsid = 0;
	$recommend = intval(MyGet('value'));
	$db->query("UPDATE sdw_goods SET recommend=$recommend WHERE id IN ($goodsid)");
	$operation = 'list';
}
//================================
/**通过审核**/
//=================================
if($operation=='audited'){
	$goodsid = MyGet('val');
	!$goodsid && $goodsid = 0;
	$audited = intval(MyGet('value'));
	$db->query("UPDATE sdw_goods SET audited=$audited WHERE id IN ($goodsid)");
	$operation = 'list';
}
//================================
/**批量移动产品**/
//=================================
if($operation=='move'){
	$cid = intval(MyGet('cid'));
	$goodsid = MyGet('val');
	!$goodsid && $goodsid = 0;
	$db->query("UPDATE sdw_goods SET cid=$cid WHERE id IN ($goodsid)");
	$operation = 'list';
}

if ($operation=='addnew'){
	$cid = intval(MyGet('cid'));
	$smarty->assign('cid',$cid);
	$smarty->assign('categories',listcategries($cid,'goods'));
	$smarty->assign('fckeditor',FCK('goods[content]'));
}
//================================
/**获取要修改的产品信息**/
//=================================
if($operation=='edit'){
	$goodsid = intval(MyGet('id'));
    $goods = $db->GetOne("SELECT * FROM sdw_goods WHERE id=$goodsid");
    $smarty->assign('cid',$goods['cid']);
	$smarty->assign('goods',$goods);
	$smarty->assign('fckeditor',FCK('goods[content]',$goods['content']));
	$smarty->assign('categories',listcategries($goods['cid'],'goods'));
}
//================================
/**产品列表**/
//=================================
if($operation=='list'){
	$where = $filter = array();
	$pagesize = 20;
	$filter['key'] = MyGet('q');
	$filter['cid'] = intval(MyGet('cid'));
	$filter['audited']   = intval(MyGet('audited'));
	$filter['recommend'] = intval(MyGet('recommend'));
	$filter['authorid']  = intval(MyGet('authorid'));
	if ($filter['cid']>0) $where[] = "(c.cid=$filter[cid] OR c.fid=$filter[cid])";
	if ($filter['key']) $where[] = "a.title LIKE '%$filter[key]%'";
	if ($filter['audited']==1) $where[] = "a.audited=$filter[audited]";
	if ($filter['recommend']==1) $where[] = "a.recommend=$filter[recommend]";
	if ($filter['authorid']>0) $where[] = "a.authorid=$filter[authorid]";
	$wheresql = !empty($where) ? " WHERE ".implode(' AND ',$where) : '';
	$filter['orderby'] = MyGet('orderby');
	$filter['sort']    = MyGet('sort');
    $_SESSION['goodorderby'] = $filter['orderby'] ? $filter['orderby'] : null;
	switch($_SESSION['goodorderby']){
		case 'views':
			$orderby = 'a.views';
		break;
		case 'time' :
			$orderby = 'a.dateline';
		break;
		default:
			$orderby = 'a.id';
		break;
	}
	$_SESSION['goodsort'] = $filter['sort'] ? strtoupper($filter['sort']) : (isset($_SESSION['goodsort']) ? $_SESSION['goodsort'] : 'DESC');
	if (MyGet('do')=='sort') $_SESSION['goodsort'] = $_SESSION['goodsort'] == 'ASC' ? 'DESC' : 'ASC';
	$sort = in_array($_SESSION['goodsort'],array('ASC','DESC')) ? $_SESSION['goodsort'] : 'DESC';
	$data = $db->GetOne("SELECT COUNT(*) FROM sdw_goods a LEFT JOIN sdw_category c ON c.cid=a.cid $wheresql");
	$totalrecords = $data['COUNT(*)'];
	$pagecount = $totalrecords<$pagesize ? 1 : ceil($totalrecords/$pagesize);
	$page = min(array($page,$pagecount));
	$limit = ($page-1) * $pagesize;
	$query = $db->query("SELECT a.id,a.cid,a.title,a.size,a.price,a.listingdate,a.author,a.authorid,a.dateline,a.views,a.recommend,a.comments,a.audited,c.name FROM sdw_goods a LEFT JOIN 
	sdw_category c ON c.cid=a.cid $wheresql ORDER BY $orderby $sort LIMIT $limit,$pagesize");
	while($result = $db->fetch_array($query)){
		$result['arcurl'] = 'detail.php?id='.$result['id'];
	    $goods[] = $result;
	}
	$smarty->assign('cid',$filter['cid']);
	$smarty->assign('totalrecords',$totalrecords);
	$smarty->assign('filter',$filter);
	$smarty->assign('goods',$goods);
	$querystring = "cid=$filter[cid]&q=$filter[key]&audited=$filter[audited]&recommend=$filter[recommend]&authorid=$filter[authorid]&orderby=$filter[orderby]&sort=$filter[sort]";	
	$smarty->assign('pagelink',adminpage($page,$pagecount,$querystring));
	$smarty->assign('querystring',$querystring."&page=$page");
	$smarty->assign('categories',listcategries($filter['cid'],'goods'));
	if ($filter['cid']>0) $smarty->assign('category',$db->GetOne("SELECT name FROM sdw_category WHERE cid=$filter[cid]"));
	unset($goods,$where,$wheresql,$filter,$query,$result,$querystring,$orderby,$sort);
}
$smarty->display('admin_goods.htm');
cpfooter();
?>