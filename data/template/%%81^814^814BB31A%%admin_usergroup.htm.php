<?php /* Smarty version 2.6.19, created on 2012-02-27 06:49:35
         compiled from admin_usergroup.htm */ ?>
<?php if ($this->_tpl_vars['operation'] == 'addnew' || $this->_tpl_vars['operation'] == 'edit'): ?>
<div class="main-div">
	<div class="pos-div">
		<h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['group']['manage']; ?>
 &raquo; <?php if ($this->_tpl_vars['operation'] == 'addnew'): ?><?php echo $this->_tpl_vars['lang']['group']['addnew']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['group']['edit']; ?>
<?php endif; ?></h2>
	</div>
	<div class="toolbar">
		<span class="btn btn-dft" onclick="SaveGroup()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php if ($this->_tpl_vars['operation'] == 'addnew'): ?><?php echo $this->_tpl_vars['lang']['save']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['save_edit']; ?>
<?php endif; ?></span></span>
		<span class="btn btn-dft" onclick="LoadPage()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['back_list']; ?>
</span></span>
		<span class="btn btn-dft" onclick="window.location.reload()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
	</div>
	<form name="usergroup" method="post" action="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=usergroup&operation=save">
	  <input type="hidden" name="groupid" value="<?php echo $this->_tpl_vars['group']['groupid']; ?>
" />
	  <table border="0" cellspacing="0" cellpadding="0" class="form-table">
		<tr>
		  <td width="90"><?php echo $this->_tpl_vars['lang']['group']['name']; ?>
£º</td>
		  <td><input name="newgroup[groupname]" type="text" class="textinput" id="groupname" style="width:240px;" value="<?php echo $this->_tpl_vars['group']['groupname']; ?>
" /></td>
		</tr>
		<tr>
		  <td><?php echo $this->_tpl_vars['lang']['group']['min']; ?>
£º</td>
		  <td><input name="newgroup[minexp]" type="text" class="textinput" id="minexp" style="width:240px;" value="<?php echo $this->_tpl_vars['group']['minexp']; ?>
" /></td>
		</tr>
		<tr>
		  <td><?php echo $this->_tpl_vars['lang']['group']['max']; ?>
£º</td>
		  <td><input name="newgroup[maxexp]" type="text" class="textinput" id="maxexp" style="width:240px;" value="<?php echo $this->_tpl_vars['group']['maxexp']; ?>
" /></td>
		</tr>
		<tr>
		  <td><?php echo $this->_tpl_vars['lang']['group']['allowpost']; ?>
£º</td>
		  <td>
		  <input type="radio" name="newgroup[allowpost]" value="1"<?php if ($this->_tpl_vars['group']['allowpost'] == 1): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
¡¡
	      <input type="radio" name="newgroup[allowpost]" value="0"<?php if ($this->_tpl_vars['group']['allowpost'] == 0): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['no']; ?>

		  </td>
		</tr>
		<tr>
		  <td><?php echo $this->_tpl_vars['lang']['group']['allowreply']; ?>
£º</td>
		  <td>
		  <input type="radio" name="newgroup[allowreply]" value="1"<?php if ($this->_tpl_vars['group']['allowreply'] == 1): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
¡¡
	      <input type="radio" name="newgroup[allowreply]" value="0"<?php if ($this->_tpl_vars['group']['allowreply'] == 0): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['no']; ?>

		  </td>
		</tr>
		<tr>
		  <td><?php echo $this->_tpl_vars['lang']['group']['allowupload']; ?>
£º</td>
		  <td>
		  <input type="radio" name="newgroup[allowupload]" value="1"<?php if ($this->_tpl_vars['group']['allowupload'] == 1): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
¡¡
	      <input type="radio" name="newgroup[allowupload]" value="0"<?php if ($this->_tpl_vars['group']['allowupload'] == 0): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['no']; ?>

		  </td>
		</tr>
		<tr>
		  <td><?php echo $this->_tpl_vars['lang']['group']['allowcontrib']; ?>
£º</td>
		  <td>
		  <input type="radio" name="newgroup[allowcontrib]" value="1"<?php if ($this->_tpl_vars['group']['allowcontrib'] == 1): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
¡¡
	      <input type="radio" name="newgroup[allowcontrib]" value="0"<?php if ($this->_tpl_vars['group']['allowcontrib'] == 0): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['no']; ?>

		  </td>
		</tr>
		<tr>
		  <td><?php echo $this->_tpl_vars['lang']['remark']; ?>
£º</td>
		  <td><textarea name="newgroup[body]" id="body" style="width:500px; height:50px;"><?php echo $this->_tpl_vars['group']['body']; ?>
</textarea></td>
		</tr>
	  </table>
	</form>
	<div class="toolbar">
		<span class="btn btn-dft" onclick="SaveGroup()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php if ($this->_tpl_vars['operation'] == 'addnew'): ?><?php echo $this->_tpl_vars['lang']['save']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['save_edit']; ?>
<?php endif; ?></span></span>
		<span class="btn btn-dft" onclick="LoadPage()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['back_list']; ?>
</span></span>
		<span class="btn btn-dft" onclick="window.location.reload()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
	</div>
</div>
<script type="text/javascript">
var grouptext = new Array();
grouptext[0] = '<?php echo $this->_tpl_vars['lang']['group']['name_empty']; ?>
';
grouptext[1] = '<?php echo $this->_tpl_vars['lang']['group']['min_empty']; ?>
';
grouptext[2] = '<?php echo $this->_tpl_vars['lang']['group']['max_empty']; ?>
';
<?php echo 'function SaveGroup(){
	var theForm = document.usergroup;
   if(!theForm.groupname.value){
	  showError(grouptext[0]);
	  return false;
   }
   if(!theForm.minexp.value){
       showError(grouptext[1]);
	   return false;
   }
   if(!theForm.maxexp.value){
	  showError(grouptext[2])
	  return false;
   }
   theForm.submit();
   return true;
}'; ?>

</script>
<?php else: ?>
<div class="main-div">
	<div class="pos-div">
		<h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['group']['manage']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['group']['list']; ?>
</h2>
	</div>
	<div class="toolbar">
		<span class="btn btn-dft" onclick="Drop('groupid[]')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><b><?php echo $this->_tpl_vars['lang']['drop']; ?>
</b></span></span>
		<span class="btn btn-dft" onclick="LoadPage('operation=addnew')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['group']['addnew']; ?>
</span></span>
		<span class="btn btn-dft" onclick="LoadPage()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
	</div>
	  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="list">
		<tr>
		  <th width="20"><input type="checkbox" onclick="checkAll(this,'groupid[]')" /></th>
		  <th width="15" class="tocenter">ID</th>
		  <th width="200"><?php echo $this->_tpl_vars['lang']['group']['name']; ?>
</th>
		  <th width="60"><?php echo $this->_tpl_vars['lang']['group']['min']; ?>
</th>
		  <th width="60"><?php echo $this->_tpl_vars['lang']['group']['max']; ?>
</th>
		  <th class="last"><?php echo $this->_tpl_vars['lang']['remark']; ?>
</th>
		</tr>
		<?php $_from = $this->_tpl_vars['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['gg']):
?>
		<tr onmouseover="this.className='active'" onmouseout="this.className=''">
		  <td><input type="checkbox" name="groupid[]" value="<?php echo $this->_tpl_vars['gg']['groupid']; ?>
" /></td>
		  <td class="tocenter"><?php echo $this->_tpl_vars['gg']['groupid']; ?>
</td>
		  <td><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=usergroup&operation=edit&groupid=<?php echo $this->_tpl_vars['gg']['groupid']; ?>
"><?php echo $this->_tpl_vars['gg']['groupname']; ?>
</a></td>
		  <td><span title="<?php echo $this->_tpl_vars['lang']['click_edit']; ?>
" onclick="Edit(this,'operation=editmin&groupid=<?php echo $this->_tpl_vars['gg']['groupid']; ?>
')"><?php echo $this->_tpl_vars['gg']['minexp']; ?>
</span></td>
		  <td><span title="<?php echo $this->_tpl_vars['lang']['click_edit']; ?>
" onclick="Edit(this,'operation=editmax&groupid=<?php echo $this->_tpl_vars['gg']['groupid']; ?>
')"><?php echo $this->_tpl_vars['gg']['maxexp']; ?>
</span></td>
		  <td><?php echo $this->_tpl_vars['gg']['body']; ?>
</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
	  </table>
	<div class="toolbar">
		<span class="btn btn-dft" onclick="Drop('groupid[]')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><b><?php echo $this->_tpl_vars['lang']['drop']; ?>
</b></span></span>
		<span class="btn btn-dft" onclick="LoadPage('operation=addnew')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['group']['addnew']; ?>
</span></span>
		<span class="btn btn-dft" onclick="LoadPage()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
	</div>
</div>
<?php endif; ?>