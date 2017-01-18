<?php /* Smarty version 2.6.19, created on 2012-02-22 09:13:48
         compiled from libs/newcategory.htm */ ?>
<div class="main-div">
<div class="pos-div">
	 <h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['category']['manage']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['category'][$this->_tpl_vars['ctype']]; ?>
 &raquo; <?php if ($this->_tpl_vars['operation'] == 'addnew'): ?><?php echo $this->_tpl_vars['lang']['category']['addnew']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['category']['edit']; ?>
<?php endif; ?></h2>
</div>
  <div class="toolbar">
        <span class="btn btn-dft" onclick="SaveCategory()" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['save']; ?>
</span></span>
		<span class="btn btn-dft" onclick="LoadPage('ctype=<?php echo $this->_tpl_vars['ctype']; ?>
')" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['back_list']; ?>
</span></span>
		<span class="btn btn-dft" onclick="window.location.reload()" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
  		<span class="ctrlenter">¡¡<?php echo $this->_tpl_vars['lang']['ctrlenter']; ?>
</span>
  </div>
 <form name="category" method="post" action="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=category&operation=save">
  <input type="hidden" name="cid" value="<?php echo $this->_tpl_vars['category']['cid']; ?>
" />
  <input type="hidden" name="category[ctype]" value="<?php echo $this->_tpl_vars['ctype']; ?>
" />
  <table border="0" cellspacing="0" cellpadding="0" class="form-table">
    <tr>
      <td width="80"><?php echo $this->_tpl_vars['lang']['category']['name']; ?>
£º</td>
      <td><input name="category[name]" type="text" class="textinput" id="category_name" style="width:200px;" value="<?php echo $this->_tpl_vars['category']['name']; ?>
" maxlength="10" /></td>
    </tr>
    <tr>
      <td><?php echo $this->_tpl_vars['lang']['category']['father']; ?>
£º</td>
      <td>
	  <select name="category[fid]">
        <option value="0"><?php echo $this->_tpl_vars['lang']['category']['top']; ?>
</option>
		<?php $_from = $this->_tpl_vars['categories']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cc']):
?>
		<option value="<?php echo $this->_tpl_vars['cc']['cid']; ?>
"<?php if ($this->_tpl_vars['cc']['current']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['cc']['name']; ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
      </select>	  
	 </td>
    </tr>
	<?php if ($this->_tpl_vars['operation'] == 'addnew'): ?>
    <tr>
      <td><?php echo $this->_tpl_vars['lang']['category']['addtonav']; ?>
£º</td>
      <td>
	      <input name="addtonav" type="radio" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
¡¡
		  <input name="addtonav" type="radio" value="0" checked="checked" /> <?php echo $this->_tpl_vars['lang']['no']; ?>

	  </td>
    </tr>
	<?php endif; ?>
    <tr>
      <td><?php echo $this->_tpl_vars['lang']['keywords']; ?>
£º</td>
      <td><input name="category[keywords]" type="text" class="textinput" style="width:400px;" value="<?php echo $this->_tpl_vars['category']['keywords']; ?>
" /></td>
    </tr>
    <tr>
      <td><?php echo $this->_tpl_vars['lang']['description']; ?>
£º</td>
      <td><textarea name="category[description]" class="textinput" style="width:400px; height:50px;" ><?php echo $this->_tpl_vars['category']['description']; ?>
</textarea></td>
    </tr>
  </table>
  </form>
  <div class="toolbar">
        <span class="btn btn-dft" onclick="SaveCategory()" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['save']; ?>
</span></span>
		<span class="btn btn-dft" onclick="LoadPage('ctype=<?php echo $this->_tpl_vars['ctype']; ?>
')" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['back_list']; ?>
</span></span>
		<span class="btn btn-dft" onclick="window.location.reload()" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
  		<span class="ctrlenter">¡¡<?php echo $this->_tpl_vars['lang']['ctrlenter']; ?>
</span>
  </div>
</div>
<script type="text/javascript">
var hassubmited = false;
<?php echo 'function SaveCategory(){
	var theForm = document.category;
	if(hassubmited)return false;
	if(!$("#category_name").val()){
		return false;
	}else {
		hassubmited = true;
		theForm.submit();
		return true;
	}
}
document.onkeydown = function(e){
	e=window.event||e;
	if(e.ctrlKey&&e.keyCode==13){
	   SaveCategory();
	}
}
</script>'; ?>