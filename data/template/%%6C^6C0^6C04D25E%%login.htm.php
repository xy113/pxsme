<?php /* Smarty version 2.6.19, created on 2012-02-27 07:00:50
         compiled from login.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��Ա��¼_<?php echo $this->_tpl_vars['config']['sitename']; ?>
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
	<div class="yourpos">��ǰλ�ã�<a href="./">��ҳ</a> >> ��Ա���� >> ��Ա��¼</div>
	<div id="login-form">
		<h1>��Ա��¼</h1>
		<form action="member.php?action=login&do=login" method="post" onsubmit="return checkLogin()">
		<div class="item">�û�����<input type="text" name="username" id="login_username" class="input" /></div>
		<div class="item">�ܡ��룺<input type="password" name="password" id="login_password" class="input" /></div>
		<div class="item"><input type="submit" value="��¼" class="submit" />��<a href="member.php?action=register">ע���»�Ա</a></div>
		</form>
	</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.htm', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>