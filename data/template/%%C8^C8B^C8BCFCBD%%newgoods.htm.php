<?php /* Smarty version 2.6.19, created on 2012-02-23 06:49:41
         compiled from libs/newgoods.htm */ ?>
<script src="static/calendar/WdatePicker.js" type="text/javascript"></script>
<div class="main-div">
	<div class="pos-div">
	     <h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['goods']['manage']; ?>
 &raquo; <?php if ($this->_tpl_vars['operation'] == 'addnew'): ?><?php echo $this->_tpl_vars['lang']['goods']['addnew']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['goods']['edit']; ?>
<?php endif; ?></h2>
	</div>
	<div class="toolbar">
		<span class="btn btn-dft" onclick="SaveGoods()" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php if ($this->_tpl_vars['operation'] == 'addnew'): ?><?php echo $this->_tpl_vars['lang']['save']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['save_edit']; ?>
<?php endif; ?></span></span>
		<?php if ($this->_tpl_vars['operation'] == 'edit'): ?>
		<span class="btn btn-dft" onclick="DropOne(<?php echo $this->_tpl_vars['goods']['id']; ?>
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
	<form action="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=goods&operation=save" name="newgoods" method="post">
	  <input name="id" type="hidden" value="<?php echo $this->_tpl_vars['goods']['id']; ?>
" />
	  <table border="0" cellspacing="0" cellpadding="0" class="form-table">
		<tr>
		  <td width="70"><?php echo $this->_tpl_vars['lang']['goods']['name']; ?>
£º</td>
		  <td><input name="goods[title]" id="goods_title" type="text" value="<?php echo $this->_tpl_vars['goods']['title']; ?>
" class="textinput" style="width:400px;" /></td>
		</tr>
		<tr>
		  <td><?php echo $this->_tpl_vars['lang']['tags']; ?>
£º</td>
		  <td><input name="goods[tags]" type="text" value="<?php echo $this->_tpl_vars['goods']['tags']; ?>
" class="textinput" style="width:400px;" /></td>
		</tr>
		<tr>
		  <td><?php echo $this->_tpl_vars['lang']['goods']['category']; ?>
£º</td>
		  <td>
		  <select name="goods[cid]">
		  <?php $_from = $this->_tpl_vars['categories']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cc']):
?>
		  <option value="<?php echo $this->_tpl_vars['cc']['cid']; ?>
" class="big"<?php if ($this->_tpl_vars['cc']['current']): ?> selected="selected"<?php endif; ?><?php if ($this->_tpl_vars['cc']['disabled'] == 1): ?> disabled="disabled"<?php endif; ?>><?php echo $this->_tpl_vars['cc']['name']; ?>
</option>
		  <?php $this->assign('sub', $this->_tpl_vars['cc']['cid']); ?>
		  <?php $_from = $this->_tpl_vars['categories'][$this->_tpl_vars['sub']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ccc']):
?>
		  <option value="<?php echo $this->_tpl_vars['ccc']['cid']; ?>
"<?php if ($this->_tpl_vars['ccc']['current']): ?> selected="selected"<?php endif; ?><?php if ($this->_tpl_vars['ccc']['disabled'] == 1): ?> disabled="disabled"<?php endif; ?>>¡¡&raquo;<?php echo $this->_tpl_vars['ccc']['name']; ?>
</option>
		  <?php endforeach; endif; unset($_from); ?>
		  <?php endforeach; endif; unset($_from); ?>
		  </select>¡¡ 
		  <?php echo $this->_tpl_vars['lang']['goods']['ldate']; ?>
£º
		   <input name="goods[listingdate]" id="goods_listingdate" type="text" value="<?php echo $this->_tpl_vars['goods']['listingdate']; ?>
" class="textinput" onclick="WdatePicker()" />    
		  </td>
		</tr>
		<tr>
		  <td><?php echo $this->_tpl_vars['lang']['goods']['size']; ?>
£º</td>
		  <td>
		  <input name="goods[size]" type="text" value="<?php echo $this->_tpl_vars['goods']['size']; ?>
" class="textinput" /> ¡¡       
		  <?php echo $this->_tpl_vars['lang']['goods']['price']; ?>
£º
		  <input name="goods[price]" type="text" value="<?php echo $this->_tpl_vars['goods']['price']; ?>
" class="textinput" />     
		 </td>
		</tr>
		<tr>
		  <td><?php echo $this->_tpl_vars['lang']['goods']['image']; ?>
£º</td>
		  <td>
		  <input name="goods[image]" id="goods_image" type="text" value="<?php echo $this->_tpl_vars['goods']['image']; ?>
" class="textinput" style="width:400px;" />
		  <span class="btn btn-dft" onclick="OpenDialog('goods_image')" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['upload']; ?>
</span></span> 
		  </td>
		</tr>
		<tr>
			<td colspan="2"><?php echo $this->_tpl_vars['fckeditor']; ?>
</td>
		</tr>
		<tr>
			<td colspan="2">
			   <input type="checkbox" name="goods[allowcomment]" value="1"<?php if ($this->_tpl_vars['goods']['allowcomment'] == 1): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['allowcomment']; ?>
¡¡
			   <input type="checkbox" name="goods[allowvote]" value="1"<?php if ($this->_tpl_vars['goods']['allowvote'] == 1): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['allowvote']; ?>
¡¡
			   <input type="checkbox" name="goods[recommend]" value="1"<?php if ($this->_tpl_vars['goods']['recommend'] == 1): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['setrecommend']; ?>
¡¡
			   <input type="checkbox" name="goods[audited]" value="1"<?php if ($this->_tpl_vars['goods']['audited'] == 1): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['passaudited']; ?>
¡¡
			</td>
		</tr>
	  </table>
	</form>
	<div class="toolbar">
		<span class="btn btn-dft" onclick="SaveGoods()" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php if ($this->_tpl_vars['operation'] == 'addnew'): ?><?php echo $this->_tpl_vars['lang']['save']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['save_edit']; ?>
<?php endif; ?></span></span>
		<?php if ($this->_tpl_vars['operation'] == 'edit'): ?>
		<span class="btn btn-dft" onclick="DropOne(<?php echo $this->_tpl_vars['goods']['id']; ?>
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
</div>
<?php echo '<script type="text/javascript">
var hassubmited = false;
function SaveGoods(){
    if(hassubmited) return false;
	if(!$("#goods_title").val()){
		 showError(goods_name_empty);
		 return false;
	}
	hassubmited = true;
    document.newgoods.submit();
	return true;
}
document.onkeydown = function(e){
	e=window.event||e;
	if(e.ctrlKey&&e.keyCode==13){
	   SaveGoods();
	   return false;
	}
}
</script>'; ?>