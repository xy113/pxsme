<?php /* Smarty version 2.6.19, created on 2013-08-18 00:33:25
         compiled from right.htm */ ?>
<div class="blank"></div> 
		<div class="titlediv"><span class="title">领导机构</span></div>
		<div class="lingdao"><img src="templates/default/images/ld.jpg" border="0" class="avatar" />
			<p><strong>会长：</strong>严国立</p>
			<ul>
				<li><a href="about-4.html">本届会长</a></li>
				<li><a href="about-5.html">本会介绍</a></li>
				<li><a href="about-6.html">组织机构</a></li>
				<li><a href="about-7.html">本会职能</a></li>
				<li><a href="about-8.html">领导成员</a></li>
				<li><a href="about-9.html">本会章程</a></li>
				<li><a href="about-10.html">本会历史</a></li>
				<li><a href="about-11.html">本会宗旨</a></li>
				<li><a href="about-12.html">本会业务</a></li>
			</ul>
			<div class="clear"></div>
		</div>
		<div class="blank"></div> 
		<div class="titlediv"><span class="title">协会通告</span><span class="more"><a href="arclist-29-1.html">更多>></a></span></div>
		<ul>
			<?php $_from = $this->_tpl_vars['articles']['29']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arc']):
?>
			<li><a href="<?php echo $this->_tpl_vars['arc']['arcurl']; ?>
"><?php echo $this->_tpl_vars['arc']['title']; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
		<div class="blank"></div>
		<div class="titlediv"><span class="title">协会新闻</span><span class="more"><a href="arclist-3-1.html">更多>></a></span></div>
		<ul>
			<?php $_from = $this->_tpl_vars['articles']['29']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arc']):
?>
			<li><a href="<?php echo $this->_tpl_vars['arc']['arcurl']; ?>
"><?php echo $this->_tpl_vars['arc']['title']; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>