<?php
require_once './source/include/common.inc.php';
$messages = array();
$articleid = intval(MyGet('articleid'));
if ($do == 'save'){
	(!$my->logined || !$inajax) && dexit('nologin');
	$message['aid'] = $articleid;
	$message['uid'] = $my->uid;
	$message['message'] = utf2gbk(MyPost('message'));
	$message['dateline'] = $timestamp;
	$message['ip'] = $ipaddr;
	$db->insert('sdw_comments',$message);
}
if ($do == 'drop'){
	(!($my->useraccess['adminid']>0) || !$inajax) && dexit('nopriv');
	$db->query("DELETE FROM sdw_comments WHERE id=".intval(MyGet('id')));
}
$pagesize = 10;
$data = $db->query("SELECT COUNT(*) FROM sdw_comments c LEFT JOIN sdw_members m ON m.uid=c.uid WHERE c.aid=$articleid");
$totalrecords = $data['COUNT(*)'];
$pagecount = $totalrecords<$pagesize ? 1 : ceil($totalrecords/$pagesize);
$limit = ($page-1)*$pagesize;
$query = $db->query("SELECT c.*,m.username FROM sdw_comments c LEFT JOIN sdw_members m ON m.uid=c.uid WHERE c.aid=$articleid ORDER BY c.id ASC LIMIT $limit,$pagesize");
while ($result = $db->fetch_array($query)){
	$messages[] = $result;
}
$smarty->assign('messages',$messages);
$smarty->assign('articleid',$articleid);
if ($pagecount>1) $smarty->assign('pagelink',commentPage($page,$pagecount,"articleid=$articleid"));
$smarty->display('comment.htm');
function commentPage($page,$total,$para=''){ 
	$prevs = $page-5;  
	if($prevs<=0)$prevs = 1; 
	$prev  = $page-1;
	if($prev<=0) $prev = 1;
	$nexts = $page+5;
	if($nexts>$total)$nexts=$total; 
	$next  = $page+1;
	if($next>$total)$next=$total; 
	$pagenavi ="<a href=\"javascript:;\" onclick=\"commentPage(1,'$para')\">首页</a>"; 
	$pagenavi.="<a href=\"javascript:;\" onclick=\"commentPage($prev,'$para')\">上一页</a>"; 
	for($i=$prevs;$i<=$page-1;$i++){ 
	   $pagenavi.="<a href=\"javascript:;\" onclick=\"commentPage($i,'$para')\">$i</a>"; 
	} 
	$pagenavi.="<span class=\"cur\">$page</span>"; 
	for($i=$page+1;$i<=$nexts;$i++){ 
	   $pagenavi.="<a href=\"javascript:;\" onclick=\"commentPage($i,'$para')\">$i</a>"; 
	} 
	$pagenavi.="<a href=\"javascript:;\" onclick=\"commentPage($next,'$para')\">下一页</a>"; 
	$pagenavi.="<a href=\"javascript:;\" onclick=\"commentPage($total,'$para')\">尾页</a>"; 
	return $pagenavi ; 
}
?>