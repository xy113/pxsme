<?php /* Smarty version 2.6.19, created on 2012-02-27 06:40:40
         compiled from register.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>会员注册_<?php echo $this->_tpl_vars['config']['sitename']; ?>
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
	<div class="yourpos">当前位置：<a href="./">首页</a> >> 会员中心 >> 会员注册</div>
 	<div id="reg-wrap">
		<h1>会员注册</h1>
		<form method="post" action="member.php?action=register&do=save" onsubmit="return checkReg()">
		<input type="hidden" name="hash" value="<?php echo $_SESSION['hash']; ?>
" />
		<div class="item"><strong>用户名：</strong><input type="text" name="membernew[username]" id="member_username" class="input" onblur="checkName(this.value)" /> * <span id="msg"></span></div>
		<div class="item"><strong>密　码：</strong><input type="password" name="membernew[password]" id="member_password" class="input" /> *</div>
		<div class="item"><strong>确认密码：</strong><input type="password" name="password2" id="password2" class="input" /> *</div>
		<div class="item"><strong>电子邮件：</strong><input type="text" name="membernew[email]" id="member_email" class="input" /> *</div>
		<div class="item"><strong>企业名称：</strong><input type="text" name="membernew[company]" id="member_company" class="input" /></div>
		<div class="item"><input type="submit" class="button" value="注册" /> <a href="member.php?action=login">已有账号点此登录</a></div>
		</form>
	</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.htm', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>