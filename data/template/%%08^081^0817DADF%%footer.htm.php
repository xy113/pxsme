<?php /* Smarty version 2.6.19, created on 2012-02-27 09:47:12
         compiled from footer.htm */ ?>
<div class="nav2"><?php $_from = $this->_tpl_vars['navs']['bot']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nav']):
?><a href="<?php echo $this->_tpl_vars['nav']['url']; ?>
"<?php echo $this->_tpl_vars['nav']['target']; ?>
><?php echo $this->_tpl_vars['nav']['title']; ?>
</a>��<?php endforeach; endif; unset($_from); ?></div>
<div id="footer">
	���ܵ�λ: <?php echo $this->_tpl_vars['config']['sitename']; ?>
 ����֧�֣�<a href="http://www.toking.cc" target="_blank">�ؿѿƼ�</a>  ������ <?php echo $this->_tpl_vars['config']['icp']; ?>
<br />
	��ַ��<?php echo $this->_tpl_vars['contactus']['address']; ?>
 ��ϵ�绰��<?php $_from = $this->_tpl_vars['contactus']['tel']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tel']):
?><?php echo $this->_tpl_vars['tel']; ?>
 <?php endforeach; endif; unset($_from); ?> ���棺<?php $_from = $this->_tpl_vars['contactus']['fax']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fax']):
?><?php echo $this->_tpl_vars['fax']; ?>
 <?php endforeach; endif; unset($_from); ?>
</div>
<div class="blank"></div>
</body>
</html>