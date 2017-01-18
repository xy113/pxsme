<?php /* Smarty version 2.6.19, created on 2012-02-23 08:24:22
         compiled from admin_slide.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin_slide.htm', 106, false),)), $this); ?>
<?php if ($this->_tpl_vars['operation'] == 'addnew' || $this->_tpl_vars['operation'] == 'edit'): ?>
<div class="main-div">
<div class="pos-div">
	 <h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['slide']['manage']; ?>
 &raquo; <?php if ($this->_tpl_vars['operation'] == 'edit'): ?><?php echo $this->_tpl_vars['lang']['slide']['edit']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['slide']['addnew']; ?>
<?php endif; ?></h2>
</div>
<div class="toolbar">
    <span class="btn btn-dft" onclick="SaveSlide()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['save']; ?>
</span></span>
	<span class="btn btn-dft" onclick="LoadPage()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['back_list']; ?>
</span></span>
	<span class="btn btn-dft" onclick="window.location.reload()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
	<span class="ctrlenter">¡¡<?php echo $this->_tpl_vars['lang']['ctrlenter']; ?>
</span>
</div>
<form action="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=slide&operation=save" method="post" name="slide">
  <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['slide']['id']; ?>
" />
  <table border="0" cellspacing="0" cellpadding="0" class="form-table">
    <tr>
      <td width="40"><?php echo $this->_tpl_vars['lang']['slide']['title']; ?>
£º</td>
      <td><input name="slidenew[title]" id="slide_title" type="text" value="<?php echo $this->_tpl_vars['slide']['title']; ?>
" class="textinput" style="width:400px;" /></td>
    </tr>
    <tr>
      <td><?php echo $this->_tpl_vars['lang']['slide']['linkurl']; ?>
£º</td>
      <td><input name="slidenew[linkurl]" id="slide_linkurl" type="text" value="<?php echo $this->_tpl_vars['slide']['linkurl']; ?>
" class="textinput" style="width:400px;" /></td>
    </tr>
    <tr>
      <td><?php echo $this->_tpl_vars['lang']['slide']['image']; ?>
£º</td>
      <td>
         <input name="slidenew[image]" id="slide_image" type="text" value="<?php echo $this->_tpl_vars['slide']['image']; ?>
" class="textinput" style="width:400px;" />
		 <span class="btn btn-dft" onclick="OpenDialog('slide_image&w=<?php echo $this->_tpl_vars['config']['slidewidth']; ?>
&h=<?php echo $this->_tpl_vars['config']['slideheight']; ?>
')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['upload']; ?>
</span></span>
      </td>
    </tr>
    <tr>
      <td><?php echo $this->_tpl_vars['lang']['slide']['description']; ?>
£º</td>
      <td><textarea name="slidenew[description]" style="width:560px; height:90px;"><?php echo $this->_tpl_vars['slide']['description']; ?>
</textarea></td>
    </tr>
  </table>
</form>
<div class="toolbar">
    <span class="btn btn-dft" onclick="SaveSlide()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['save']; ?>
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
Message[0] = '<?php echo $this->_tpl_vars['lang']['slidetxt']['0']; ?>
';
Message[1] = '<?php echo $this->_tpl_vars['lang']['slidetxt']['1']; ?>
';
Message[2] = '<?php echo $this->_tpl_vars['lang']['slidetxt']['2']; ?>
';
<?php echo 'function SaveSlide(){
	if(hassubmited) return false;
	var theForm = document.slide;
    if(!$("#slide_title").val()){
	   showError(Message[0]);
	   return false;
    }
	if(!$("#slide_linkurl").val()){
	   showError(Message[1])
	   return false;
    }
	if(!$("#slide_image").val()){
		showError(Message[2])
	   return false;
	}      
    hassubmited = true;
    theForm.submit();
    return true;
}
document.onkeydown = function(e){
	e=window.event||e;
	if(e.ctrlKey&&e.keyCode==13){
	   SaveSlide();
	   return false;
	}
}
</script>'; ?>

<?php else: ?>
<div class="main-div">
<div class="pos-div">
	 <h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['slide']['manage']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['slide']['list']; ?>
¡¡<?php echo $this->_tpl_vars['lang']['total']; ?>
<?php echo $this->_tpl_vars['totalrecords']; ?>
<?php echo $this->_tpl_vars['lang']['total_records']; ?>
</h2>
	 <div class="searchbox">
		<input type="text" name="q" id="q" value="<?php echo $_GET['q']; ?>
" class="textinput" style="width:145px;" />
		<span class="btn btn-dft" onclick="ListTable('q='+$('#q').val())" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['search']; ?>
</span></span>
	 </div>
</div>
<div class="toolbar">
    <span class="pagebox"><?php echo $this->_tpl_vars['pagelink']; ?>
</span>
	<span class="btn btn-dft" onclick="Drop('id[]','<?php echo $this->_tpl_vars['querystring']; ?>
')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><b><?php echo $this->_tpl_vars['lang']['drop']; ?>
</b></span></span>
	<span class="btn btn-dft" onclick="LoadPage('operation=addnew')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['slide']['addnew']; ?>
</span></span>
	<span class="btn btn-dft" onclick="LoadPage('<?php echo $this->_tpl_vars['querystring']; ?>
')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
</div>
<form name="slides" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="list">
  <tr>
    <th width="15"><input type="checkbox" onclick="checkAll(this,'id[]');"/></td>
	<th width="15" class="tocenter"><img src="templates/admincp/images/icon_view.gif" width="16" height="16" /></th>
    <th width="280"><?php echo $this->_tpl_vars['lang']['slide']['title']; ?>
</th>
	<th><?php echo $this->_tpl_vars['lang']['description']; ?>
</th>
    <th width="140" class="last"><?php echo $this->_tpl_vars['lang']['dateline']; ?>
</th>
  </tr>
  <?php $_from = $this->_tpl_vars['slides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sd']):
?>
  <tr onmouseover="this.className='active'" onmouseout="this.className=''">
    <td><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['sd']['id']; ?>
" onclick="checkThis(this)" /></td>
    <td class="tocenter"><a href="<?php echo $this->_tpl_vars['sd']['linkurl']; ?>
" target="_blank"><img src="templates/admincp/images/icon_view.gif" border="0" width="16" height="16" /></a></td>
	<td><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=slide&operation=edit&id=<?php echo $this->_tpl_vars['sd']['id']; ?>
"><?php echo $this->_tpl_vars['sd']['title']; ?>
</a></td>
	<td><span title="<?php echo $this->_tpl_vars['lang']['click_edit']; ?>
" onclick="Edit(this,'operation=edit_desc&id=<?php echo $this->_tpl_vars['sd']['id']; ?>
')"><?php if ($this->_tpl_vars['sd']['description']): ?><?php echo $this->_tpl_vars['sd']['description']; ?>
<?php else: ?>#<?php endif; ?></span></td>
    <td><span class="mdate"><?php echo ((is_array($_tmp=$this->_tpl_vars['sd']['dateline'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</span></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <tr>
      <td colspan="5"><?php echo $this->_tpl_vars['lang']['select']; ?>
£º
		<a href="javascript:;" onclick="selectAll('id[]')"><?php echo $this->_tpl_vars['lang']['selectall']; ?>
</a> - 
		<a href="javascript:;" onclick="cancelAll('id[]')"><?php echo $this->_tpl_vars['lang']['noselect']; ?>
</a> - 
		<a href="javascript:;" onclick="reverseAll('id[]')"><?php echo $this->_tpl_vars['lang']['reverseselect']; ?>
</a>
	  </td>
  </tr>
</table>
</form>
<div class="toolbar">
    <span class="pagebox"><?php echo $this->_tpl_vars['pagelink']; ?>
</span>
	<span class="btn btn-dft" onclick="Drop('id[]','<?php echo $this->_tpl_vars['querystring']; ?>
')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><b><?php echo $this->_tpl_vars['lang']['drop']; ?>
</b></span></span>
	<span class="btn btn-dft" onclick="LoadPage('operation=addnew')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['slide']['addnew']; ?>
</span></span>
	<span class="btn btn-dft" onclick="LoadPage('<?php echo $this->_tpl_vars['querystring']; ?>
')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
</div>
</div>
<?php endif; ?>