<?php /* Smarty version 2.6.19, created on 2012-02-22 09:13:38
         compiled from admin_category.htm */ ?>
<?php if ($this->_tpl_vars['operation'] == 'addnew' || $this->_tpl_vars['operation'] == 'edit'): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'libs/newcategory.htm', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
<div class="main-div">
<div class="pos-div">
	 <h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['category']['manage']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['category'][$this->_tpl_vars['ctype']]; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['category']['list']; ?>
</h2>
</div>
  <div class="toolbar">
	<span class="btn btn-dft" onclick="LoadPage('operation=addnew&ctype=<?php echo $this->_tpl_vars['ctype']; ?>
')" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['category']['addnew']; ?>
</span></span>
	<span class="btn btn-dft" onclick="LoadPage('ctype=<?php echo $this->_tpl_vars['ctype']; ?>
')" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
  </div>
  <table border="0" cellspacing="0" cellpadding="0" class="list">
    <tr>
      <th width="240"><?php echo $this->_tpl_vars['lang']['category']['name']; ?>
</th>
	  <th width="20" class="tocenter"><img src="templates/admincp/images/icon_view.gif" border="0" width="16" height="16" /></th>
      <th width="40" class="tocenter" style="cursor:pointer;" onclick="LoadPage('ctype=<?php echo $this->_tpl_vars['ctype']; ?>
')" title="<?php echo $this->_tpl_vars['lang']['click_resort']; ?>
"><?php echo $this->_tpl_vars['lang']['sort']; ?>
</th>
	  <th width="40" class="tocenter"><?php echo $this->_tpl_vars['lang']['category']['disabled']; ?>
</th>
      <th class="last"><?php echo $this->_tpl_vars['lang']['keywords']; ?>
</th>
    </tr>
	<?php $_from = $this->_tpl_vars['categories']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cc']):
?>
    <tr onmouseover="this.className='active'" onmouseout="this.className=''">
      <td onmouseover="showMenuBox(<?php echo $this->_tpl_vars['cc']['cid']; ?>
)" onmouseout="hideMenuBox(<?php echo $this->_tpl_vars['cc']['cid']; ?>
)">
	      <img src="templates/admincp/images/menu_minus.gif" border="0" align="absmiddle" width="9" height="9" /> 
	      <b><span title="<?php echo $this->_tpl_vars['lang']['click_edit']; ?>
" onclick="Edit(this,'operation=editname&cid=<?php echo $this->_tpl_vars['cc']['cid']; ?>
')"><?php echo $this->_tpl_vars['cc']['name']; ?>
</span></b> [ID:<?php echo $this->_tpl_vars['cc']['cid']; ?>
] 
	      <span class="c_box" id="box_<?php echo $this->_tpl_vars['cc']['cid']; ?>
">
			  <b class="icon-edit" tabindex="0" title="<?php echo $this->_tpl_vars['lang']['edit']; ?>
" onclick="LoadPage('operation=edit&ctype=<?php echo $this->_tpl_vars['ctype']; ?>
&cid=<?php echo $this->_tpl_vars['cc']['cid']; ?>
')"></b>
			  <b class="icon-drop" tabindex="0" title="<?php echo $this->_tpl_vars['lang']['drop']; ?>
" onclick="DropOne(<?php echo $this->_tpl_vars['cc']['cid']; ?>
)"></b>
			  <b class="icon-add" tabindex="0" title="<?php echo $this->_tpl_vars['lang']['add']; ?>
" onclick="LoadPage('operation=addnew&ctype=<?php echo $this->_tpl_vars['ctype']; ?>
&fid=<?php echo $this->_tpl_vars['cc']['cid']; ?>
')"></b>
		  </span>
	  </td>
	  <td class="tocenter"><a href="<?php echo $this->_tpl_vars['cc']['caturl']; ?>
" target="_blank"><img src="templates/admincp/images/icon_view.gif" title="<?php echo $this->_tpl_vars['lang']['view']; ?>
" border="0" width="16" height="16" /></a></td>
      <td class="tocenter"><span title="<?php echo $this->_tpl_vars['lang']['click_edit']; ?>
" onclick="Edit(this,'operation=editorder&cid=<?php echo $this->_tpl_vars['cc']['cid']; ?>
')"><?php echo $this->_tpl_vars['cc']['displayorder']; ?>
</span></td>
      <td class="tocenter"><img src="templates/admincp/images/<?php if ($this->_tpl_vars['cc']['disabled'] == 0): ?>yes.gif<?php else: ?>no.gif<?php endif; ?>" border="0" title="<?php echo $this->_tpl_vars['lang']['click_switch']; ?>
" onclick="toggle2(this,'operation=toggle_disabled&cid=<?php echo $this->_tpl_vars['cc']['cid']; ?>
')" /></td>
	  <td><?php echo $this->_tpl_vars['cc']['keywords']; ?>
</td>
    </tr>
	<?php $this->assign('sub', $this->_tpl_vars['cc']['cid']); ?>
    <?php $_from = $this->_tpl_vars['categories'][$this->_tpl_vars['sub']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ccc']):
?>
    <tr onmouseover="this.className='active'" onmouseout="this.className=''">
      <td style="padding-left:20px;" onmouseover="showMenuBox(<?php echo $this->_tpl_vars['ccc']['cid']; ?>
)" onmouseout="hideMenuBox(<?php echo $this->_tpl_vars['ccc']['cid']; ?>
)">
	       <img src="templates/admincp/images/menu_arrow.gif" border="0" align="absmiddle" width="9" height="9" /> 
		   <span title="<?php echo $this->_tpl_vars['lang']['click_edit']; ?>
" onclick="Edit(this,'operation=editname&cid=<?php echo $this->_tpl_vars['ccc']['cid']; ?>
')"><?php echo $this->_tpl_vars['ccc']['name']; ?>
</span>  [ID:<?php echo $this->_tpl_vars['ccc']['cid']; ?>
]
	       <span class="c_box" id="box_<?php echo $this->_tpl_vars['ccc']['cid']; ?>
"> 
			  <b class="icon-edit" tabindex="0" title="<?php echo $this->_tpl_vars['lang']['edit']; ?>
" onclick="LoadPage('operation=edit&ctype=<?php echo $this->_tpl_vars['ctype']; ?>
&cid=<?php echo $this->_tpl_vars['ccc']['cid']; ?>
')"></b>
			  <b class="icon-drop" tabindex="0" title="<?php echo $this->_tpl_vars['lang']['drop']; ?>
" onclick="DropOne(<?php echo $this->_tpl_vars['ccc']['cid']; ?>
)"></b>
			  <b class="icon-add" tabindex="0" title="<?php echo $this->_tpl_vars['lang']['add']; ?>
" onclick="LoadPage('operation=addnew&ctype=<?php echo $this->_tpl_vars['ctype']; ?>
&fid=<?php echo $this->_tpl_vars['cc']['cid']; ?>
')"></b>
		   </span>
	  </td>
	  <td class="tocenter"><a href="<?php echo $this->_tpl_vars['ccc']['caturl']; ?>
" target="_blank"><img src="templates/admincp/images/icon_view.gif" title="<?php echo $this->_tpl_vars['lang']['view']; ?>
" border="0" width="16" height="16" /></a></td>
      <td class="tocenter"><span title="<?php echo $this->_tpl_vars['lang']['click_edit']; ?>
" onclick="Edit(this,'operation=editorder&cid=<?php echo $this->_tpl_vars['ccc']['cid']; ?>
')"><?php echo $this->_tpl_vars['ccc']['displayorder']; ?>
</span></td>
      <td class="tocenter"><img src="templates/admincp/images/<?php if ($this->_tpl_vars['ccc']['disabled'] == 0): ?>yes.gif<?php else: ?>no.gif<?php endif; ?>" border="0" title="<?php echo $this->_tpl_vars['lang']['click_switch']; ?>
" onclick="toggle2(this,'operation=toggle_disabled&cid=<?php echo $this->_tpl_vars['ccc']['cid']; ?>
')" /></td>
	  <td><?php echo $this->_tpl_vars['bb']['keywords']; ?>
</td>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
	<?php endforeach; endif; unset($_from); ?>
  </table>
  <div class="toolbar">
	<span class="btn btn-dft" onclick="LoadPage('operation=addnew&ctype=<?php echo $this->_tpl_vars['ctype']; ?>
')" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['category']['addnew']; ?>
</span></span>
	<span class="btn btn-dft" onclick="LoadPage('ctype=<?php echo $this->_tpl_vars['ctype']; ?>
')" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
  </div>
</div>
<?php endif; ?>