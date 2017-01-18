<?php /* Smarty version 2.6.19, created on 2012-02-22 09:12:55
         compiled from admin_job.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin_job.htm', 167, false),)), $this); ?>
<?php if ($this->_tpl_vars['operation'] == 'addnew' || $this->_tpl_vars['operation'] == 'edit'): ?>
<div class="main-div">
	<div class="pos-div">
	     <h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['job']['manage']; ?>
 &raquo; <?php if ($this->_tpl_vars['operation'] == 'addnew'): ?><?php echo $this->_tpl_vars['lang']['job']['addnew']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['job']['edit']; ?>
<?php endif; ?></h2>
	</div>
	<div class="toolbar">
		<span class="btn btn-dft" onclick="SaveJob()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['save']; ?>
</span></span>
		<span class="btn btn-dft" onclick="LoadPage('cid=<?php echo $this->_tpl_vars['cid']; ?>
')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['back_list']; ?>
</span></span>
		<span class="btn btn-dft" onclick="window.location.reload()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
		<span class="ctrlenter">　<?php echo $this->_tpl_vars['lang']['ctrlenter']; ?>
</span>
	</div>
	<form name="newjob" action="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=job&operation=save" method="post">
	<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['job']['id']; ?>
" />
	<table border="0" cellspacing="0" cellpadding="0" class="form-table">
	  <tr>
		<td width="60"><?php echo $this->_tpl_vars['lang']['job']['category']; ?>
：</td>
		<td>
		<select name="jobnew[cid]">
			<?php $_from = $this->_tpl_vars['categories']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cc']):
?>
			<option class="big" value="<?php echo $this->_tpl_vars['cc']['cid']; ?>
"<?php if ($this->_tpl_vars['cc']['current']): ?> selected="selected"<?php endif; ?><?php if ($this->_tpl_vars['cc']['disabled'] == 1): ?> disabled="disabled"<?php endif; ?>><?php echo $this->_tpl_vars['cc']['name']; ?>
</option>
			<?php $this->assign('sub', $this->_tpl_vars['cc']['cid']); ?>
			<?php $_from = $this->_tpl_vars['categories'][$this->_tpl_vars['sub']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ccc']):
?>
			<option value="<?php echo $this->_tpl_vars['ccc']['cid']; ?>
"<?php if ($this->_tpl_vars['ccc']['current']): ?> selected="selected"<?php endif; ?><?php if ($this->_tpl_vars['ccc']['disabled'] == 1): ?> disabled="disabled"<?php endif; ?>><?php echo $this->_tpl_vars['ccc']['name']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
			<?php endforeach; endif; unset($_from); ?>
		</select>
		</td>
	  </tr>
	  <tr>
		<td><?php echo $this->_tpl_vars['lang']['job']['title']; ?>
：</td>
		<td><input type="text" class="textinput" name="jobnew[title]" id="title" size="55" value="<?php echo $this->_tpl_vars['job']['title']; ?>
" /></td>
	  </tr>
	  <tr>
		<td><?php echo $this->_tpl_vars['lang']['keywords']; ?>
：</td>
		<td><input type="text" class="textinput" name="jobnew[tags]" size="55" value="<?php echo $this->_tpl_vars['job']['tags']; ?>
" /></td>
	  </tr>
	  <tr>
		<td><?php echo $this->_tpl_vars['lang']['job']['numbers']; ?>
：</td>
		<td><input type="text" class="textinput" name="jobnew[numbers]" size="55" value="<?php echo $this->_tpl_vars['job']['numbers']; ?>
" /></td>
	  </tr>
	  <tr>
		<td><?php echo $this->_tpl_vars['lang']['job']['salary']; ?>
：</td>
		<td><input type="text" class="textinput" name="jobnew[salary]" size="55" value="<?php echo $this->_tpl_vars['job']['salary']; ?>
" /></td>
	  </tr>
	  <tr>
		<td><?php echo $this->_tpl_vars['lang']['job']['respon']; ?>
：</td>
		<td><textarea name="jobnew[respon]" style="width:600px; height:200px;"><?php echo $this->_tpl_vars['job']['respon']; ?>
</textarea></td>
	  </tr>
	  <tr>
		<td><?php echo $this->_tpl_vars['lang']['job']['content']; ?>
：</td>
		<td><textarea name="jobnew[content]" style="width:600px; height:200px;"><?php echo $this->_tpl_vars['job']['content']; ?>
</textarea></td>
	  </tr>
	</table>
	</form>
	<div class="toolbar">
		<span class="btn btn-dft" onclick="SaveJob()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['save']; ?>
</span></span>
		<span class="btn btn-dft" onclick="LoadPage('cid=<?php echo $this->_tpl_vars['cid']; ?>
')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['back_list']; ?>
</span></span>
		<span class="btn btn-dft" onclick="window.location.reload()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
		<span class="ctrlenter">　<?php echo $this->_tpl_vars['lang']['ctrlenter']; ?>
</span>
	</div>
</div>
<?php echo '<script type="text/javascript">
var hassubmited = false;
function SaveJob(){
	if(hassubmited)return false;
	if(!$(\'#title\').val()){
		showError(\'职位名称不能为空!\');
		return false;
	}
	hassubmited = true;
	document.newjob.submit();
	return true;
}
document.onkeydown = function(e){
	e=window.event||e;
	if(e.ctrlKey&&e.keyCode==13){
	   SaveJob();
	}
}
</script>'; ?>

<?php else: ?>
<div class="main-div">
    <div class="pos-div">
	     <h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['job']['manage']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['job']['list']; ?>
<?php if ($this->_tpl_vars['cid'] > 0): ?> &raquo; <?php echo $this->_tpl_vars['category']['name']; ?>
<?php endif; ?>　<?php echo $this->_tpl_vars['lang']['total']; ?>
<?php echo $this->_tpl_vars['totalrecords']; ?>
<?php echo $this->_tpl_vars['lang']['total_records']; ?>
</h2>
		 <div class="searchbox">
		 	  <select name="cid" id="cid" onchange="ListTable('cid='+this.value)">
			  <option value="0" class="big"><?php echo $this->_tpl_vars['lang']['category']['all']; ?>
</option>
			  <?php $_from = $this->_tpl_vars['categories']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cc']):
?>
			  <?php $this->assign('sub', $this->_tpl_vars['cc']['cid']); ?>			  
			  <option value="<?php echo $this->_tpl_vars['cc']['cid']; ?>
" class="big"<?php if ($this->_tpl_vars['cc']['current']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['cc']['name']; ?>
</option>
			  <?php $_from = $this->_tpl_vars['categories'][$this->_tpl_vars['sub']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ccc']):
?>
			  <option value="<?php echo $this->_tpl_vars['ccc']['cid']; ?>
" <?php if ($this->_tpl_vars['ccc']['current']): ?> selected="selected" <?php endif; ?>>　|-<?php echo $this->_tpl_vars['ccc']['name']; ?>
</option>
			  <?php endforeach; endif; unset($_from); ?>
			  <?php endforeach; endif; unset($_from); ?>
			  </select>
		      <input type="text" name="q" id="q" value="<?php echo $this->_tpl_vars['filter']['key']; ?>
" class="textinput" style="width:145px;" />
			  <span class="btn btn-dft" onclick="ListTable('cid=<?php echo $this->_tpl_vars['cid']; ?>
&q='+$('#q').val())" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['search']; ?>
</span></span>
		 </div>
	</div>
	<div class="toolbar">
		<span class="pagebox"><?php echo $this->_tpl_vars['pagelink']; ?>
</span>
		<span class="btn btn-dft" onclick="Drop('id[]','<?php echo $this->_tpl_vars['querystring']; ?>
');" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><b><?php echo $this->_tpl_vars['lang']['drop']; ?>
</b></span></span>
		<span class="btn btn-dft" onclick="LoadPage('operation=addnew&cid=<?php echo $this->_tpl_vars['cid']; ?>
');" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['job']['addnew']; ?>
</span></span>
		<span id="btnbox">
		   <span class="btnL" onclick="ShowSubMenu(this);" onmouseup="this.className='btnL-hover'" onmousedown="this.className='btnL-active'" onmouseout="this.className='btnL'" onmouseover="this.className='btnL-hover'" tabindex="0"><?php echo $this->_tpl_vars['lang']['markas']; ?>

			<ul class="submenu" onmouseover="ShowMenu(this)" onmouseout="HideMenu(this)">
			     <li><a href="javascript:;" onclick="toggleTable('id[]','operation=audited&<?php echo $this->_tpl_vars['querystring']; ?>
')"><?php echo $this->_tpl_vars['lang']['audited']; ?>
</a></li>
				 <li><a href="javascript:;" onclick="toggleTable('id[]','operation=unaudited&<?php echo $this->_tpl_vars['querystring']; ?>
')"><?php echo $this->_tpl_vars['lang']['unaudited']; ?>
</a></li>
			</ul>
	       </span><b class="arr"></b>
		   <span class="btnM" onclick="ShowSubMenu(this)" onmouseup="this.className='btnM-hover'" onmousedown="this.className='btnM-active'" onmouseout="this.className='btnM'" onmouseover="this.className='btnM-hover'" tabindex="0"><?php echo $this->_tpl_vars['lang']['moveto']; ?>

			<ul class="submenu" onmouseover="ShowMenu(this)" onmouseout="HideMenu(this)">
				 <?php $_from = $this->_tpl_vars['categories']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
				 <li><a href="javascript:;" onclick="toggleTable('id[]','operation=move&cid=<?php echo $this->_tpl_vars['group']['cid']; ?>
')"><b><?php echo $this->_tpl_vars['group']['name']; ?>
</b></a></li>
				 <?php $this->assign('sub', $this->_tpl_vars['group']['cid']); ?>
				 <?php $_from = $this->_tpl_vars['categories'][$this->_tpl_vars['sub']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
				 <li><a href="javascript:;" onclick="toggleTable('id[]','operation=move&cid=<?php echo $this->_tpl_vars['menu']['cid']; ?>
')">　&raquo;<?php echo $this->_tpl_vars['menu']['name']; ?>
</a></li>
				 <?php endforeach; endif; unset($_from); ?>
				 <?php endforeach; endif; unset($_from); ?>
			</ul>
		   </span><b class="arr"></b>
		   <span class="btnM" onclick="ShowSubMenu(this)" onmouseup="this.className='btnM-hover'" onmousedown="this.className='btnM-active'" onmouseout="this.className='btnM'" onmouseover="this.className='btnM-hover'" tabindex="0"><?php echo $this->_tpl_vars['lang']['view']; ?>

			<ul class="submenu" onmouseover="ShowMenu(this)" onmouseout="HideMenu(this)">
			     <li><a href="javascript:;" onclick="ListTable('audited=1')"><?php echo $this->_tpl_vars['lang']['unaudited']; ?>
</a></li>
				 <li><a href="javascript:;" onclick="ListTable()"><?php echo $this->_tpl_vars['lang']['job']['all']; ?>
</a></li>
				 <?php $_from = $this->_tpl_vars['categories']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
				 <li><a href="javascript:;" onclick="ListTable('cid=<?php echo $this->_tpl_vars['group']['cid']; ?>
')"><b><?php echo $this->_tpl_vars['group']['name']; ?>
</b></a></li>
				 <?php $this->assign('sub', $this->_tpl_vars['group']['cid']); ?>
				 <?php $_from = $this->_tpl_vars['categories'][$this->_tpl_vars['sub']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
				 <li><a href="javascript:;" onclick="ListTable('cid=<?php echo $this->_tpl_vars['menu']['cid']; ?>
')">　&raquo;<?php echo $this->_tpl_vars['menu']['name']; ?>
</a></li>
				 <?php endforeach; endif; unset($_from); ?>
				 <?php endforeach; endif; unset($_from); ?>
			</ul>
		   </span><b class="arr"></b>
		   <span class="btnR" onclick="ShowSubMenu(this)" onmouseover="this.className='btnR-hover'" onmouseup="this.className='btnR-hover'" onmousedown="this.className='btnR-active'" onmouseout="this.className='btnR'" tabindex="0">
		     <span><?php echo $this->_tpl_vars['lang']['more']; ?>

			    <ul class="submenu" onmouseover="ShowMenu(this)" onmouseout="HideMenu(this)">
				    <li><a href="javascript:;" onclick="ListTable('<?php echo $this->_tpl_vars['querystring']; ?>
&sort=ASC')"><?php echo $this->_tpl_vars['lang']['ascorder']; ?>
<b class="arr-asc"></b></a></li>
					<li><a href="javascript:;" onclick="ListTable('<?php echo $this->_tpl_vars['querystring']; ?>
&sort=DESC')"><?php echo $this->_tpl_vars['lang']['descorder']; ?>
<b class="arr-desc"></b></a></li>
				</ul>
				</span><b class="arr"></b>
	       </span>
		</span>
		<span class="btn btn-dft" onclick="LoadPage('<?php echo $this->_tpl_vars['querystring']; ?>
')" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
    </div>
	<form method="post" name="jobs" id="jobs" style="margin:0; padding:0;">
	<table border="0" cellpadding="0" cellspacing="0" class="list" width="100%">
		<tr>
			<th width="20"><input type="checkbox" name="checkall" onclick="checkAll(this,'id[]')" /></th>
			<th width="20"><img src="templates/admincp/images/icon_view.gif" border="0" width="16" height="16" /></th>
			<th style="cursor:pointer;" onclick="ListTable('<?php echo $this->_tpl_vars['querystring']; ?>
&do=sort&orderby=id')" title="<?php echo $this->_tpl_vars['lang']['click_resort']; ?>
"><?php echo $this->_tpl_vars['lang']['job']['title']; ?>
</th>
			<th width="80"><?php echo $this->_tpl_vars['lang']['job']['salary']; ?>
</th>
			<th width="60" class="tocenter"><?php echo $this->_tpl_vars['lang']['job']['numbers']; ?>
</th>
			<th width="30" class="tocenter"><?php echo $this->_tpl_vars['lang']['audited']; ?>
</th>
			<th width="30" class="tocenter" style="cursor:pointer;" onclick="ListTable('<?php echo $this->_tpl_vars['querystring']; ?>
&do=sort&orderby=views')" title="<?php echo $this->_tpl_vars['lang']['click_resort']; ?>
"><?php echo $this->_tpl_vars['lang']['clicks']; ?>
</th>
			<th class="last" width="140" style="cursor:pointer;" onclick="ListTable('<?php echo $this->_tpl_vars['querystring']; ?>
&do=sort&orderby=time')" title="<?php echo $this->_tpl_vars['lang']['click_resort']; ?>
"><?php echo $this->_tpl_vars['lang']['dateline']; ?>
</th>
		</tr>
		<?php $_from = $this->_tpl_vars['jobs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['job']):
?>
		<tr>
			<td><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['job']['id']; ?>
" onclick="checkThis(this)" /></td>
			<td><a href="<?php echo $this->_tpl_vars['job']['joburl']; ?>
" target="_blank"><img src="templates/admincp/images/icon_view.gif" border="0" width="16" height="16" /></a></td>
			<td><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=job&operation=edit&id=<?php echo $this->_tpl_vars['job']['id']; ?>
"><?php echo $this->_tpl_vars['job']['title']; ?>
</a></td>
			<td><span onClick="Edit(this,'operation=edit_salary&id=<?php echo $this->_tpl_vars['job']['id']; ?>
')"><?php echo $this->_tpl_vars['job']['salary']; ?>
</span></td>
			<td class="tocenter"><span onClick="Edit(this,'operation=edit_numbers&id=<?php echo $this->_tpl_vars['job']['id']; ?>
')"><?php echo $this->_tpl_vars['job']['numbers']; ?>
</span></td>
			<td class="tocenter"><img src="templates/admincp/images/<?php if ($this->_tpl_vars['job']['audited'] == 1): ?>yes.gif<?php else: ?>no.gif<?php endif; ?>" title="<?php echo $this->_tpl_vars['lang']['click_switch']; ?>
" onclick="toggle(this,'operation=toggle_audited&id=<?php echo $this->_tpl_vars['job']['id']; ?>
');" /></td>
			<td class="tocenter"><?php echo $this->_tpl_vars['job']['views']; ?>
</td>
			<td><span class="mdate"><?php echo ((is_array($_tmp=$this->_tpl_vars['job']['dateline'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%I') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%I')); ?>
</span></td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		<tr>
			<td colspan="8">
			<?php echo $this->_tpl_vars['lang']['select']; ?>
:
			<a href="javascript:;" onclick="selectAll('id[]')"><?php echo $this->_tpl_vars['lang']['selectall']; ?>
</a> - 
			<a href="javascript:;" onclick="cancelAll('id[]')"><?php echo $this->_tpl_vars['lang']['noselect']; ?>
</a> - 
			<a href="javascript:;" onclick="reverseAll('id[]')"><?php echo $this->_tpl_vars['lang']['reverseselect']; ?>
</a> - 
			<a href="javascript:;" onclick="ListTable('audited=1')"><?php echo $this->_tpl_vars['lang']['unaudited']; ?>
</a>
			</td>
		</tr>
	</table>
	</form>
	<div class="toolbar">
		<span class="pagebox"><?php echo $this->_tpl_vars['pagelink']; ?>
</span>
		<span class="btn btn-dft" onclick="Drop('id[]','<?php echo $this->_tpl_vars['querystring']; ?>
');" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><b><?php echo $this->_tpl_vars['lang']['drop']; ?>
</b></span></span>
		<span class="btn btn-dft" onclick="LoadPage('operation=addnew&cid=<?php echo $this->_tpl_vars['cid']; ?>
');" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['job']['addnew']; ?>
</span></span>
		<span id="btnbox">
		   <span class="btnL" onclick="ShowSubMenu(this);" onmouseup="this.className='btnL-hover'" onmousedown="this.className='btnL-active'" onmouseout="this.className='btnL'" onmouseover="this.className='btnL-hover'" tabindex="0"><?php echo $this->_tpl_vars['lang']['markas']; ?>

			<ul class="submenu-bottom" onmouseover="ShowMenu(this)" onmouseout="HideMenu(this)">
			     <li><a href="javascript:;" onclick="toggleTable('id[]','operation=audited&<?php echo $this->_tpl_vars['querystring']; ?>
')"><?php echo $this->_tpl_vars['lang']['audited']; ?>
</a></li>
				 <li><a href="javascript:;" onclick="toggleTable('id[]','operation=unaudited&<?php echo $this->_tpl_vars['querystring']; ?>
')"><?php echo $this->_tpl_vars['lang']['unaudited']; ?>
</a></li>
			</ul>
	       </span><b class="arr"></b>
		   <span class="btnM" onclick="ShowSubMenu(this)" onmouseup="this.className='btnM-hover'" onmousedown="this.className='btnM-active'" onmouseout="this.className='btnM'" onmouseover="this.className='btnM-hover'" tabindex="0"><?php echo $this->_tpl_vars['lang']['moveto']; ?>

			<ul class="submenu-bottom" onmouseover="ShowMenu(this)" onmouseout="HideMenu(this)">
				 <?php $_from = $this->_tpl_vars['categories']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
				 <li><a href="javascript:;" onclick="toggleTable('id[]','operation=move&cid=<?php echo $this->_tpl_vars['group']['cid']; ?>
')"><b><?php echo $this->_tpl_vars['group']['name']; ?>
</b></a></li>
				 <?php $this->assign('sub', $this->_tpl_vars['group']['cid']); ?>
				 <?php $_from = $this->_tpl_vars['categories'][$this->_tpl_vars['sub']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
				 <li><a href="javascript:;" onclick="toggleTable('id[]','operation=move&cid=<?php echo $this->_tpl_vars['menu']['cid']; ?>
')">　&raquo;<?php echo $this->_tpl_vars['menu']['name']; ?>
</a></li>
				 <?php endforeach; endif; unset($_from); ?>
				 <?php endforeach; endif; unset($_from); ?>
			</ul>
		   </span><b class="arr"></b>
		   <span class="btnM" onclick="ShowSubMenu(this)" onmouseup="this.className='btnM-hover'" onmousedown="this.className='btnM-active'" onmouseout="this.className='btnM'" onmouseover="this.className='btnM-hover'" tabindex="0"><?php echo $this->_tpl_vars['lang']['view']; ?>

			<ul class="submenu-bottom" onmouseover="ShowMenu(this)" onmouseout="HideMenu(this)">
			     <li><a href="javascript:;" onclick="ListTable('audited=1')"><?php echo $this->_tpl_vars['lang']['unaudited']; ?>
</a></li>
				 <li><a href="javascript:;" onclick="ListTable()"><?php echo $this->_tpl_vars['lang']['job']['all']; ?>
</a></li>
				 <?php $_from = $this->_tpl_vars['categories']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
				 <li><a href="javascript:;" onclick="ListTable('cid=<?php echo $this->_tpl_vars['group']['cid']; ?>
')"><b><?php echo $this->_tpl_vars['group']['name']; ?>
</b></a></li>
				 <?php $this->assign('sub', $this->_tpl_vars['group']['cid']); ?>
				 <?php $_from = $this->_tpl_vars['categories'][$this->_tpl_vars['sub']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
				 <li><a href="javascript:;" onclick="ListTable('cid=<?php echo $this->_tpl_vars['menu']['cid']; ?>
')">　&raquo;<?php echo $this->_tpl_vars['menu']['name']; ?>
</a></li>
				 <?php endforeach; endif; unset($_from); ?>
				 <?php endforeach; endif; unset($_from); ?>
			</ul>
		   </span><b class="arr"></b>
		   <span class="btnR" onclick="ShowSubMenu(this)" onmouseover="this.className='btnR-hover'" onmouseup="this.className='btnR-hover'" onmousedown="this.className='btnR-active'" onmouseout="this.className='btnR'" tabindex="0">
		     <span><?php echo $this->_tpl_vars['lang']['more']; ?>

			    <ul class="submenu-bottom" onmouseover="ShowMenu(this)" onmouseout="HideMenu(this)">
				    <li><a href="javascript:;" onclick="ListTable('<?php echo $this->_tpl_vars['querystring']; ?>
&sort=ASC')"><?php echo $this->_tpl_vars['lang']['ascorder']; ?>
<b class="arr-asc"></b></a></li>
					<li><a href="javascript:;" onclick="ListTable('<?php echo $this->_tpl_vars['querystring']; ?>
&sort=DESC')"><?php echo $this->_tpl_vars['lang']['descorder']; ?>
<b class="arr-desc"></b></a></li>
				</ul>
				</span><b class="arr"></b>
	       </span>
		</span>
		<span class="btn btn-dft" onclick="LoadPage('<?php echo $this->_tpl_vars['querystring']; ?>
')" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
    </div>
</div>
<?php endif; ?>