<?php /* Smarty version 2.6.19, created on 2012-02-27 08:07:54
         compiled from article.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'article.htm', 21, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['article']['title']; ?>
_<?php echo $this->_tpl_vars['config']['sitename']; ?>
</title>
<meta name="keywords" content="<?php echo $this->_tpl_vars['config']['keywords']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['config']['description']; ?>
" />
<link href="templates/default/images/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="static/js/jquery.js"></script>
<script type="text/javascript" src="static/js/common.js"></script>
<script type="text/javascript" src="static/js/checkform.js"></script>
<script type="text/javascript" src="static/js/comment.js"></script>
</head>

<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.htm', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="page-wrap">
	<div class="bodyLeft">
		<div class="yourpos">��ǰλ�ã�<a href="./">��ҳ</a> >> <a href="arclist-<?php echo $this->_tpl_vars['article']['cid']; ?>
-1.html"><?php echo $this->_tpl_vars['article']['name']; ?>
</a> >> ����</div>
		<h1 class="article-title"><?php echo $this->_tpl_vars['article']['title']; ?>
</h1>
		<div class="article-info"><?php echo $this->_tpl_vars['config']['sitename']; ?>
��<?php echo ((is_array($_tmp=$this->_tpl_vars['article']['dateline'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M')); ?>
�������<?php echo $this->_tpl_vars['article']['views']; ?>
</div>
		<div class="article-body"><?php echo $this->_tpl_vars['article']['content']; ?>
</div>
		<div class="titlediv">�������</div>
		<ul class="list">
			<?php $_from = $this->_tpl_vars['articles']['related']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arc']):
?>
			<li>��<a href="<?php echo $this->_tpl_vars['arc']['arcurl']; ?>
"><?php echo $this->_tpl_vars['arc']['title']; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
		<div class="titlediv">�������</div>
		<span id="article_comment">���ڼ�������...</span>
		<script type="text/javascript">LoadData(<?php echo $this->_tpl_vars['article']['id']; ?>
)</script>
	</div>
	<div class="bodyRight">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'right.htm', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
	<div class="clear"></div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.htm', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>