<?php /* Smarty version 2.6.19, created on 2012-02-28 06:25:28
         compiled from jobs.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Ӣ�ų�Ƹ_<?php echo $this->_tpl_vars['config']['sitename']; ?>
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
	<div id="job-wrap">
	<div class="postresume">�뽫���ĸ��˼���������ְλ���͵���pxsmehr@163.com</div>
	<?php $_from = $this->_tpl_vars['jobs']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['job']):
?>
	<div class="box" onmouseover="this.style.background='#f2f2f2'" onmouseout="this.style.background=''">
		<h3>��Ƹְλ��<?php echo $this->_tpl_vars['job']['title']; ?>
</h3>
		<div><strong>н�ʴ�����</strong><?php echo $this->_tpl_vars['job']['salary']; ?>
��<strong>��Ƹ������</strong><?php echo $this->_tpl_vars['job']['numbers']; ?>
</div>
		<p style="background:#f2f2f2;"><strong>����ְ��</strong><?php echo $this->_tpl_vars['job']['respon']; ?>
</p>
		<p><strong>����Ҫ��</strong><?php echo $this->_tpl_vars['job']['content']; ?>
</p>
	</div>
	<?php endforeach; endif; unset($_from); ?>
	<div class="postresume">�뽫���ĸ��˼���������ְλ���͵���pxsmehr@163.com</div>
	</div>
	<div class="page"><?php echo $this->_tpl_vars['pagelink']; ?>
</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.htm', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>