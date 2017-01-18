<?php /* Smarty version 2.6.19, created on 2012-02-27 07:31:29
         compiled from account.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'account.htm', 29, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['my']['username']; ?>
个人中心_<?php echo $this->_tpl_vars['config']['sitename']; ?>
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
	<div class="yourpos">当前位置：<a href="./">首页</a> >> 会员中心 >> 个人中心</div>
 	<div id="reg-wrap">
		<h1>会员注册</h1>
		<form method="post" action="member.php?action=account&do=save">
		<input type="hidden" name="hash" value="<?php echo $_SESSION['hash']; ?>
" />
		<div class="item"><strong>用户名：</strong><?php echo $this->_tpl_vars['my']['username']; ?>
</div>
		<div class="item"><strong>真实姓名：</strong><input type="text" name="membernew[realname]" id="member_realname" class="input" value="<?php echo $this->_tpl_vars['member']['realname']; ?>
" /></div>
		<div class="item"><strong>电子邮件：</strong><input type="text" name="membernew[email]" id="member_email" class="input" value="<?php echo $this->_tpl_vars['member']['email']; ?>
" /> *</div>
		<div class="item"><strong>联系电话：</strong><input type="text" name="membernew[tel]" id="member_tel" class="input" value="<?php echo $this->_tpl_vars['member']['tel']; ?>
" /></div>
		<div class="item"><strong>移动电话：</strong><input type="text" name="membernew[mobile]" id="member_company" class="input" value="<?php echo $this->_tpl_vars['member']['mobile']; ?>
" /></div>
		<div class="item"><strong>QQ号码：</strong><input type="text" name="membernew[userim]" id="member_userim" class="input" value="<?php echo $this->_tpl_vars['member']['userim']; ?>
" /></div>
		<div class="item"><strong>单位名称：</strong><input type="text" name="membernew[company]" id="member_company" class="input" value="<?php echo $this->_tpl_vars['member']['company']; ?>
" /></div>
		<div class="item"><strong>注册日期：</strong><?php echo ((is_array($_tmp=$this->_tpl_vars['my']['regdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M')); ?>
</div>
		<div class="item"><strong>注册IP：</strong><?php echo $this->_tpl_vars['my']['regip']; ?>
</div>
		<div class="item"><strong>最后登录：</strong><?php echo ((is_array($_tmp=$this->_tpl_vars['my']['lastlogin'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M')); ?>
</div>
		<div class="item"><strong>最后登录IP：</strong><?php echo $this->_tpl_vars['my']['lastip']; ?>
</div>
		<div class="item"><strong>拥有财富：</strong><?php echo $this->_tpl_vars['my']['credits']; ?>
金币</div>
		<div class="item"><input type="submit" class="button" value="修改信息" /></div>
		</form>
	</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.htm', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>