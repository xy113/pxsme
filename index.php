<?php
define('CURSCRIPT','index');
require_once './source/include/common.inc.php';
require_once './source/function/function.article.php';
$articles[3] = listarticles(3);
$articles[4] = listarticles(4);
$articles[13] = listarticles(13);
$articles[14] = listarticles(14);
$articles[17] = listarticles(17);
$articles[26] = listarticles(26);
$articles[27] = listarticles(27,6);
$articles['image27'] = listimagearticles(27,1,50,150);
$articles[28] = listarticles(28,6);
$articles['image28'] = listimagearticles(28,1,50,150);
$articles[29] = listarticles(29);
$articles[18] = listarticles(18);
$articles[22] = listarticles(22);
$articles[23] = listarticles(23);
$articles[24] = listarticles(24);
$articles['image'] = listimagearticles(16,8);
$smarty->assign('articles',$articles);
$smarty->assign('slides',listslides(30));
$smarty->assign('navs',listnavs());
$smarty->assign('contactus',get_contactus());
$smarty->assign('links',listlinks());
$smarty->display('index.htm');
?>