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
 * $ID: admincp_article.php
*/
if (!defined('IN_XSCMS'))die('Access Denied!');
$admin->checkadminpriv('allowadminarticle');
!$operation && $operation = 'list';
cpheader();
//================================
/**AJAX修改文章推荐**/
//=================================
if($inajax && $operation=='toggle_recommend'){
    $articleid = max(array(0,intval(MyGet('id'))));
	$data = $db->GetOne("SELECT title,recommend FROM sdw_articles WHERE id=$articleid");
	$article['recommend'] = $data['recommend']==1 ? 0 : 1;
	$db->query("UPDATE sdw_articles SET recommend=$article[recommend] WHERE id=$articleid");
	$admin->cplog($LANG['article']['modify'].':'.$data['title']);
	dexit($article['recommend']);
}
//================================
/**AJAX审核文章**/
//=================================
if($inajax && $operation=='toggle_audited'){
    $articleid = max(array(0,intval(MyGet('id'))));
	$data = $db->GetOne("SELECT title,audited FROM sdw_articles WHERE id=$articleid");
	$article['audited'] = $data['audited']==1 ? 0 : 1;
	$db->query("UPDATE sdw_articles SET audited=$article[audited] WHERE id=$articleid");
	$admin->cplog($LANG['article']['modify'].':'.$data['title']);
	dexit($article['audited']);
}
//================================
/**删除文章内容**/
//=================================
if($operation=='drop'){
	$articleid = MyGet('val');
	!$articleid && $articleid = 0;
	$query = $db->query("SELECT id,title FROM sdw_articles WHERE id IN($articleid)");
	while ($result = $db->fetch_array($query)){
		$db->query("DELETE FROM sdw_articles WHERE id=".$result['id']);
		$admin->cplog($LANG['article']['drop'].':'.$result['title']);
	}
	$operation = 'list';
}
//================================
/**文章推荐/取消推荐**/
//=================================
if($operation=='recommend'){
	$articleid = MyGet('val');
	!$articleid && $articleid = 0;
	$article['recommend'] = intval(MyGet('value'));
	$query = $db->query("SELECT id,title FROM sdw_articles WHERE recommend<>$article[recommend] AND id IN ($articleid)");
	while ($result = $db->fetch_array($query)){
		$db->query("UPDATE sdw_articles SET recommend=$article[recommend] WHERE id=".$result['id']);
		$admin->cplog($LANG['article']['modify'].':'.$result['title']);
	}
	$operation = 'list';
}
//================================
/**移动文章**/
//=================================
if($operation=='move'){
	$article['cid'] = max(array(0,intval(MyGet('cid'))));
	$articleid = MyGet('val');
	!$articleid && $articleid = 0;
	$query = $db->query("SELECT id,title FROM sdw_articles WHERE cid<>$article[cid] AND id IN ($articleid)");
	while ($result = $db->fetch_array($query)){
		$db->query("UPDATE sdw_articles SET cid=$article[cid] WHERE id=".$result['id']);
		$admin->cplog($LANG['article']['modify'].':'.$result['title']);
	}
	$operation = 'list';
}
/*
 * 文章审核/取消审核
 */
if ($operation=='audited'){
	$articleid = MyGet('val');
	!$articleid && $articleid = 0;
	$article['audited'] = intval(MyGet('value'));
	$query = $db->query("SELECT id,title FROM sdw_articles WHERE audited<>$article[audited] AND id IN ($articleid)");
	while ($result = $db->fetch_array($query)){
		$db->query("UPDATE sdw_articles SET audited=$article[audited] WHERE id=".$result['id']);
		$admin->cplog($LANG['article']['modify'].':'.$result['title']);
	}
	$operation = 'list';
}
if ($operation=='save'){
	$articleid = intval(MyPost('id'));
	$article = $_POST['articlenew'];
	!$article['autopage'] && $article['autopage'] = 0;
	!$article['allowcomment'] && $article['allowcomment'] = 0;
	!$article['allowvote'] && $article['allowvote'] = 0;
	!$article['recommend'] && $article['recommend'] = 0;
	!$article['audited'] && $article['audited'] = 0;
	!$article['summary'] && $article['summary'] = cutstr(stripHtml($article['content']),200);
	if (empty($article['source'])){
		$article['source'] = $config['sitename'];
	}else {
		$data = $db->GetOne("SELECT COUNT(*) FROM sdw_source WHERE type='article' AND sitename='$article[source]'");
		if ($data['COUNT(*)'] == 0){
			$db->query("INSERT INTO sdw_source(sitename,siteurl,ordernum,type)VALUES('$article[source]','#','50','article')");
		}
	}
	if (!empty($article['tags'])){
		$article['tags'] = str_replace(' ',',',$article['tags']);
		checktags(explode(',',$article['tags']));
	}
	if ($articleid>0){
		$db->update('sdw_articles',$article,"id=$articleid");
		$admin->cplog($LANG['article']['modify'].':'.$article['title']);
		$links[0] = array('text'=>$LANG['reedit'],'href'=>ADMINSCRIPT.'?action=article&operation=edit&id='.$articleid);
		$links[1] = array('text'=>$LANG['article_post'],'href'=>ADMINSCRIPT.'?action=article&operation=addnew&cid='.$article['cid']);	
		$links[2] = array('text'=>$LANG['view'],'href'=>'article.php?id='.$articleid,'target'=>'_blank');
		$links[3] = array('text'=>$LANG['back_list'],'href'=>ADMINSCRIPT.'?action=article&cid='.$article['cid']);
		showmsg('article_modi_succeed',0,$links,false);	
	}else{
		$article['dateline'] = $timestamp;
		$article['author']   = $admin->admincp['admin'];
		$article['authorid'] = $admin->adminid;
		$articleid = $db->insert('sdw_articles',$article,true);	
		$admin->cplog($LANG['article']['addnew'].':'.$article['title']);
		$links[0] = array('text'=>$LANG['continue_add'],'href'=>ADMINSCRIPT.'?action=article&operation=addnew&cid='.$article['cid']);
		$links[1] = array('text'=>$LANG['reedit'],'href'=>ADMINSCRIPT.'?action=article&operation=edit&id='.$articleid);
		$links[2] = array('text'=>$LANG['view'],'href'=>'article.php?id='.$articleid,'target'=>'_blank');
		$links[3] = array('text'=>$LANG['back_list'],'href'=>ADMINSCRIPT.'?action=article&cid='.$article['cid']);
		showmsg('article_save_succeed',0,$links,false);
	}
}
/*
 * 添加新文档
 */
if($operation=='addnew') {
	$smarty->assign('cid',max(array(0,intval(MyGet('cid')))));
    $smarty->assign('fckeditor',FCK('articlenew[content]'));
    $smarty->assign('sources',listsource('article'));
    $smarty->assign('categories',listcategries(max(array(0,intval(MyGet('cid')))),'article'));
}
//=================================
/**获取要修改的文章内容**/
//=================================
if($operation=='edit'){
	$articleid = max(array(0,intval(MyGet('id'))));
	$article = $db->GetOne("SELECT * FROM sdw_articles WHERE id=$articleid");	
    $smarty->assign('cid',$article['cid']);
	$smarty->assign('article',$article);
	$smarty->assign('sources',listsource('article'));
	$smarty->assign('fckeditor',FCK('articlenew[content]',$article['content'])); 
	$smarty->assign('categories',listcategries($article['cid'],'article'));
}
//=================================
/**文章列表**/
//=================================
if ($operation=='list'){
	$where = $filter = array();
	$pagesize = 20;
	$filter['key'] = MyGet('q');
	$filter['cid'] = intval(MyGet('cid'));
	$filter['audited']   = intval(MyGet('audited'));
	$filter['recommend'] = intval(MyGet('recommend'));
	$filter['image']     = intval(MyGet('image'));
	$filter['authorid']  = intval(MyGet('authorid'));
	if ($filter['cid']>0) $where[] = "(c.cid=$filter[cid] OR c.fid=$filter[cid])";
	if ($filter['key']) $where[] = "a.title LIKE '%$filter[key]%'";
	if ($filter['audited']==1) $where[] = "a.audited=$filter[audited]";
	if ($filter['recommend']==1) $where[] = "a.recommend=$filter[recommend]";
	if ($filter['image']==1) $where[] = "a.image<>''";
	if ($filter['authorid']>0) $where[] = "a.authorid=$filter[authorid]";
	$wheresql = !empty($where) ? " WHERE ".implode(' AND ',$where) : '';
	$filter['orderby'] = MyGet('orderby');
	$filter['sort']    = MyGet('sort');
    $_SESSION['arcorderby'] = $filter['orderby'] ? $filter['orderby'] : null;
	switch($_SESSION['arcorderby']){
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
	$_SESSION['arcsort'] = $filter['sort'] ? strtoupper($filter['sort']) : (isset($_SESSION['arcsort']) ? $_SESSION['arcsort'] : 'DESC');
	if (MyGet('do')=='sort') $_SESSION['arcsort'] = $_SESSION['arcsort'] == 'ASC' ? 'DESC' : 'ASC';
	$sort = in_array($_SESSION['arcsort'],array('ASC','DESC')) ? $_SESSION['arcsort'] : 'DESC';	
	$data = $db->GetOne("SELECT COUNT(*) FROM sdw_articles a LEFT JOIN sdw_category c ON c.cid=a.cid $wheresql");
	$totalrecords = $data['COUNT(*)'];
	$pagecount = $totalrecords<$pagesize ? 1 : ceil($totalrecords/$pagesize);
	$page = min(array($page,$pagecount));
	$limit = ($page-1) * $pagesize;
	$query = $db->query("SELECT a.id,a.cid,a.title,a.author,a.authorid,a.dateline,a.views,a.recommend,a.comments,a.audited,c.name FROM sdw_articles a LEFT JOIN 
	sdw_category c ON c.cid=a.cid $wheresql ORDER BY $orderby $sort LIMIT $limit,$pagesize");
	while($result = $db->fetch_array($query)){
		$result['arcurl'] = 'article.php?id='.$result['id'];
	    $articles[] = $result;
	}
	$smarty->assign('cid',$filter['cid']);
	$smarty->assign('totalrecords',$totalrecords);
	$smarty->assign('filter',$filter);
	$smarty->assign('articles',$articles);
	$querystring = "cid=$filter[cid]&q=$filter[key]&audited=$filter[audited]&recommend=$filter[recommend]&authorid=$filter[authorid]&image=$filter[image]&orderby=$filter[orderby]&sort=$filter[sort]";	
	$smarty->assign('pagelink',adminpage($page,$pagecount,$querystring));
	$smarty->assign('querystring',$querystring."&page=$page");
	$smarty->assign('categories',listcategries($filter['cid'],'article'));
	if ($filter['cid']>0) $smarty->assign('category',$db->GetOne("SELECT name FROM sdw_category WHERE cid=$filter[cid]"));
	unset($articles,$article,$where,$wheresql,$filter,$query,$result,$querystring,$orderby,$sort);
}
$smarty->display('admin_article.htm');
cpfooter();
?>