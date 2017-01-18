<?php /* Smarty version 2.6.19, created on 2012-03-29 15:15:44
         compiled from index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'index.htm', 146, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['config']['sitename']; ?>
-首页</title>
<meta name="keywords" content="<?php echo $this->_tpl_vars['config']['keywords']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['config']['description']; ?>
" />
<link href="templates/default/images/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="static/js/jquery.js"></script>
<script type="text/javascript" src="static/js/common.js"></script>
<script type="text/javascript" src="static/js/checkform.js"></script>
</head>

<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.htm', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="blank"></div>
<div class="page-wrap">
	<div class="index-left">
		<div class="titlediv"><span class="title">新闻动态</span><span class="more"><a href="arclist-1-1.html">更多</a></span></div>
		<div id="slide">
		<script type="text/javascript">
		var focus_width=320;
		var focus_height=246;
		var text_height=22;
		var swf_height = focus_height+text_height;
		var picArray = new Array();
		var linkArray = new Array();
		var textArray = new Array();
		<?php $_from = $this->_tpl_vars['slides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sd']):
?>
		picArray.push('<?php echo $this->_tpl_vars['sd']['image']; ?>
');
		linkArray.push('<?php echo $this->_tpl_vars['sd']['linkurl']; ?>
');
		textArray.push('<?php echo $this->_tpl_vars['sd']['title']; ?>
');
		<?php endforeach; endif; unset($_from); ?>
		var pics=picArray.join('|');
		var links=linkArray.join('|');
		var texts=textArray.join('|');
		document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ focus_width +'" height="'+ swf_height +'">');
		document.write('<param name="allowscriptaccess" value="samedomain"><param name="movie" value="static/swf/pixviewer.swf"><param name="quality" value="high"><param name="bgcolor" value="#ffffff">');
		document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
		document.write('<param name="flashvars" value="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'">');
		document.write('<embed src="static/swf/pixviewer.swf" wmode="opaque" flashvars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'" menu="false" bgcolor="#ffffff" quality="high" width="'+ focus_width +'" height="'+ swf_height +'" allowscriptaccess="samedomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');		document.write('</object>');
		</script>
		</div>
		<div id="focus-news">
			<div id="tab_news">
				<span class="selected" onmouseover="SwitchNews(0)"><a href="arclist-3-1.html">协会新闻</a></span>
				<span onmouseover="SwitchNews(1)"><a href="arclist-4-1.html">盘县新闻</a></span>
				<span onmouseover="SwitchNews(2)"><a href="arclist-13-1.html">领导讲话</a></span>
				<span onmouseover="SwitchNews(3)"><a href="arclist-14-1.html">行业动态</a></span>
			</div>
			<ul id="news_0" style="display:block;">
				<?php $_from = $this->_tpl_vars['articles']['3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['news3'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['news3']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['arc']):
        $this->_foreach['news3']['iteration']++;
?>
				<li<?php if (($this->_foreach['news3']['iteration'] <= 1)): ?> class="first"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['arc']['arcurl']; ?>
" target="_blank"><?php echo $this->_tpl_vars['arc']['title']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
			<ul id="news_1">
				<?php $_from = $this->_tpl_vars['articles']['4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['news4'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['news4']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['arc']):
        $this->_foreach['news4']['iteration']++;
?>
				<li<?php if (($this->_foreach['news4']['iteration'] <= 1)): ?> class="first"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['arc']['arcurl']; ?>
" target="_blank"><?php echo $this->_tpl_vars['arc']['title']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
			<ul id="news_2">
				<?php $_from = $this->_tpl_vars['articles']['13']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['news13'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['news13']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['arc']):
        $this->_foreach['news13']['iteration']++;
?>
				<li<?php if (($this->_foreach['news13']['iteration'] <= 1)): ?> class="first"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['arc']['arcurl']; ?>
" target="_blank"><?php echo $this->_tpl_vars['arc']['title']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
			<ul id="news_3">
				<?php $_from = $this->_tpl_vars['articles']['14']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['news14'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['news14']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['arc']):
        $this->_foreach['news14']['iteration']++;
?>
				<li<?php if (($this->_foreach['news14']['iteration'] <= 1)): ?> class="first"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['arc']['arcurl']; ?>
" target="_blank"><?php echo $this->_tpl_vars['arc']['title']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>
		<div class="blank"></div>
		<div class="newsbox">
			<div class="titlediv"><span class="title">服务中心</span><span class="more"><a href="arclist-17-1.html">更多</a></span></div>
			<ul>
				<?php $_from = $this->_tpl_vars['articles']['17']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arc']):
?>
				<li<?php if ($this->_tpl_vars['arc']['recommend']): ?> class="red"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['arc']['arcurl']; ?>
" target="_blank"><?php echo $this->_tpl_vars['arc']['title']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>
		<div class="newsbox newsbox-r">
			<div class="titlediv"><span class="title">项目申报</span><span class="more"><a href="arclist-26-1.html">更多</a></span></div>
			<ul>
				<?php $_from = $this->_tpl_vars['articles']['26']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arc']):
?>
				<li<?php if ($this->_tpl_vars['arc']['recommend']): ?> class="red"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['arc']['arcurl']; ?>
" target="_blank"><?php echo $this->_tpl_vars['arc']['title']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>
		<div class="banner2"><img src="templates/default/images/banner2.jpg" border="0" /></div>
		<div class="newsbox">
			<div class="titlediv"><span class="title">培训咨询</span><span class="more"><a href="arclist-27-1.html">更多</a></span></div>
			<ul>
				<?php $_from = $this->_tpl_vars['articles']['image27']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arc']):
?>
				<p><img src="<?php echo $this->_tpl_vars['arc']['image']; ?>
" border="0" /> <a href="<?php echo $this->_tpl_vars['arc']['arcurl']; ?>
" target="_blank"><?php echo $this->_tpl_vars['arc']['summary']; ?>
</a></p>
				<?php endforeach; endif; unset($_from); ?>
				<?php $_from = $this->_tpl_vars['articles']['27']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arc']):
?>
				<li<?php if ($this->_tpl_vars['arc']['recommend']): ?> class="red"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['arc']['arcurl']; ?>
" target="_blank"><?php echo $this->_tpl_vars['arc']['title']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>
		<div class="newsbox newsbox-r">
			<div class="titlediv"><span class="title">行业发展</span><span class="more"><a href="arclist-28-1.html">更多</a></span></div>
			<ul>
				<?php $_from = $this->_tpl_vars['articles']['image28']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arc']):
?>
				<p><img src="<?php echo $this->_tpl_vars['arc']['image']; ?>
" border="0" /> <a href="<?php echo $this->_tpl_vars['arc']['arcurl']; ?>
" target="_blank"><?php echo $this->_tpl_vars['arc']['summary']; ?>
</a></p>
				<?php endforeach; endif; unset($_from); ?>
				<?php $_from = $this->_tpl_vars['articles']['28']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arc']):
?>
				<li<?php if ($this->_tpl_vars['arc']['recommend']): ?> class="red"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['arc']['arcurl']; ?>
" target="_blank"><?php echo $this->_tpl_vars['arc']['title']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>
		<div class="blank"></div>
		<div class="newsbox">
			<div class="titlediv"><span class="title">盘县企业</span><span class="more"><a href="arclist-18-1.html">更多</a></span></div>
			<ul>
				<?php $_from = $this->_tpl_vars['articles']['18']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arc']):
?>
				<li<?php if ($this->_tpl_vars['arc']['recommend']): ?> class="red"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['arc']['arcurl']; ?>
" target="_blank"><?php echo $this->_tpl_vars['arc']['title']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>
		<div class="newsbox newsbox-r">
			<div class="titlediv"><span class="title">金融政策</span><span class="more"><a href="arclist-22-1.html">更多</a></span></span></div>
			<ul>
				<?php $_from = $this->_tpl_vars['articles']['22']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arc']):
?>
				<li<?php if ($this->_tpl_vars['arc']['recommend']): ?> class="red"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['arc']['arcurl']; ?>
" target="_blank"><?php echo $this->_tpl_vars['arc']['title']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>
		<div class="banner2"><img src="templates/default/images/banner3.jpg" border="0" /></div>
		<div class="titlediv"><span class="title">图片新闻</span><span class="more"><a href="arclist-16-1.html">更多</a></span></div>
		<div class="blank"></div>
		<?php $_from = $this->_tpl_vars['articles']['image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arc']):
?>
		<dl>
			<dd><a href="<?php echo $this->_tpl_vars['arc']['arcurl']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['arc']['image']; ?>
" border="0" /></a></dd>
			<dt><a href="<?php echo $this->_tpl_vars['arc']['arcurl']; ?>
" target="_blank"><?php echo $this->_tpl_vars['arc']['title']; ?>
</a></dt>
		</dl>
		<?php endforeach; endif; unset($_from); ?>
		<div class="clear"></div>
	</div>
	<div class="index-right">
		<?php if ($this->_tpl_vars['logined']): ?>
		<div class="titlediv"><span class="title">个人信息</span></div>
		<div class="account">用户名：<?php echo $this->_tpl_vars['my']['username']; ?>
</div>
		<div class="account">登录次数：<?php echo $this->_tpl_vars['my']['logintimes']; ?>
次</div>
		<div class="account">账户资金：<?php echo $this->_tpl_vars['my']['credits']; ?>
金币</div>
		<div class="account">上次登录：<?php echo ((is_array($_tmp=$this->_tpl_vars['my']['lastlogin'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M')); ?>
</div>
		<div class="account"><a href="member.php">个人中心</a> <a href="member.php?action=password">修改密码</a> <a href="member.php?action=login&do=logout">退出登录</a></div>
		<?php else: ?>
		<div class="titlediv"><span class="title">会员登录</span></div>
		<form method="post" action="member.php?action=login&do=login" onsubmit="return checkLogin()" target="_self">
			<div class="form-item">用户名：<input type="text" name="username" id="login_username" class="txt" /></div>
			<div class="form-item">密　码：<input type="password" name="password" id="login_password" class="txt" /></div>
			<div class="form-item"><input type="submit" class="button" value="登录" /> <input type="button" class="button" value="注册" onclick="window.location='member.php?action=register&do=reg'" /> <a href="./">忘记密码</a></div>
		</form>
		<?php endif; ?>
		<div class="blank"></div>
		<div class="titlediv"><span class="title">领导机构</span></div>
		<div class="lingdao"><img src="templates/default/images/ld.jpg" border="0" class="avatar" />
			<p><strong>会长：</strong>严国立</p>
			<ul>
				<li><a href="about-4.html" target="_blank">本届会长</a></li>
				<li><a href="about-5.html" target="_blank">本会介绍</a></li>
				<li><a href="about-6.html" target="_blank">组织机构</a></li>
				<li><a href="about-7.html" target="_blank">协会职能</a></li>
				<li><a href="about-8.html" target="_blank">领导成员</a></li>
				<li><a href="about-9.html" target="_blank">本会章程</a></li>
				<li><a href="about-10.html" target="_blank">本会历史</a></li>
				<li><a href="about-11.html" target="_blank">本会宗旨</a></li>
				<li><a href="about-12.html" target="_blank">本会业务</a></li>
			</ul>
			<div class="clear"></div>
		</div>
		<div class="blank"></div>
		<div class="titlediv"><span class="title">协会通告</span><span class="more"><a href="arclist-29-1.html">更多>></a></span></div>
		<ul>
			<?php $_from = $this->_tpl_vars['articles']['29']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arc']):
?>
			<li<?php if ($this->_tpl_vars['arc']['recommend']): ?> class="red"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['arc']['arcurl']; ?>
" target="_blank"><?php echo $this->_tpl_vars['arc']['title']; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
		<div class="blank"></div>
		<div class="titlediv"><span class="title">综合政策</span><span class="more"><a href="arclist-23-1.html">更多>></a></span></div>
		<ul>
			<?php $_from = $this->_tpl_vars['articles']['23']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arc']):
?>
			<li<?php if ($this->_tpl_vars['arc']['recommend']): ?> class="red"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['arc']['arcurl']; ?>
" target="_blank"><?php echo $this->_tpl_vars['arc']['title']; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
		<div class="ads"><img src="templates/default/images/300x250.png" border="0" /></div>
		<div class="blank"></div>
		<div class="titlediv"><span class="title">政策解读</span><span class="more"><a href="arclist-24-1.html">更多>></a></span></div>
		<ul>
			<?php $_from = $this->_tpl_vars['articles']['24']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arc']):
?>
			<li<?php if ($this->_tpl_vars['arc']['recommend']): ?> class="red"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['arc']['arcurl']; ?>
" target="_blank"><?php echo $this->_tpl_vars['arc']['title']; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
	</div>
	<div class="clear"></div>
	<div class="linktitle">友情链接</div>
	<div class="links">
		<?php $_from = $this->_tpl_vars['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['link']):
?>
		<a href="<?php echo $this->_tpl_vars['link']['siteurl']; ?>
" target="_blank"><?php echo $this->_tpl_vars['link']['sitename']; ?>
</a>
		<?php endforeach; endif; unset($_from); ?>
	</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.htm', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>