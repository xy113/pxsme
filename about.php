<?php
require_once './source/include/common.inc.php';
require_once './source/function/function.article.php';
$articleid = intval(MyGet('id'));
$smarty->assign('about',$db->GetOne("SELECT * FROM sdw_about WHERE id=$articleid"));
$articles[3] = listarticles(3);
$articles[29] = listarticles(29);
$smarty->assign('articles',$articles);
$smarty->assign('navs',listnavs());
$smarty->assign('contactus',get_contactus());
$smarty->display('about.htm');
?>