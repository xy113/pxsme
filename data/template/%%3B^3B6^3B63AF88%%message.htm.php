<?php /* Smarty version 2.6.19, created on 2012-02-27 03:19:00
         compiled from message.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ϵͳ��Ϣ��ʾ_<?php echo $this->_tpl_vars['config']['sitename']; ?>
</title>
<meta name="keywords" content="<?php echo $this->_tpl_vars['config']['keywords']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['config']['description']; ?>
" />
<link href="templates/default/images/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="static/js/jquery.js"></script>
<script type="text/javascript" src="static/js/common.js"></script>
</head>

<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.htm', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="page-wrap">
<div class="messagebox">
<?php if ($this->_tpl_vars['msg_type'] == 0): ?>
<h3 class="ok"><?php echo $this->_tpl_vars['msg_detail']; ?>
</h3>
<?php elseif ($this->_tpl_vars['msg_type'] == 1): ?>
<h3 class="error"><?php echo $this->_tpl_vars['msg_detail']; ?>
</h3>
<?php else: ?>
<h3 class="confirm"><?php echo $this->_tpl_vars['msg_detail']; ?>
</h3>
<?php endif; ?>
<div class="blank"></div>
<?php if ($this->_tpl_vars['auto_redirect']): ?>
<div class="messagediv" id="redirectionMsg">�����������ѡ��,ҳ�潫��<span id="spanSeconds">3</span>����Զ���ת����һ��ҳ�档</div>
<?php else: ?>
<div class="messagediv" id="redirectionMsg">���β�������ɣ���ѡ����������Ӽ�����һ��������</div>
<?php endif; ?>
<div class="messagediv"><img src="templates/default/images/arrow.gif" border="0" align="absmiddle" width="9" height="9" />
	<?php $_from = $this->_tpl_vars['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?> 
	<a href="<?php echo $this->_tpl_vars['aa']['href']; ?>
" target="<?php echo $this->_tpl_vars['aa']['target']; ?>
"><?php echo $this->_tpl_vars['aa']['text']; ?>
</a> 
	<?php endforeach; endif; unset($_from); ?>
</div>
</div>
<?php if ($this->_tpl_vars['auto_redirect']): ?>
<script type="text/javascript">
<!--
var seconds = 3;
var defaultUrl = "<?php echo $this->_tpl_vars['defaulturl']; ?>
";
<?php echo '
window.onload = function(){
  if (defaultUrl == \'javascript:history.go(-1)\' && window.history.length == 0){
    document.getElementById(\'redirectionMsg\').innerHTML = \'\';
    return;
  }
  window.setInterval(redirection, 1000);
}
function redirection(){	
    if (seconds <= 0){
    	window.clearInterval();
    	return;
    }
  	seconds --;
  	document.getElementById(\'spanSeconds\').innerHTML = seconds;
  	if (seconds == 0){
    	window.clearInterval();
    	location.href = defaultUrl;
  	}
}'; ?>

//-->
</script>
<?php endif; ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.htm', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>