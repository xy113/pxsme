<?php /* Smarty version 2.6.19, created on 2012-02-22 09:12:53
         compiled from admin_member.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin_member.htm', 159, false),)), $this); ?>
<?php if ($this->_tpl_vars['operation'] == 'addnew'): ?>
<div class="main-div">
	<div class="pos-div">
		<h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['member']['manage']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['member']['addnew']; ?>
</h2>
	</div>
	<div class="toolbar">
		<span class="btn btn-dft" onclick="SaveMember()" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php if ($this->_tpl_vars['operation'] == 'addnew'): ?><?php echo $this->_tpl_vars['lang']['save']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['save_edit']; ?>
<?php endif; ?></span></span>
		<span class="btn btn-dft" onclick="LoadPage()" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['back_list']; ?>
</span></span>
		<span class="btn btn-dft" onclick="window.location.reload();" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
	</div>
	  <form name="newmember" method="post" action="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=member&operation=save">
		<table border="0" cellspacing="0" cellpadding="0" class="form-table">
		  <tr>
			<td width="90"><?php echo $this->_tpl_vars['lang']['member']['name']; ?>
£º</td>
			<td><input name="member[username]" id="username" type="text" class="textinput" style="width:240px;" onblur="checkValue(this.value,'operation=checkname','<?php echo $this->_tpl_vars['lang']['user_exists']; ?>
')" /></td>
		  </tr>
		  <tr>
			<td><?php echo $this->_tpl_vars['lang']['member']['password']; ?>
£º</td>
			<td><input name="member[password]" id="password" type="password" class="textinput" style="width:240px;" /></td>
		  </tr>
		  <tr>
			<td><?php echo $this->_tpl_vars['lang']['member']['email']; ?>
£º</td>
			<td><input name="member[email]" id="email" type="text" class="textinput" style="width:240px;" /></td>
		  </tr>
		  <tr>
			<td><?php echo $this->_tpl_vars['lang']['member']['tel']; ?>
£º</td>
			<td><input name="member[tel]" type="text" class="textinput" style="width:240px;"></td>
		  </tr>
		  <tr>
			<td><?php echo $this->_tpl_vars['lang']['member']['company']; ?>
£º</td>
			<td><input name="member[company]" type="text"  class="textinput" style="width:240px;"></td>
		  </tr>
		 </table>
	  </form>
	<div class="toolbar">
		<span class="btn btn-dft" onclick="SaveMember()" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php if ($this->_tpl_vars['operation'] == 'addnew'): ?><?php echo $this->_tpl_vars['lang']['save']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['save_edit']; ?>
<?php endif; ?></span></span>
		<span class="btn btn-dft" onclick="LoadPage()" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['back_list']; ?>
</span></span>
		<span class="btn btn-dft" onclick="window.location.reload();" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
	</div>
</div>
<script type="text/javascript">
var membertext = new Array();
membertext[0] = '<?php echo $this->_tpl_vars['lang']['membertxt']['0']; ?>
';
membertext[1] = '<?php echo $this->_tpl_vars['lang']['membertxt']['1']; ?>
';
membertext[2] = '<?php echo $this->_tpl_vars['lang']['membertxt']['2']; ?>
';
<?php echo 'function SaveMember(){
	var theForm = document.newmember;
   	if(!$("#username").val()){
	  	showError(membertext[0])
	  	return false;
   	}
   	if(!$("#password").val()){
	  	showError(membertext[1]);
	  	return false;
   	}
   	if(!$("#email").val()){
	  	showError(membertext[2]);
	  	return false;
   	}
   	theForm.submit();
  	return true;
}'; ?>

</script>
<?php elseif ($this->_tpl_vars['operation'] == 'edit'): ?>
<div class="main-div">
	<div class="pos-div">
		<h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['member']['manage']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['member']['edit']; ?>
</h2>
	</div>
	<div class="toolbar">
		<span class="btn btn-dft" onclick="return SaveMember()" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php if ($this->_tpl_vars['operation'] == 'addnew'): ?><?php echo $this->_tpl_vars['lang']['save']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['save_edit']; ?>
<?php endif; ?></span></span>
		<span class="btn btn-dft" onclick="LoadPage()" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['back_list']; ?>
</span></span>
		<span class="btn btn-dft" onclick="window.location.reload();" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
	</div>
	  <form name="newmember" method="post" action="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=member&operation=modify">
		<input type="hidden" name="uid" value="<?php echo $this->_tpl_vars['member']['uid']; ?>
" />
		<table border="0" cellspacing="0" cellpadding="0" class="form-table">
		  <tr>
			<td width="90"><?php echo $this->_tpl_vars['lang']['member']['name']; ?>
£º</td>
			<td><?php echo $this->_tpl_vars['member']['username']; ?>
</td>
		  </tr>
		  <tr>
			<td><?php echo $this->_tpl_vars['lang']['member']['newpass']; ?>
£º</td>
			<td><input name="member[password]" id="password" type="password" class="textinput" style="width:240px;" /></td>
		  </tr>
		  <tr>
			<td><?php echo $this->_tpl_vars['lang']['member']['email']; ?>
£º</td>
			<td><input name="member[email]" id="email" type="text" class="textinput" style="width:240px;" value="<?php echo $this->_tpl_vars['member']['email']; ?>
" /></td>
		  </tr>
		  <tr>
			<td><?php echo $this->_tpl_vars['lang']['member']['tel']; ?>
£º</td>
			<td><input name="member[tel]" type="text" value="<?php echo $this->_tpl_vars['member']['tel']; ?>
" class="textinput" style="width:240px;"></td>
		  </tr>
		  <tr>
			<td><?php echo $this->_tpl_vars['lang']['member']['company']; ?>
£º</td>
			<td><input name="member[company]" type="text" value="<?php echo $this->_tpl_vars['member']['company']; ?>
" class="textinput" style="width:240px;"></td>
		  </tr>
		 </table>
	  </form>
	<div class="toolbar">
		<span class="btn btn-dft" onclick="return SaveMember()" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php if ($this->_tpl_vars['operation'] == 'addnew'): ?><?php echo $this->_tpl_vars['lang']['save']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['save_edit']; ?>
<?php endif; ?></span></span>
		<span class="btn btn-dft" onclick="LoadPage()" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['back_list']; ?>
</span></span>
		<span class="btn btn-dft" onclick="window.location.reload();" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
	</div>
</div>
<script type="text/javascript">
var membertxt = '<?php echo $this->_tpl_vars['lang']['membertxt']['2']; ?>
';
<?php echo 'function SaveMember(){
	var theForm = document.newmember;
   	if(!$("#email").val()){
	  	showError(membertxt);
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
 &raquo; <?php echo $this->_tpl_vars['lang']['member']['manage']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['member']['list']; ?>
¡¡<?php echo $this->_tpl_vars['lang']['total']; ?>
<?php echo $this->_tpl_vars['totalrecords']; ?>
<?php echo $this->_tpl_vars['lang']['total_records']; ?>
</h2>
	<div class="searchbox">
	  <select name="groupid" id="groupid" onchange="ListTable('groupid='+this.value)">
		  <option value="0"><?php echo $this->_tpl_vars['lang']['group']['all']; ?>
</option>
		  <?php $_from = $this->_tpl_vars['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gg']):
?>			  
		  <option value="<?php echo $this->_tpl_vars['gg']['groupid']; ?>
"<?php if ($this->_tpl_vars['gg']['current']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['gg']['groupname']; ?>
</option>
		  <?php endforeach; endif; unset($_from); ?>
	  </select>
	  <input type="text" name="q" id="q" value="<?php echo $_GET['q']; ?>
" class="textinput" style="width:145px;" />
	  <span class="btn btn-dft" onclick="ListTable('groupid='+$('#groupid').val()+'&q='+$('#q').val())" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['search']; ?>
</span></span>
 	</div>
</div>
<div class="toolbar">
    <span class="pagebox"><?php echo $this->_tpl_vars['pagelink']; ?>
</span>
    <span class="btn btn-dft" onclick="Drop('uid[]','<?php echo $this->_tpl_vars['querystring']; ?>
')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><b><?php echo $this->_tpl_vars['lang']['drop']; ?>
</b></span></span>
	<span class="btn btn-dft" onclick="LoadPage('operation=addnew')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['member']['addnew']; ?>
</span></span>
	<span class="btn btn-dft" onclick="LoadPage('<?php echo $this->_tpl_vars['querystring']; ?>
')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
</div>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="list">
    <tr>
      <th width="20"><input type="checkbox" onclick="checkAll(this,'uid[]')" /></td>
      <th><?php echo $this->_tpl_vars['lang']['member']['name']; ?>
</td>
      <th width="80"><?php echo $this->_tpl_vars['lang']['member']['group']; ?>
</td> 
      <th width="160"><?php echo $this->_tpl_vars['lang']['member']['email']; ?>
</td>
	  <th width="50"><?php echo $this->_tpl_vars['lang']['member']['exp']; ?>
</td>
	  <th width="50"><?php echo $this->_tpl_vars['lang']['member']['credits']; ?>
</td>
	  <th width="110"><?php echo $this->_tpl_vars['lang']['member']['regdate']; ?>
</td>
      <th width="90"><?php echo $this->_tpl_vars['lang']['member']['lastip']; ?>
</td>
      <th width="50" class="tocenter"><?php echo $this->_tpl_vars['lang']['member']['logintimes']; ?>
</td>
	  <th width="120" class="last"><?php echo $this->_tpl_vars['lang']['member']['lastlogin']; ?>
</td>
    </tr>
	<?php $_from = $this->_tpl_vars['members']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['member']):
?>
    <tr onmouseover="this.className='active'" onmouseout="this.className=''">
      <td><input type="checkbox" name="uid[]" value="<?php echo $this->_tpl_vars['member']['uid']; ?>
" onclick="checkThis(this)" /></td>
      <td><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=member&operation=edit&uid=<?php echo $this->_tpl_vars['member']['uid']; ?>
"><?php echo $this->_tpl_vars['member']['username']; ?>
</a></td>
      <td><?php echo $this->_tpl_vars['member']['groupname']; ?>
</td> 
      <td><?php echo $this->_tpl_vars['member']['email']; ?>
</td>
	  <td><?php echo $this->_tpl_vars['member']['exp']; ?>
</td>
	  <td><?php echo $this->_tpl_vars['member']['credits']; ?>
</td>
	  <td><?php echo ((is_array($_tmp=$this->_tpl_vars['member']['regdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M')); ?>
</td>
      <td><?php echo $this->_tpl_vars['member']['lastip']; ?>
</td>
      <td class="tocenter"><?php echo $this->_tpl_vars['member']['logintimes']; ?>
</span></td>
	  <td><span class="mdate"><?php echo ((is_array($_tmp=$this->_tpl_vars['member']['lastlogin'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</span></td>
    </tr>
	<?php endforeach; endif; unset($_from); ?>
	<tr>
	    <td colspan="7"><?php echo $this->_tpl_vars['lang']['select']; ?>
£º
			<a href="javascript:;" onclick="selectAll('uid[]')"><?php echo $this->_tpl_vars['lang']['selectall']; ?>
</a> - 
			<a href="javascript:;" onclick="cancelAll('uid[]')"><?php echo $this->_tpl_vars['lang']['noselect']; ?>
</a> - 
			<a href="javascript:;" onclick="reverseAll('uid[]')"><?php echo $this->_tpl_vars['lang']['reverseselect']; ?>
</a>
		</td>
	</tr>
  </table>
<div class="toolbar">
    <span class="pagebox"><?php echo $this->_tpl_vars['pagelink']; ?>
</span>
    <span class="btn btn-dft" onclick="Drop('uid[]','<?php echo $this->_tpl_vars['querystring']; ?>
')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><b><?php echo $this->_tpl_vars['lang']['drop']; ?>
</b></span></span>
	<span class="btn btn-dft" onclick="LoadPage('operation=addnew')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['member']['addnew']; ?>
</span></span>
	<span class="btn btn-dft" onclick="LoadPage('<?php echo $this->_tpl_vars['querystring']; ?>
')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
</div>
</div>
<?php endif; ?>