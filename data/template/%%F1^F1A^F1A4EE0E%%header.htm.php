<?php /* Smarty version 2.6.19, created on 2012-03-29 15:15:44
         compiled from header.htm */ ?>
<div class="top">
<span id="member">
<?php if ($this->_tpl_vars['logined']): ?>
��ӭ����<?php echo $this->_tpl_vars['my']['username']; ?>
��<a href="member.php">��������</a> <a href="member.php?action=login&do=logout">ע��</a>
<?php else: ?>
<a href="member.php?action=login">��¼</a> <a href="member.php?action=register">ע��</a>
<?php endif; ?></span>
��ӭ����������С��ҵ���ϻ�ٷ���վ��
</div>
<div class="banner"><img src="templates/default/images/banner.jpg" border="0" /></div>
<div class="nav">
	<ul>
		<li><a href="./">��վ��ҳ</a></li>
		<?php $_from = $this->_tpl_vars['navs']['mid']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nav']):
?>
		<li><a href="<?php echo $this->_tpl_vars['nav']['url']; ?>
"><?php echo $this->_tpl_vars['nav']['title']; ?>
</a></li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
	<div id="timer"></div>
	<div class="clear"></div>
</div>
<script type="text/javascript">setInterval("$$('timer').innerHTML=new Date().toLocaleString()+' ����'+'��һ����������'.charAt(new Date().getDay());",1000);</script>