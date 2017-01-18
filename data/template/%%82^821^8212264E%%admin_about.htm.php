<?php /* Smarty version 2.6.19, created on 2012-02-23 08:24:21
         compiled from admin_about.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin_about.htm', 88, false),)), $this); ?>
<?php if ($this->_tpl_vars['operation'] == 'addnew' || $this->_tpl_vars['operation'] == 'edit'): ?>
<div class="main-div">
	<div class="pos-div">
	     <h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['about']['manage']; ?>
 &raquo; <?php if ($this->_tpl_vars['operation'] == 'edit'): ?><?php echo $this->_tpl_vars['lang']['about']['edit']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['about']['addnew']; ?>
<?php endif; ?></h2>
	</div>
	<div class="toolbar">
		<span class="btn btn-dft" onclick="SaveAbout()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['save']; ?>
</span></span>
		<span class="btn btn-dft" onclick="LoadPage()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['back_list']; ?>
</span></span>
		<span class="btn btn-dft" onclick="window.location.reload()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
		<span class="ctrlenter">¡¡<?php echo $this->_tpl_vars['lang']['ctrlenter']; ?>
</span>
	</div>
  	<form action="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=about&operation=save" method="post" name="form1">
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['article']['id']; ?>
" />
    <table border="0" cellspacing="0" cellpadding="0" class="form-table">
      <tr>
        <td width="60"><?php echo $this->_tpl_vars['lang']['about']['title']; ?>
£º</td>
        <td><input name="aboutnew[title]" id="about_title" type="text" value="<?php echo $this->_tpl_vars['article']['title']; ?>
" class="textinput" style="width:386px;" /></td>
      </tr>
      <tr>
        <td><?php echo $this->_tpl_vars['lang']['keywords']; ?>
£º</td>
        <td><textarea name="aboutnew[keywords]" id="about_keywords"  class="textinput" style="width:460px; height:60px;"><?php echo $this->_tpl_vars['article']['keywords']; ?>
</textarea></td>
      </tr>
      <tr>
        <td colspan="2"><?php echo $this->_tpl_vars['fckeditor']; ?>
</td>
        </tr>
    </table>
  	</form>
	<div class="toolbar">
		<span class="btn btn-dft" onclick="SaveAbout()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['save']; ?>
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
var message = '<?php echo $this->_tpl_vars['lang']['about']['title_empty']; ?>
';
<?php echo 'function SaveAbout(){
	if(hassubmited)return false;
	var theForm = document.form1;
	if(!$("#about_title").val()){
		showError(message);
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
	   SaveAbout();
	}
}'; ?>

</script>
<?php else: ?>
<div class="main-div">
    <div class="pos-div">
	     <h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['about']['manage']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['about']['list']; ?>
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
')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'"><span><b><?php echo $this->_tpl_vars['lang']['drop']; ?>
</b></span></span>
		<span class="btn btn-dft" onclick="LoadPage('operation=addnew')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'"><span><?php echo $this->_tpl_vars['lang']['about']['addnew']; ?>
</span></span>
		<span class="btn btn-dft" onclick="LoadPage('<?php echo $this->_tpl_vars['querystring']; ?>
')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
	</div>
  	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="list">
    <tr>
      <th width="20"><input type="checkbox" onclick="checkAll(this,'id[]')" /></th>
	  <th width="15" class="tocenter"><img src="templates/admincp/images/icon_view.gif" width="16" height="16" /></th>
      <th width="160"><?php echo $this->_tpl_vars['lang']['about']['title']; ?>
</th>
	  <th><?php echo $this->_tpl_vars['lang']['keywords']; ?>
</th>
	  <th width="80"><?php echo $this->_tpl_vars['lang']['author']; ?>
</th>
	  <th width="145" class="last"><?php echo $this->_tpl_vars['lang']['dateline']; ?>
</th>
    </tr>
	<?php $_from = $this->_tpl_vars['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arc']):
?>
    <tr onmouseover="this.className='active'" onmouseout="this.className=''">
      <td><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['arc']['id']; ?>
" onclick="checkThis(this)" /></td>
	  <td class="tocenter"><a href="about.php?id=<?php echo $this->_tpl_vars['arc']['id']; ?>
" target="_blank"><img src="templates/admincp/images/icon_view.gif" border="0" title="<?php echo $this->_tpl_vars['lang']['views']; ?>
" width="16" height="16" /></a></td>
      <td><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=about&operation=edit&id=<?php echo $this->_tpl_vars['arc']['id']; ?>
"><?php echo $this->_tpl_vars['arc']['title']; ?>
</a></td>
	  <td><?php echo $this->_tpl_vars['arc']['keywords']; ?>
</td>
	  <td><?php echo $this->_tpl_vars['arc']['author']; ?>
</td>
	  <td><span class="mdate"><?php echo ((is_array($_tmp=$this->_tpl_vars['arc']['dateline'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</span></td>
    </tr>
	<?php endforeach; endif; unset($_from); ?>
	<tr><td colspan="6"><?php echo $this->_tpl_vars['lang']['select']; ?>
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
	<span class="pagebox"><?php echo $this->_tpl_vars['pagelink']; ?>
</span>
	<span class="btn btn-dft" onclick="Drop('id[]','<?php echo $this->_tpl_vars['querystring']; ?>
')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'"><span><b><?php echo $this->_tpl_vars['lang']['drop']; ?>
</b></span></span>
	<span class="btn btn-dft" onclick="LoadPage('operation=addnew')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'"><span><?php echo $this->_tpl_vars['lang']['about']['addnew']; ?>
</span></span>
	<span class="btn btn-dft" onclick="LoadPage('<?php echo $this->_tpl_vars['querystring']; ?>
')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
</div>
</div>
<?php endif; ?>