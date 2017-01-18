<?php
require_once './source/include/common.inc.php';
require_once './source/function/function.article.php';
$articleid = intval(MyGet('id'));
$db->query("UPDATE sdw_articles SET views=views+1 WHERE id=$articleid");
$article = $db->GetOne("SELECT a.*,c.name,c.keywords FROM sdw_articles a LEFT JOIN sdw_category c ON c.cid=a.cid WHERE a.id=$articleid");
$smarty->assign('article',$article);
$articles[3] = listarticles(3);
$articles[29] = listarticles(29);
$articles['related'] = listarticles($article['cid'],5);
$smarty->assign('articles',$articles);
$smarty->assign('navs',listnavs());
//$smarty->assign('hashcode',base64_encode(authcode("$my->uid:$my->username",'ENCODE')));
$smarty->assign('contactus',get_contactus());
$smarty->display('article.htm');
?>