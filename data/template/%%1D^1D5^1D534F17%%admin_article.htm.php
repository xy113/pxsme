<?php /* Smarty version 2.6.19, created on 2012-02-22 09:12:52
         compiled from admin_article.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin_article.htm', 100, false),)), $this); ?>
<?php if ($this->_tpl_vars['operation'] == 'addnew' || $this->_tpl_vars['operation'] == 'edit'): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'libs/newarticle.htm', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
<div class="main-div">
    <div class="pos-div">
	     <h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['article']['manage']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['article']['list']; ?>
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
')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><b><?php echo $this->_tpl_vars['lang']['drop']; ?>
</b></span></span>
		<span class="btn btn-dft" onclick="LoadPage('operation=addnew&cid=<?php echo $this->_tpl_vars['cid']; ?>
')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['article']['addnew']; ?>
</span></span>
		<span id="btnbox">
		   <span class="btnL" onclick="ShowSubMenu(this);" onmouseup="this.className='btnL-hover'" onmousedown="this.className='btnL-active'" onmouseout="this.className='btnL'" onmouseover="this.className='btnL-hover'" tabindex="0"><?php echo $this->_tpl_vars['lang']['markas']; ?>

			<ul class="submenu" onmouseover="ShowMenu(this)" onmouseout="HideMenu(this)">
			     <li><a href="javascript:;" onclick="toggleTable('id[]','operation=audited&<?php echo $this->_tpl_vars['querystring']; ?>
&value=1')"><?php echo $this->_tpl_vars['lang']['audited']; ?>
</a></li>
				 <li><a href="javascript:;" onclick="toggleTable('id[]','operation=audited&<?php echo $this->_tpl_vars['querystring']; ?>
&value=0')"><?php echo $this->_tpl_vars['lang']['unaudited']; ?>
</a></li>
				 <li><a href="javascript:;" onclick="toggleTable('id[]','operation=recommend&<?php echo $this->_tpl_vars['querystring']; ?>
&value=1')"><?php echo $this->_tpl_vars['lang']['article']['recommend']; ?>
</a></li>
				 <li><a href="javascript:;" onclick="toggleTable('id[]','operation=recommend&<?php echo $this->_tpl_vars['querystring']; ?>
&value=0')"><?php echo $this->_tpl_vars['lang']['unrecommend']; ?>
</a></li>
			</ul>
	       </span><b class="arr"></b>
		   <span class="btnM" onclick="ShowSubMenu(this)" onmouseup="this.className='btnM-hover'" onmousedown="this.className='btnM-active'" onmouseout="this.className='btnM'" onmouseover="this.className='btnM-hover'" tabindex="0"><?php echo $this->_tpl_vars['lang']['moveto']; ?>

			<ul class="submenu" onmouseover="ShowMenu(this)" onmouseout="HideMenu(this)">
				 <?php $_from = $this->_tpl_vars['categories']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?>
				 <li><a href="javascript:;"<?php if ($this->_tpl_vars['aa']['disabled'] == 0): ?> onclick="toggleTable('id[]','operation=move&cid=<?php echo $this->_tpl_vars['aa']['cid']; ?>
')" <?php endif; ?>><b><?php echo $this->_tpl_vars['aa']['name']; ?>
</b></a></li>
				 <?php $this->assign('sub', $this->_tpl_vars['aa']['cid']); ?>
				 <?php $_from = $this->_tpl_vars['categories'][$this->_tpl_vars['sub']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bb']):
?>
				 <li><a href="javascript:;"<?php if ($this->_tpl_vars['bb']['disabled'] == 0): ?> onclick="toggleTable('id[]','operation=move&cid=<?php echo $this->_tpl_vars['bb']['cid']; ?>
')" <?php endif; ?>>　|-<?php echo $this->_tpl_vars['bb']['name']; ?>
</a></li>
				 <?php endforeach; endif; unset($_from); ?>
				 <?php endforeach; endif; unset($_from); ?>
			</ul>
		   </span><b class="arr"></b>
		   <span class="btnM" onclick="ShowSubMenu(this)" onmouseup="this.className='btnM-hover'" onmousedown="this.className='btnM-active'" onmouseout="this.className='btnM'" onmouseover="this.className='btnM-hover'" tabindex="0"><?php echo $this->_tpl_vars['lang']['view']; ?>

			<ul class="submenu" onmouseover="ShowMenu(this)" onmouseout="HideMenu(this)">
				 <li onmouseover="ShowSubMenu(this)" onmouseout="HideSubMenu(this)"><a href="javascript:;"><?php echo $this->_tpl_vars['lang']['article']['category']; ?>
<b class="arr2"></b></a>
				     <ul>
						 <?php $_from = $this->_tpl_vars['categories']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?>
						 <li><a href="javascript:;" onclick="ListTable('cid=<?php echo $this->_tpl_vars['aa']['cid']; ?>
')"><b><?php echo $this->_tpl_vars['aa']['name']; ?>
</b></a></li>
						 <?php $this->assign('sub', $this->_tpl_vars['aa']['cid']); ?>
						 <?php $_from = $this->_tpl_vars['categories'][$this->_tpl_vars['sub']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bb']):
?>
						 <li><a href="javascript:;" onclick="ListTable('cid=<?php echo $this->_tpl_vars['bb']['cid']; ?>
')">　|-<?php echo $this->_tpl_vars['bb']['name']; ?>
</a></li>
						 <?php endforeach; endif; unset($_from); ?>
						 <?php endforeach; endif; unset($_from); ?>
					 </ul>
				 </li>
			     <li><a href="javascript:;" onclick="ListTable('cid=<?php echo $this->_tpl_vars['cid']; ?>
&audited=0')"><?php echo $this->_tpl_vars['lang']['unaudited']; ?>
</a></li>
				 <li><a href="javascript:;" onclick="ListTable('cid=<?php echo $this->_tpl_vars['cid']; ?>
')"><?php echo $this->_tpl_vars['lang']['article']['all']; ?>
</a></li>
				 <li><a href="javascript:;" onclick="ListTable('cid=<?php echo $this->_tpl_vars['cid']; ?>
&recommend=1')"><?php echo $this->_tpl_vars['lang']['article']['recommend']; ?>
</a></li>
				 <li><a href="javascript:;" onclick="ListTable('cid=<?php echo $this->_tpl_vars['cid']; ?>
&image=1')"><?php echo $this->_tpl_vars['lang']['article']['image_article']; ?>
</a></li>
			</ul>
		    </span><b class="arr"></b>
		    <span class="btnR" onclick="ShowSubMenu(this)" onmouseover="this.className='btnR-hover'" onmouseup="this.className='btnR-hover'" onmousedown="this.className='btnR-active'" onmouseout="this.className='btnR'" tabindex="0">
		    <span>
			<?php echo $this->_tpl_vars['lang']['more']; ?>

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
')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
    </div>
    <form method="post" name="articles" id="articles" style="margin:0; padding:0;">
		<table border="0" cellpadding="0" cellspacing="0" class="list">
		  <tr>
			<th width="20"><input type="checkbox" onclick="javascript:checkAll(this,'id[]');" /></th>
			<th width="15" class="tocenter"><img src="templates/admincp/images/icon_view.gif" title="<?php echo $this->_tpl_vars['lang']['view']; ?>
" border="0" width="16" height="16" /></th>
			<th style="cursor:pointer;" onclick="ListTable('<?php echo $this->_tpl_vars['querystring']; ?>
&do=sort&orderby=id')" title="<?php echo $this->_tpl_vars['lang']['click_resort']; ?>
"><?php echo $this->_tpl_vars['lang']['article']['title']; ?>
</th>
			<th width="50"><?php echo $this->_tpl_vars['lang']['author']; ?>
</th>
			<th width="30" class="tocenter"><?php echo $this->_tpl_vars['lang']['comment']; ?>
</th>
			<th width="40" class="tocenter"><?php echo $this->_tpl_vars['lang']['audited']; ?>
</th>
			<th width="30" class="tocenter"><?php echo $this->_tpl_vars['lang']['recommend']; ?>
</th>
			<th width="35" class="tocenter" style="cursor:pointer;" onclick="ListTable('<?php echo $this->_tpl_vars['querystring']; ?>
&do=sort&orderby=views')" title="<?php echo $this->_tpl_vars['lang']['click_resort']; ?>
"><?php echo $this->_tpl_vars['lang']['clicks']; ?>
</th>
			<th width="120" class="last" style="cursor:pointer;" onclick="ListTable('<?php echo $this->_tpl_vars['querystring']; ?>
&do=sort&orderby=time')" title="<?php echo $this->_tpl_vars['lang']['click_resort']; ?>
"><?php echo $this->_tpl_vars['lang']['dateline']; ?>
</th>
		</tr>
	   <?php $_from = $this->_tpl_vars['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arc']):
?>
		<tr onmouseover="this.className='active'" onmouseout="this.className=''">
			<td><input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['arc']['id']; ?>
" onclick="checkThis(this)" /></td>
			<td class="tocenter"><a href="<?php echo $this->_tpl_vars['arc']['arcurl']; ?>
" target="_blank"><img src="templates/admincp/images/icon_view.gif" title="<?php echo $this->_tpl_vars['lang']['view']; ?>
" border="0" width="16" height="16" /></a></td>
			<td><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=article&operation=edit&id=<?php echo $this->_tpl_vars['arc']['id']; ?>
"><?php echo $this->_tpl_vars['arc']['title']; ?>
</a></td>
			<td><?php echo $this->_tpl_vars['arc']['author']; ?>
</td>
			<td class="tocenter"><?php echo $this->_tpl_vars['arc']['comments']; ?>
</td>
			<td class="tocenter"><img onclick="toggle(this,'operation=toggle_audited&id=<?php echo $this->_tpl_vars['arc']['id']; ?>
')" title="<?php echo $this->_tpl_vars['lang']['click_switch']; ?>
" src="templates/admincp/images/<?php if ($this->_tpl_vars['arc']['audited']): ?>yes.gif<?php else: ?>no.gif<?php endif; ?>" border="0" /></td>
			<td class="tocenter"><img onclick="toggle(this,'operation=toggle_recommend&id=<?php echo $this->_tpl_vars['arc']['id']; ?>
')" title="<?php echo $this->_tpl_vars['lang']['click_switch']; ?>
" src="templates/admincp/images/<?php if ($this->_tpl_vars['arc']['recommend']): ?>yes.gif<?php else: ?>no.gif<?php endif; ?>" border="0" /></td>
			<td class="tocenter"><?php echo $this->_tpl_vars['arc']['views']; ?>
</td>
			<td><span class="mdate"><?php echo ((is_array($_tmp=$this->_tpl_vars['arc']['dateline'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</span></td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		<tr>
			<td colspan="9"><?php echo $this->_tpl_vars['lang']['select']; ?>
��
			<a href="javascript:;" onclick="selectAll('id[]')"><?php echo $this->_tpl_vars['lang']['selectall']; ?>
</a> - 
			<a href="javascript:;" onclick="cancelAll('id[]')"><?php echo $this->_tpl_vars['lang']['noselect']; ?>
</a> - 
			<a href="javascript:;" onclick="reverseAll('id[]')"><?php echo $this->_tpl_vars['lang']['reverseselect']; ?>
</a> - 
			<a href="javascript:;" onclick="ListTable('<?php echo $this->_tpl_vars['querystring']; ?>
&recommend=1')"><?php echo $this->_tpl_vars['lang']['recommend']; ?>
</a> - 
			<a href="javascript:;" onclick="ListTable('<?php echo $this->_tpl_vars['querystring']; ?>
&audited=0')"><?php echo $this->_tpl_vars['lang']['unaudited']; ?>
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
		<span class="btn btn-dft" onclick="LoadPage('operation=addnew&cid=<?php echo $this->_tpl_vars['cid']; ?>
')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['article']['addnew']; ?>
</span></span>
		<span id="btnbox">
		   <span class="btnL" onclick="ShowSubMenu(this);" onmouseup="this.className='btnL-hover'" onmousedown="this.className='btnL-active'" onmouseout="this.className='btnL'" onmouseover="this.className='btnL-hover'" tabindex="0"><?php echo $this->_tpl_vars['lang']['markas']; ?>

			<ul class="submenu-bottom" onmouseover="ShowMenu(this)" onmouseout="HideMenu(this)">
			     <li><a href="javascript:;" onclick="toggleTable('id[]','operation=audited&<?php echo $this->_tpl_vars['querystring']; ?>
&value=1')"><?php echo $this->_tpl_vars['lang']['audited']; ?>
</a></li>
				 <li><a href="javascript:;" onclick="toggleTable('id[]','operation=audited&<?php echo $this->_tpl_vars['querystring']; ?>
&value=0')"><?php echo $this->_tpl_vars['lang']['unaudited']; ?>
</a></li>
				 <li><a href="javascript:;" onclick="toggleTable('id[]','operation=recommend&<?php echo $this->_tpl_vars['querystring']; ?>
&value=1')"><?php echo $this->_tpl_vars['lang']['article']['recommend']; ?>
</a></li>
				 <li><a href="javascript:;" onclick="toggleTable('id[]','operation=recommend&<?php echo $this->_tpl_vars['querystring']; ?>
&value=0')"><?php echo $this->_tpl_vars['lang']['unrecommend']; ?>
</a></li>
			</ul>
	       </span><b class="arr"></b>
		   <span class="btnM" onclick="ShowSubMenu(this)" onmouseup="this.className='btnM-hover'" onmousedown="this.className='btnM-active'" onmouseout="this.className='btnM'" onmouseover="this.className='btnM-hover'" tabindex="0"><?php echo $this->_tpl_vars['lang']['moveto']; ?>

			<ul class="submenu-bottom" onmouseover="ShowMenu(this)" onmouseout="HideMenu(this)">
				 <?php $_from = $this->_tpl_vars['categories']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?>
				 <li><a href="javascript:;"<?php if ($this->_tpl_vars['aa']['disabled'] == 0): ?> onclick="toggleTable('id[]','operation=move&cid=<?php echo $this->_tpl_vars['aa']['cid']; ?>
')" <?php endif; ?>><b><?php echo $this->_tpl_vars['aa']['name']; ?>
</b></a></li>
				 <?php $this->assign('sub', $this->_tpl_vars['aa']['cid']); ?>
				 <?php $_from = $this->_tpl_vars['categories'][$this->_tpl_vars['sub']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bb']):
?>
				 <li><a href="javascript:;"<?php if ($this->_tpl_vars['bb']['disabled'] == 0): ?> onclick="toggleTable('id[]','operation=move&cid=<?php echo $this->_tpl_vars['bb']['cid']; ?>
')" <?php endif; ?>>　|-<?php echo $this->_tpl_vars['bb']['name']; ?>
</a></li>
				 <?php endforeach; endif; unset($_from); ?>
				 <?php endforeach; endif; unset($_from); ?>
			</ul>
		   </span><b class="arr"></b>
		   <span class="btnM" onclick="ShowSubMenu(this)" onmouseup="this.className='btnM-hover'" onmousedown="this.className='btnM-active'" onmouseout="this.className='btnM'" onmouseover="this.className='btnM-hover'" tabindex="0"><?php echo $this->_tpl_vars['lang']['view']; ?>

			<ul class="submenu-bottom" onmouseover="ShowMenu(this)" onmouseout="HideMenu(this)">
				 <li><a href="javascript:;" onclick="ListTable('cid=<?php echo $this->_tpl_vars['cid']; ?>
&audited=0')"><?php echo $this->_tpl_vars['lang']['unaudited']; ?>
</a></li>
				 <li><a href="javascript:;" onclick="ListTable('cid=<?php echo $this->_tpl_vars['cid']; ?>
')"><?php echo $this->_tpl_vars['lang']['article']['all']; ?>
</a></li>
				 <li><a href="javascript:;" onclick="ListTable('cid=<?php echo $this->_tpl_vars['cid']; ?>
&recommend=1')"><?php echo $this->_tpl_vars['lang']['article']['recommend']; ?>
</a></li>
				 <li><a href="javascript:;" onclick="ListTable('cid=<?php echo $this->_tpl_vars['cid']; ?>
&image=1')"><?php echo $this->_tpl_vars['lang']['article']['image_article']; ?>
</a></li>
				 <li onmouseover="ShowSubMenu(this)" onmouseout="HideSubMenu(this)"><a href="javascript:;"><?php echo $this->_tpl_vars['lang']['article']['category']; ?>
<b class="arr2"></b></a>
				     <ul>
						 <?php $_from = $this->_tpl_vars['categories']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?>
						 <li><a href="javascript:;" onclick="ListTable('cid=<?php echo $this->_tpl_vars['aa']['cid']; ?>
')"><b><?php echo $this->_tpl_vars['aa']['name']; ?>
</b></a></li>
						 <?php $this->assign('sub', $this->_tpl_vars['aa']['cid']); ?>
						 <?php $_from = $this->_tpl_vars['categories'][$this->_tpl_vars['sub']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bb']):
?>
						 <li><a href="javascript:;" onclick="ListTable('cid=<?php echo $this->_tpl_vars['bb']['cid']; ?>
')">　|-<?php echo $this->_tpl_vars['bb']['name']; ?>
</a></li>
						 <?php endforeach; endif; unset($_from); ?>
						 <?php endforeach; endif; unset($_from); ?>
					 </ul>
				 </li>
			</ul>
		    </span><b class="arr"></b>
		    <span class="btnR" onclick="ShowSubMenu(this)" onmouseover="this.className='btnR-hover'" onmouseup="this.className='btnR-hover'" onmousedown="this.className='btnR-active'" onmouseout="this.className='btnR'" tabindex="0">
		    <span>
			<?php echo $this->_tpl_vars['lang']['more']; ?>

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
')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
    </div>
</div>
<?php endif; ?>