<?php /* Smarty version 2.6.19, created on 2012-02-24 06:14:01
         compiled from libs/newimage.htm */ ?>
<div class="main-div">
    <div class="pos-div">
	     <h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['image']['manage']; ?>
 &raquo; <?php if ($this->_tpl_vars['operation'] == 'addnew'): ?><?php echo $this->_tpl_vars['lang']['image']['addnew']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['image']['edit']; ?>
<?php endif; ?></h2>
	</div>
	<div class="toolbar">
		<span class="btn btn-dft" onclick="SaveAlbum()" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['save']; ?>
</span></span>
		<?php if ($this->_tpl_vars['operation'] == 'edit'): ?>
		<span class="btn btn-dft" onclick="DropOne(<?php echo $this->_tpl_vars['image']['id']; ?>
,'cid=<?php echo $this->_tpl_vars['cid']; ?>
')" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['drop']; ?>
</span></span>
		<?php endif; ?>
		<span class="btn btn-dft" onclick="LoadPage('cid=<?php echo $this->_tpl_vars['cid']; ?>
')" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['back_list']; ?>
</span></span>
		<span class="btn btn-dft" onclick="window.location.reload();" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
		<span class="ctrlenter">¡¡<?php echo $this->_tpl_vars['lang']['ctrlenter']; ?>
</span>
	</div>
	<form name="image" method="post" action="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=image&operation=save">
	<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['image']['id']; ?>
" />
	<table border="0"cellpadding="0" cellspacing="0" class="form-table">
		<tr>
		  <td width="60"><?php echo $this->_tpl_vars['lang']['image']['title']; ?>
£º</td>
		  <td><input name="imagenew[title]" type="text" class="textinput" id="image_title" style="width:400px;" tabindex="5" value="<?php echo $this->_tpl_vars['image']['title']; ?>
" maxlength="50" /></td>
		</tr>
		<tr>
		  <td><?php echo $this->_tpl_vars['lang']['tags']; ?>
£º</td>
		  <td><input name="imagenew[tags]" type="text" class="textinput" id="image_tags" style="width:400px;" tabindex="5" value="<?php echo $this->_tpl_vars['image']['tags']; ?>
" maxlength="50" /></td>
		</tr>
		<tr>
		  <td><?php echo $this->_tpl_vars['lang']['image']['category']; ?>
£º</td>
		  <td>
			  <select name="imagenew[cid]" id="image_cid" style="vertical-align:middle;">
				<?php $_from = $this->_tpl_vars['categories']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?>
				<option value="<?php echo $this->_tpl_vars['aa']['cid']; ?>
" class="big"<?php if ($this->_tpl_vars['aa']['current']): ?> selected="selected"<?php endif; ?><?php if ($this->_tpl_vars['aa']['disabled'] == 1): ?> disabled="disabled"<?php endif; ?>><?php echo $this->_tpl_vars['aa']['name']; ?>
</option>
				<?php $this->assign('sub', $this->_tpl_vars['aa']['cid']); ?>
				<?php $_from = $this->_tpl_vars['categories'][$this->_tpl_vars['sub']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bb']):
?>
				<option value="<?php echo $this->_tpl_vars['bb']['cid']; ?>
"<?php if ($this->_tpl_vars['bb']['current']): ?> selected="selected"<?php endif; ?><?php if ($this->_tpl_vars['bb']['disabled'] == 1): ?> disabled="disabled"<?php endif; ?>>¡¡|-<?php echo $this->_tpl_vars['bb']['name']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
				<?php endforeach; endif; unset($_from); ?>
		    </select>¡¡
			  <?php echo $this->_tpl_vars['lang']['image']['source']; ?>
£º
		      <input name="imagenew[source]" type="text" class="textinput" id="image_source" style="width:75px;" value="<?php echo $this->_tpl_vars['image']['source']; ?>
" />
			  <select name="selectf" onchange="image_source.value=this.value">
			   <option value=""><?php echo $this->_tpl_vars['lang']['please_select']; ?>
..</option>
               <?php $_from = $this->_tpl_vars['sources']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['source']):
?>
			   <option value="<?php echo $this->_tpl_vars['source']['sitename']; ?>
"> <?php echo $this->_tpl_vars['source']['sitename']; ?>
</option>
               <?php endforeach; endif; unset($_from); ?>
			</select>
		  </td>
		</tr>
		<tr>
		  <td><?php echo $this->_tpl_vars['lang']['image']['cover']; ?>
£º</td>
		  <td>
		   <input name="imagenew[image]" type="text" class="textinput" id="image_image" value="<?php echo $this->_tpl_vars['image']['image']; ?>
" style="width:400px;" />
		   <span class="btn btn-dft" onclick="OpenDialog('image_image')" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['upload']; ?>
</span></span>
		 </td>
		</tr>
		<tr>
		  <td><?php echo $this->_tpl_vars['lang']['image']['content']; ?>
£º</td>
		  <td><textarea name="imagenew[content]" id="image_content" style="width:98%; height:200px;"><?php echo $this->_tpl_vars['image']['content']; ?>
</textarea></td>
		</tr>
		<tr>
		    <td></td>
			<td>
			   <input name="imagenew[allowcomment]" type="checkbox" id="imagenew[allowcomment]" value="1"<?php if ($this->_tpl_vars['image']['allowcomment']): ?> checked="checked"<?php endif; ?> /> 
			   <?php echo $this->_tpl_vars['lang']['allowcomment']; ?>
¡¡
			   <input name="imagenew[allowvote]" type="checkbox" id="imagenew[allowvote]" value="1"<?php if ($this->_tpl_vars['image']['allowvote']): ?> checked="checked"<?php endif; ?> /> 
			   <?php echo $this->_tpl_vars['lang']['allowvote']; ?>
¡¡
			   <input name="imagenew[recommend]" type="checkbox" id="imagenew[recommend]" value="1"<?php if ($this->_tpl_vars['image']['recommend']): ?> checked="checked"<?php endif; ?> /> 
			   <?php echo $this->_tpl_vars['lang']['setrecommend']; ?>
¡¡
			   <input name="imagenew[audited]" type="checkbox" id="imagenew[audited]" value="1"<?php if ($this->_tpl_vars['image']['audited']): ?> checked="checked"<?php endif; ?> /> 
			   <?php echo $this->_tpl_vars['lang']['passaudited']; ?>
¡¡
			</td>
		</tr>
	</table>
	</form>
	<div class="toolbar">
		<span class="btn btn-dft" onclick="SaveAlbum()" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['save']; ?>
</span></span>
		<?php if ($this->_tpl_vars['operation'] == 'edit'): ?>
		<span class="btn btn-dft" onclick="DropOne(<?php echo $this->_tpl_vars['image']['id']; ?>
,'cid=<?php echo $this->_tpl_vars['image']['cid']; ?>
')" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['drop']; ?>
</span></span>
		<?php endif; ?>
		<span class="btn btn-dft" onclick="LoadPage('cid=<?php echo $this->_tpl_vars['cid']; ?>
')" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['back_list']; ?>
</span></span>
		<span class="btn btn-dft" onclick="window.location.reload();" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
		<span class="ctrlenter">¡¡<?php echo $this->_tpl_vars['lang']['ctrlenter']; ?>
</span>
	</div>
</div>
<script type="text/javascript">
var hassubmited = false;
var Message = new Array();
Message[0] = '<?php echo $this->_tpl_vars['lang']['imagetxt']['0']; ?>
';
Message[1] = '<?php echo $this->_tpl_vars['lang']['imagetxt']['1']; ?>
';
Message[2] = '<?php echo $this->_tpl_vars['lang']['imagetxt']['2']; ?>
';
<?php echo 'function SaveAlbum(){
	if(hassubmited)return false;
	var theForm = document.image;
	if(!$("#image_title").val()){
		showError(Message[0]);
		return false;
	}
	if(!$("#image_source").val()){
		showError(Message[1]);
		return false;
	}
	if(!$("#image_image").val()){
		showError(Message[2]);
		return false;
	}
	hassubmited = true;
	theForm.submit();
	return true;
}
document.onkeydown = function(e){
	e=window.event||e;
	if(e.ctrlKey&&e.keyCode==13){
	   SaveAlbum();
	   return false;
	}
}
</script>'; ?>