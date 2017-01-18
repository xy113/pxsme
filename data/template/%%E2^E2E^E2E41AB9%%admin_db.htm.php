<?php /* Smarty version 2.6.19, created on 2012-02-22 09:12:55
         compiled from admin_db.htm */ ?>
<?php if ($this->_tpl_vars['operation'] == 'resume'): ?>
<div class="main-div">
	<div class="pos-div">
	 <h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['db']['manage']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['db']['resume']; ?>
</h2>
	</div>
	<div class="pos-div">
		<form name="importform" method="post" action="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=db&operation=import" enctype="multipart/form-data" onsubmit="if(!this.sqlfile.value)return false;">
		<?php echo $this->_tpl_vars['lang']['db']['localfile']; ?>
£º
		<input type="text" id="filename" class="textinput" style="width:200px;" />
		<input type="file" size="40" name="sqlfile" id="sqlfile" style="display:none;" onchange="filename.value=this.value" />
		<span class="btn btn-dft" onclick="$('#sqlfile').click()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['view']; ?>
</span></span>
		<span class="btn btn-dft" onclick="document.importform.submit()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['export']; ?>
</span></span>
		</form>
	</div>
   <div class="toolbar">
		<span class="btn btn-dft" onclick="document.files.submit()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['resume']; ?>
</span></span>
		<span class="btn btn-dft" onclick="LoadPage()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['db']['backup']; ?>
</span></span>
		<span class="btn btn-dft" onclick="document.location.reload()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
   </div>
   <table width="100%" border="0" cellspacing="0" cellpadding="0" class="list">
    <form name="files" action="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=db&operation=resumefiles" method="post">
     <tr>
       <th scope="col" width="20"><input type="checkbox" onclick="checkAll(this,'file[]')" /></th>
       <th scope="col"><?php echo $this->_tpl_vars['lang']['filename']; ?>
</th>
       <th scope="col" width="100"><?php echo $this->_tpl_vars['lang']['filesize']; ?>
</th>
       <th scope="col" width="140" class="last"><?php echo $this->_tpl_vars['lang']['filetime']; ?>
</th>
     </tr>
	 <?php if ($this->_tpl_vars['folders']): ?>
	 <?php $_from = $this->_tpl_vars['folders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dir']):
?>
     <tr onmouseover="this.className='active'" onmouseout="this.className=''">
       <td>&nbsp;</td>
	   <td><a href="<?php echo $this->_tpl_vars['dir']['folderlink']; ?>
"><img src="<?php echo $this->_tpl_vars['dir']['img']; ?>
" border="0" /> <?php echo $this->_tpl_vars['dir']['filename']; ?>
</a></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
     </tr>
	 <?php endforeach; endif; unset($_from); ?>
	 <?php endif; ?>
	 <?php if ($this->_tpl_vars['folders']): ?>
	 <?php $_from = $this->_tpl_vars['filetree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tree']):
?>
     <tr onmouseover="this.className='active'" onmouseout="this.className=''">
       <td><input type="checkbox" name="file[]" value="<?php echo $this->_tpl_vars['tree']['filepath']; ?>
" onclick="checkThis(this)" /></td>
	   <td><img src="<?php echo $this->_tpl_vars['tree']['img']; ?>
" border="0" /> <?php echo $this->_tpl_vars['tree']['filename']; ?>
</td>
       <td><?php echo $this->_tpl_vars['tree']['filesize']; ?>
</td>
       <td><?php echo $this->_tpl_vars['tree']['filetime']; ?>
</td>
     </tr>
	 <?php endforeach; endif; unset($_from); ?>
	 <?php endif; ?>
	 </form>
	  <tr>
		  <td colspan="4"><?php echo $this->_tpl_vars['lang']['select']; ?>
£º
			<a href="javascript:;" onclick="selectAll('file[]')"><?php echo $this->_tpl_vars['lang']['selectall']; ?>
</a> - 
			<a href="javascript:;" onclick="cancelAll('file[]')"><?php echo $this->_tpl_vars['lang']['noselect']; ?>
</a> - 
			<a href="javascript:;" onclick="reverseAll('file[]')"><?php echo $this->_tpl_vars['lang']['reverseselect']; ?>
</a>
		 </td>
	  </tr>
   </table>
   <div class="toolbar">
		<span class="btn btn-dft" onclick="document.files.submit()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['resume']; ?>
</span></span>
		<span class="btn btn-dft" onclick="LoadPage()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['db']['backup']; ?>
</span></span>
		<span class="btn btn-dft" onclick="document.location.reload()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
   </div>
</div>
<?php else: ?>
<div class="main-div">
<div class="pos-div">
	 <h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['db']['manage']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['db']['backup']; ?>
</h2>
</div>
<div class="toolbar">
    <span class="btn btn-dft" onclick="document.tables.submit()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['db']['start_backup']; ?>
</span></span>
	<span class="btn btn-dft" onclick="checkDB('optimiz')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className=' btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['db']['optimiz']; ?>
</span></span>
	<span class="btn btn-dft" onclick="checkDB('repair')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['db']['repair']; ?>
</span></span>
	<span class="btn btn-dft" onclick="LoadPage('operation=resume')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['db']['resume']; ?>
</span></span>
	<span class="btn btn-dft" onclick="window.location.reload()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
</div>
<form method="post" name="tables" action="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=db&operation=export">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="list">
  <tr>
    <th scope="col" width="20"><input type="checkbox" onclick="checkAll(this,'table[]')" /></th>
    <th scope="col"><?php echo $this->_tpl_vars['lang']['db']['table_name']; ?>
</th>
    <th scope="col" width="60"><?php echo $this->_tpl_vars['lang']['db']['table_type']; ?>
</th>
	<th scope="col" width="100"><?php echo $this->_tpl_vars['lang']['db']['table_rowformat']; ?>
</th>
    <th scope="col" width="60"><?php echo $this->_tpl_vars['lang']['db']['table_records']; ?>
</th>
    <th scope="col" width="80"><?php echo $this->_tpl_vars['lang']['db']['table_data']; ?>
</th>
    <th scope="col" width="60"><?php echo $this->_tpl_vars['lang']['db']['table_index']; ?>
</th>
    <th scope="col" width="60"><?php echo $this->_tpl_vars['lang']['db']['table_free']; ?>
</th>
    <th scope="col" width="60" class="last"><?php echo $this->_tpl_vars['lang']['handler']; ?>
</th>
  </tr>
  <?php $_from = $this->_tpl_vars['tables']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['table']):
?>
  <tr onmouseover="this.className='active'" onmouseout="this.className=''">
    <td><input type="checkbox" name="table[]" value="<?php echo $this->_tpl_vars['table']['Name']; ?>
" onclick="checkThis(this)" /></td>
    <td><?php echo $this->_tpl_vars['table']['Name']; ?>
</td>
    <td><?php echo $this->_tpl_vars['table']['Engine']; ?>
</td>
	<td><?php echo $this->_tpl_vars['table']['Row_format']; ?>
</td>
    <td><?php echo $this->_tpl_vars['table']['Rows']; ?>
</td>
    <td><?php echo $this->_tpl_vars['table']['Data_length']; ?>
</td>
    <td><?php echo $this->_tpl_vars['table']['Index_length']; ?>
</td>
    <td><?php echo $this->_tpl_vars['table']['Data_free']; ?>
</td>
    <td><a href="javascript:;" onclick="checkOneDB('<?php echo $this->_tpl_vars['table']['Name']; ?>
','repair')"><?php echo $this->_tpl_vars['lang']['repair']; ?>
</a> <a href="javascript:;" onclick="checkOneDB('<?php echo $this->_tpl_vars['table']['Name']; ?>
','optimiz')"><?php echo $this->_tpl_vars['lang']['optimiz']; ?>
</a></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <tr>
      <td colspan="9">
	    <span style="float:right; margin-right:10px;"><?php echo $this->_tpl_vars['tbcount']; ?>
£¬<?php echo $this->_tpl_vars['lang']['db']['space']; ?>
<?php echo $this->_tpl_vars['dbsize']; ?>
MB¡£</span>
		<?php echo $this->_tpl_vars['lang']['select']; ?>
£º
		<a href="javascript:;" onclick="selectAll('table[]')"><?php echo $this->_tpl_vars['lang']['selectall']; ?>
</a> - 
		<a href="javascript:;" onclick="cancelAll('table[]')"><?php echo $this->_tpl_vars['lang']['noselect']; ?>
</a> - 
		<a href="javascript:;" onclick="reverseAll('table[]')"><?php echo $this->_tpl_vars['lang']['reverseselect']; ?>
</a>
	 </td>
  </tr>
</table>
</form>
<div class="toolbar">
    <span class="btn btn-dft" onclick="document.tables.submit()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['db']['start_backup']; ?>
</span></span>
	<span class="btn btn-dft" onclick="checkDB('optimiz')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className=' btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['db']['optimiz']; ?>
</span></span>
	<span class="btn btn-dft" onclick="checkDB('repair')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['db']['repair']; ?>
</span></span>
	<span class="btn btn-dft" onclick="LoadPage('operation=resume')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['db']['resume']; ?>
</span></span>
	<span class="btn btn-dft" onclick="window.location.reload()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
</div>
</div>
<?php endif; ?>