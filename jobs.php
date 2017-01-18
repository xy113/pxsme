<?php
require_once './source/include/common.inc.php';
require_once './source/function/function.article.php';
$cid = intval(MyGet('cid'));
$pagesize = 30;
$cid>0 && $wheresql = "AND (a.cid=$cid OR c.fid=$cid)";
$data = $db->GetOne("SELECT COUNT(*) FROM sdw_jobs a LEFT JOIN sdw_category c ON c.cid=a.cid WHERE a.audited=1 $wheresql");
$totalrecords = $data['COUNT(*)'];
$pagecount = $totalrecords<$pagesize ? 1 : ceil($totalrecords/$pagesize);
$page = min(array($page,$pagecount));
$limit = ($page-1) * $pagesize;
$query = $db->query("SELECT a.id,a.title,a.numbers,a.salary,a.respon,a.content,a.dateline,a.cid FROM sdw_jobs a LEFT JOIN sdw_category c ON c.cid=a.cid WHERE a.audited=1 $wheresql ORDER BY a.id DESC LIMIT $limit,$pagesize");
while ($result = $db->fetch_array($query)){
	$result['respon'] = nl2br($result['respon']);
	$jobs['list'][] = $result;
}
$smarty->assign('cid',$cid);
$smarty->assign('jobs',$jobs);
$smarty->assign('pagelink',pagination($page,$pagecount,"cid=$cid",'arclist.php'));
$smarty->assign('categories',listcategries($cid));
if ($cid>0) $smarty->assign('category',$db->GetOne("SELECT * FROM sdw_category WHERE cid=$cid"));
$smarty->assign('navs',listnavs());
$smarty->assign('contactus',get_contactus());
$smarty->display('jobs.htm');
?>