<?php /* Smarty version 2.6.19, created on 2012-03-29 15:15:44
         compiled from header.htm */ ?>
<div class="top">
<span id="member">
<?php if ($this->_tpl_vars['logined']): ?>
欢迎您：<?php echo $this->_tpl_vars['my']['username']; ?>
　<a href="member.php">个人中心</a> <a href="member.php?action=login&do=logout">注销</a>
<?php else: ?>
<a href="member.php?action=login">登录</a> <a href="member.php?action=register">注册</a>
<?php endif; ?></span>
欢迎访问盘县中小企业联合会官方网站。
</div>
<div class="banner"><img src="templates/default/images/banner.jpg" border="0" /></div>
<div class="nav">
	<ul>
		<li><a href="./">网站首页</a></li>
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
<script type="text/javascript">setInterval("$$('timer').innerHTML=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());",1000);</script>