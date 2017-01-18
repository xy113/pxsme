<?php /* Smarty version 2.6.19, created on 2012-02-23 07:27:59
         compiled from admin_nav.htm */ ?>
<?php if ($this->_tpl_vars['operation'] == 'addnew' || $this->_tpl_vars['operation'] == 'edit'): ?>
<div class="main-div">
<div class="pos-div">
	 <h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['nav']['manage']; ?>
 &raquo; <?php if ($this->_tpl_vars['operation'] == 'edit'): ?><?php echo $this->_tpl_vars['lang']['nav']['edit']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['nav']['addnew']; ?>
<?php endif; ?></h2>
</div>
<div class="toolbar">
    <span class="btn btn-dft" onclick="SaveNav()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['save']; ?>
</span></span>
    <span class="btn btn-dft" onclick="LoadPage()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['back_list']; ?>
</span></span>
	<span class="btn btn-dft" onclick="window.location.reload()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
	<span class="ctrlenter">¡¡<?php echo $this->_tpl_vars['lang']['ctrlenter']; ?>
</span>
</div>
<form name="formnav" method="post" action="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=nav&operation=save">
  <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['nav']['id']; ?>
" />
  <table border="0" cellspacing="0" cellpadding="0" class="form-table">
    <tr>
      <td height="10" colspan="2"></td>
    </tr>
    <tr>
      <td width="60"><?php echo $this->_tpl_vars['lang']['nav']['father']; ?>
£º</td>
      <td>
	     <select name="navnew[fid]" onchange="ChangePos(this.value)">
		 <option value="0"><?php echo $this->_tpl_vars['lang']['nav']['first']; ?>
</option>
		 <?php $_from = $this->_tpl_vars['navs']['top']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nn']):
?>
		 <option value="<?php echo $this->_tpl_vars['nn']['id']; ?>
"<?php if (( $this->_tpl_vars['fid'] == $this->_tpl_vars['nn']['id'] || $this->_tpl_vars['nav']['fid'] == $this->_tpl_vars['nn']['id'] )): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['nn']['title']; ?>
</option>
		 <?php endforeach; endif; unset($_from); ?>
		 <?php $_from = $this->_tpl_vars['navs']['mid']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nn']):
?>
		 <option value="<?php echo $this->_tpl_vars['nn']['id']; ?>
"<?php if (( $this->_tpl_vars['fid'] == $this->_tpl_vars['nn']['id'] || $this->_tpl_vars['nav']['fid'] == $this->_tpl_vars['nn']['id'] )): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['nn']['title']; ?>
</option>
		 <?php endforeach; endif; unset($_from); ?>
		 <?php $_from = $this->_tpl_vars['navs']['bot']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nn']):
?>
		 <option value="<?php echo $this->_tpl_vars['nn']['id']; ?>
"<?php if (( $this->_tpl_vars['fid'] == $this->_tpl_vars['nn']['id'] || $this->_tpl_vars['nav']['fid'] == $this->_tpl_vars['nn']['id'] )): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['nn']['title']; ?>
</option>
		 <?php endforeach; endif; unset($_from); ?>
		 </select>
	  </td>
    </tr>
    <tr id="navpos"<?php if ($this->_tpl_vars['fid'] > 0 || $this->_tpl_vars['nav']['fid'] > 0): ?> style="display:none;"<?php endif; ?>>
      <td><?php echo $this->_tpl_vars['lang']['nav']['position']; ?>
£º</td>
      <td>
		  <select name="navnew[position]" id="position">
			<option value="top" <?php if ($this->_tpl_vars['nav']['position'] == 'top'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['nav']['top']; ?>
</option>
			<option value="mid" <?php if ($this->_tpl_vars['nav']['position'] == 'mid'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['nav']['mid']; ?>
</option>
			<option value="bot" <?php if ($this->_tpl_vars['nav']['position'] == 'bot'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['nav']['bottom']; ?>
</option>
		  </select>
      </td>
    </tr>
    <tr>
      <td><?php echo $this->_tpl_vars['lang']['nav']['name']; ?>
£º</td>
      <td><input name="navnew[title]" id="title" type="text" class="textinput" style="width:200px;" value="<?php echo $this->_tpl_vars['nav']['title']; ?>
" /></td>
    </tr>
    <tr>
      <td><?php echo $this->_tpl_vars['lang']['nav']['link']; ?>
£º</td>
      <td><input name="navnew[url]" id="url" type="text" class="textinput" style="width:200px;" value="<?php echo $this->_tpl_vars['nav']['url']; ?>
" /></td>
    </tr>
    <tr>
      <td><?php echo $this->_tpl_vars['lang']['nav']['order']; ?>
£º</td>
      <td><input name="navnew[ordernum]" id="ordernum" type="text" class="textinput" style="width:200px;" value="<?php echo $this->_tpl_vars['nav']['ordernum']; ?>
" /></td>
    </tr>
    <tr>
      <td height="10" colspan="2"></td>
  </tr>
  </table>
</form>
<div class="toolbar">
    <span class="btn btn-dft" onclick="SaveNav()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['save']; ?>
</span></span>
    <span class="btn btn-dft" onclick="LoadPage()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['back_list']; ?>
</span></span>
	<span class="btn btn-dft" onclick="window.location.reload()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
	<span class="ctrlenter">¡¡<?php echo $this->_tpl_vars['lang']['ctrlenter']; ?>
</span>
</div>
</div>
<script type="text/javascript">
var hassubmited = false;
var Message = new Array();
Message[0] = '<?php echo $this->_tpl_vars['lang']['navtxt']['0']; ?>
';
Message[1] = '<?php echo $this->_tpl_vars['lang']['navtxt']['1']; ?>
';
<?php echo 'function SaveNav(){
	if(hassubmited) return false;
	var theForm = document.formnav;
    if(!$("#title").val()){
	    showError(Message[0]);
	    return false;
    }else if(!$("#url").val()){
	    showError(Message[1]);
	    return false;
    }else{
   		hassubmited = true;
        theForm.submit();
	    return true;
    }
}
document.onkeydown = function(e){
	e=window.event||e;
	if(e.ctrlKey&&e.keyCode==13){
	   SaveNav();
	}
}
function ChangePos(val){
	if(!val)val=0;
	if(val>0){
		$$("navpos").style.display=\'none\';
	}else{
		$$("navpos").style.display=\'table-row\';
	}
}'; ?>

</script>
<?php else: ?>
<div class="main-div">
	<div class="pos-div">
		 <h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['nav']['manage']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['nav']['list']; ?>
</h2>
	</div>
	<div class="toolbar">
		<span class="btn btn-dft" onclick="Drop('id[]')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><b><?php echo $this->_tpl_vars['lang']['drop']; ?>
</b></span></span>
		<span class="btn btn-dft" onclick="LoadPage('operation=addnew')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['nav']['addnew']; ?>
</span></span>
		<span class="btn btn-dft" onclick="window.location.reload()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
	</div>
  	<table border="0" cellspacing="0" cellpadding="0" class="list">
    <tr>
      <th width="30"><input type="checkbox"  onclick="checkAll(this,'id[]')" /></th>
      <th width="160"><?php echo $this->_tpl_vars['lang']['nav']['name']; ?>
</th>
	  <th><?php echo $this->_tpl_vars['lang']['nav']['link']; ?>
</th>
      <th width="60"><?php echo $this->_tpl_vars['lang']['nav']['position']; ?>
</th>
      <th width="30" class="tocenter"><?php echo $this->_tpl_vars['lang']['sort']; ?>
</th>
      <th width="40" class="tocenter"><?php echo $this->_tpl_vars['lang']['nav']['newwindow']; ?>
</th>
      <th width="40" class="tocenter last"><?php echo $this->_tpl_vars['lang']['display']; ?>
</th>
    </tr>
	<?php $_from = $this->_tpl_vars['navs']['top']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nav']):
?>
	<?php $this->assign('subnav', $this->_tpl_vars['nav']['id']); ?>
    <tr onmouseover="this.className='active'" onmouseout="this.className=''">
      <td><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['nav']['id']; ?>
" onclick="checkThis(this)" /></td>
      <td><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=nav&operation=edit&id=<?php echo $this->_tpl_vars['nav']['id']; ?>
"><b><?php echo $this->_tpl_vars['nav']['title']; ?>
</b></a></td>
      <td><span onclick="Edit(this,'operation=editurl&id=<?php echo $this->_tpl_vars['nav']['id']; ?>
')"><?php echo $this->_tpl_vars['nav']['url']; ?>
</span></td>
	  <td style="color:#0000FF;"><?php echo $this->_tpl_vars['lang']['nav']['top']; ?>
</td>
      <td class="tocenter"><span onclick="javascript:Edit(this,'operation=editorder&id=<?php echo $this->_tpl_vars['nav']['id']; ?>
')"><?php echo $this->_tpl_vars['nav']['ordernum']; ?>
</span></td>
	  <td class="tocenter"><img onclick="toggle(this,'operation=toggle_open&id=<?php echo $this->_tpl_vars['nav']['id']; ?>
')" src="templates/admincp/images/<?php if ($this->_tpl_vars['nav']['open']): ?>yes.gif<?php else: ?>no.gif<?php endif; ?>" border="0" /></td>
      <td class="tocenter"><img onclick="toggle(this,'operation=toggle_display&id=<?php echo $this->_tpl_vars['nav']['id']; ?>
')" src="templates/admincp/images/<?php if ($this->_tpl_vars['nav']['display']): ?>yes.gif<?php else: ?>no.gif<?php endif; ?>" border="0" /></td>
    </tr>
	<?php $_from = $this->_tpl_vars['navs']['sub'][$this->_tpl_vars['subnav']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nn']):
?>
	<tr onmouseover="this.className='active'" onmouseout="this.className=''">
      <td><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['nn']['id']; ?>
" onclick="checkThis(this)" /> </td>
      <td>¡¡|-<a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=nav&operation=edit&id=<?php echo $this->_tpl_vars['nn']['id']; ?>
"><?php echo $this->_tpl_vars['nn']['title']; ?>
</a></td>
      <td><span onclick="Edit(this,'operation=editurl&id=<?php echo $this->_tpl_vars['nn']['id']; ?>
')"><?php echo $this->_tpl_vars['nn']['url']; ?>
</span></td>
	  <td style="color:#0000FF;"><?php echo $this->_tpl_vars['lang']['nav']['top']; ?>
</td>
      <td class="tocenter"><span onclick="javascript:Edit(this,'operation=editorder&id=<?php echo $this->_tpl_vars['nn']['id']; ?>
')"><?php echo $this->_tpl_vars['nn']['ordernum']; ?>
</span></td>
	  <td class="tocenter"><img onclick="toggle(this,'operation=toggle_open&id=<?php echo $this->_tpl_vars['nn']['id']; ?>
')" src="templates/admincp/images/<?php if ($this->_tpl_vars['nn']['open']): ?>yes.gif<?php else: ?>no.gif<?php endif; ?>" border="0" /></td>
      <td class="tocenter"><img onclick="toggle(this,'operation=toggle_display&id=<?php echo $this->_tpl_vars['nn']['id']; ?>
')" src="templates/admincp/images/<?php if ($this->_tpl_vars['nn']['display']): ?>yes.gif<?php else: ?>no.gif<?php endif; ?>" border="0" /></td>
    </tr>
	<?php endforeach; endif; unset($_from); ?>
	<?php endforeach; endif; unset($_from); ?>
	<?php $_from = $this->_tpl_vars['navs']['mid']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nav']):
?>
	<?php $this->assign('subnav', $this->_tpl_vars['nav']['id']); ?>
    <tr onmouseover="this.className='active'" onmouseout="this.className=''">
      <td><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['nav']['id']; ?>
" onclick="checkThis(this)" /></td>
      <td><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=nav&operation=edit&id=<?php echo $this->_tpl_vars['nav']['id']; ?>
"><b><?php echo $this->_tpl_vars['nav']['title']; ?>
</b></a></td>
      <td><span onclick="Edit(this,'operation=editurl&id=<?php echo $this->_tpl_vars['nav']['id']; ?>
')"><?php echo $this->_tpl_vars['nav']['url']; ?>
</span></td>
	  <td style="color:#ff0000;"><?php echo $this->_tpl_vars['lang']['nav']['mid']; ?>
</td>
      <td class="tocenter"><span onclick="javascript:Edit(this,'operation=editorder&id=<?php echo $this->_tpl_vars['nav']['id']; ?>
')"><?php echo $this->_tpl_vars['nav']['ordernum']; ?>
</span></td>
	  <td class="tocenter"><img onclick="toggle(this,'operation=toggle_open&id=<?php echo $this->_tpl_vars['nav']['id']; ?>
')" src="templates/admincp/images/<?php if ($this->_tpl_vars['nav']['open']): ?>yes.gif<?php else: ?>no.gif<?php endif; ?>" border="0" /></td>
      <td class="tocenter"><img onclick="toggle(this,'operation=toggle_display&id=<?php echo $this->_tpl_vars['nav']['id']; ?>
')" src="templates/admincp/images/<?php if ($this->_tpl_vars['nav']['display']): ?>yes.gif<?php else: ?>no.gif<?php endif; ?>" border="0" /></td>
    </tr>
	<?php $_from = $this->_tpl_vars['navs']['sub'][$this->_tpl_vars['subnav']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nn']):
?>
	<tr onmouseover="this.className='active'" onmouseout="this.className=''">
      <td><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['nn']['id']; ?>
" onclick="checkThis(this)" /></td>
      <td>¡¡|-<a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=nav&operation=edit&id=<?php echo $this->_tpl_vars['nn']['id']; ?>
"><?php echo $this->_tpl_vars['nn']['title']; ?>
</a></td>
      <td><span onclick="Edit(this,'operation=editurl&id=<?php echo $this->_tpl_vars['nn']['id']; ?>
')"><?php echo $this->_tpl_vars['nn']['url']; ?>
</span></td>
	  <td style="color:#ff0000;"><?php echo $this->_tpl_vars['lang']['nav']['mid']; ?>
</td>
      <td class="tocenter"><span onclick="javascript:Edit(this,'operation=editorder&id=<?php echo $this->_tpl_vars['nn']['id']; ?>
')"><?php echo $this->_tpl_vars['nn']['ordernum']; ?>
</span></td>
	  <td class="tocenter"><img onclick="toggle(this,'operation=toggle_open&id=<?php echo $this->_tpl_vars['nn']['id']; ?>
')" src="templates/admincp/images/<?php if ($this->_tpl_vars['nn']['open']): ?>yes.gif<?php else: ?>no.gif<?php endif; ?>" border="0" /></td>
      <td class="tocenter"><img onclick="toggle(this,'operation=toggle_display&id=<?php echo $this->_tpl_vars['nn']['id']; ?>
')" src="templates/admincp/images/<?php if ($this->_tpl_vars['nn']['display']): ?>yes.gif<?php else: ?>no.gif<?php endif; ?>" border="0" /></td>
    </tr>
	<?php endforeach; endif; unset($_from); ?>
	<?php endforeach; endif; unset($_from); ?>
	<?php $_from = $this->_tpl_vars['navs']['bot']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nav']):
?>
	<?php $this->assign('subnav', $this->_tpl_vars['nav']['id']); ?>
    <tr onmouseover="this.className='active'" onmouseout="this.className=''">
      <td><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['nav']['id']; ?>
" onclick="checkThis(this)" /></td>
      <td><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=nav&operation=edit&id=<?php echo $this->_tpl_vars['nav']['id']; ?>
"><b><?php echo $this->_tpl_vars['nav']['title']; ?>
</b></a></td>
      <td><span onclick="Edit(this,'operation=editurl&id=<?php echo $this->_tpl_vars['nav']['id']; ?>
')"><?php echo $this->_tpl_vars['nav']['url']; ?>
</span></td>
	  <td style="color:#006600;"><?php echo $this->_tpl_vars['lang']['nav']['bottom']; ?>
</td>
      <td class="tocenter"><span onclick="javascript:Edit(this,'operation=editorder&id=<?php echo $this->_tpl_vars['nav']['id']; ?>
')"><?php echo $this->_tpl_vars['nav']['ordernum']; ?>
</span></td>
	  <td class="tocenter"><img onclick="toggle(this,'operation=toggle_open&id=<?php echo $this->_tpl_vars['nav']['id']; ?>
')" src="templates/admincp/images/<?php if ($this->_tpl_vars['nav']['open']): ?>yes.gif<?php else: ?>no.gif<?php endif; ?>" border="0" /></td>
      <td class="tocenter"><img onclick="toggle(this,'operation=toggle_display&id=<?php echo $this->_tpl_vars['nav']['id']; ?>
')" src="templates/admincp/images/<?php if ($this->_tpl_vars['nav']['display']): ?>yes.gif<?php else: ?>no.gif<?php endif; ?>" border="0" /></td>
    </tr>
	<?php $_from = $this->_tpl_vars['navs']['sub'][$this->_tpl_vars['subnav']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nn']):
?>
	<tr onmouseover="this.className='active'" onmouseout="this.className=''">
      <td><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['nn']['id']; ?>
" onclick="checkThis(this)" /></td>
      <td>¡¡|-<a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=nav&operation=edit&id=<?php echo $this->_tpl_vars['nn']['id']; ?>
"><?php echo $this->_tpl_vars['nn']['title']; ?>
</a></td>
      <td><span onclick="Edit(this,'operation=editurl&id=<?php echo $this->_tpl_vars['nn']['id']; ?>
')"><?php echo $this->_tpl_vars['nn']['url']; ?>
</span></td>
	  <td style="color:#006600;"><?php echo $this->_tpl_vars['lang']['nav']['bottom']; ?>
</td>
      <td class="tocenter"><span onclick="javascript:Edit(this,'operation=editorder&id=<?php echo $this->_tpl_vars['nn']['id']; ?>
')"><?php echo $this->_tpl_vars['nn']['ordernum']; ?>
</span></td>
	  <td class="tocenter"><img onclick="toggle(this,'operation=toggle_open&id=<?php echo $this->_tpl_vars['nn']['id']; ?>
')" src="templates/admincp/images/<?php if ($this->_tpl_vars['nn']['open']): ?>yes.gif<?php else: ?>no.gif<?php endif; ?>" border="0" /></td>
      <td class="tocenter"><img onclick="toggle(this,'operation=toggle_display&id=<?php echo $this->_tpl_vars['nn']['id']; ?>
')" src="templates/admincp/images/<?php if ($this->_tpl_vars['nn']['display']): ?>yes.gif<?php else: ?>no.gif<?php endif; ?>" border="0" /></td>
    </tr>
	<?php endforeach; endif; unset($_from); ?>
	<?php endforeach; endif; unset($_from); ?>
	<tr><td colspan="8"><?php echo $this->_tpl_vars['lang']['select']; ?>
:
		<a href="javascript:;" onclick="selectAll('id[]')"><?php echo $this->_tpl_vars['lang']['selectall']; ?>
</a> - 
		<a href="javascript:;" onclick="cancelAll('id[]')"><?php echo $this->_tpl_vars['lang']['noselect']; ?>
</a> - 
		<a href="javascript:;" onclick="reverseAll('id[]')"><?php echo $this->_tpl_vars['lang']['reverseselect']; ?>
</a>
	</td></tr>
  	</table>
	<div class="toolbar">
		<span class="btn btn-dft" onclick="Drop('id[]')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><b><?php echo $this->_tpl_vars['lang']['drop']; ?>
</b></span></span>
		<span class="btn btn-dft" onclick="LoadPage('operation=addnew')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['nav']['addnew']; ?>
</span></span>
		<span class="btn btn-dft" onclick="window.location.reload()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
	</div>
</div>
<?php endif; ?>