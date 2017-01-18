<?php /* Smarty version 2.6.19, created on 2012-02-27 07:47:24
         compiled from password.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改密码_<?php echo $this->_tpl_vars['config']['sitename']; ?>
</title>
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
<div class="page-wrap">
	<div class="yourpos">当前位置：<a href="./">首页</a> >> 会员中心 >> 修改密码</div>
	<div id="reg-wrap">
		<h1>修改密码</h1>
		<form action="member.php?action=password&do=save" method="post" onsubmit="return checkPass()">
		<div class="item"><strong>当前密码：</strong><input type="password" name="password" id="password" class="input" /></div>
		<div class="item"><strong>新 密 码：</strong><input type="password" name="passwordnew" id="passwordnew" class="input" /></div>
		<div class="item"><strong>确认密码：</strong><input type="password" name="passwordnew1" id="passwordnew1" class="input" /></div>
		<div class="item"><input type="submit" value="修改密码" class="button" /></div>
		</form>
	</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.htm', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>