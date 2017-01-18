<?php /* Smarty version 2.6.19, created on 2012-02-22 09:20:08
         compiled from libs/newarticle.htm */ ?>
<div class="main-div">
    <div class="pos-div">
	     <h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['article']['manage']; ?>
 &raquo; <?php if ($this->_tpl_vars['operation'] == 'addnew'): ?><?php echo $this->_tpl_vars['lang']['article']['addnew']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['article']['edit']; ?>
<?php endif; ?></h2>
	</div>
	<div class="toolbar">
		<span class="btn btn-dft" onclick="SaveArticle()" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['save']; ?>
</span></span>
		<?php if ($this->_tpl_vars['operation'] == 'edit'): ?>
		<span class="btn btn-dft" onclick="DropOne(<?php echo $this->_tpl_vars['article']['id']; ?>
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
	<form action="admin.php?action=article&operation=save" method="post" name="article">
	<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['article']['id']; ?>
" />
	<table cellspacing="0" cellpadding="0" class="form-table">
		<tr>
			<td width="65"><?php echo $this->_tpl_vars['lang']['article']['title']; ?>
£º</td>
		    <td><input name="articlenew[title]" type="text" class="textinput" id="article_title" style="width:400px;" tabindex="5" value="<?php echo $this->_tpl_vars['article']['title']; ?>
" maxlength="60" /></td>
		</tr>
	    <tr>
		  <td><?php echo $this->_tpl_vars['lang']['article']['tag']; ?>
£º</td>
		  <td><input name="articlenew[tags]" type="text" class="textinput" id="article_tags" style="width:400px;" tabindex="5" value="<?php echo $this->_tpl_vars['article']['tags']; ?>
" maxlength="50" /></td>
		</tr>
		<tr>
		  <td><?php echo $this->_tpl_vars['lang']['article']['category']; ?>
£º</td>
		  <td>
			<select name="articlenew[cid]" id="article_cid">
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
"<?php if ($this->_tpl_vars['ccc']['current']): ?> selected="selected"<?php endif; ?><?php if ($this->_tpl_vars['ccc']['disabled'] == 1): ?> disabled="disabled"<?php endif; ?>>¡¡|-<?php echo $this->_tpl_vars['ccc']['name']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
				<?php endforeach; endif; unset($_from); ?>
			</select>¡¡
			<?php echo $this->_tpl_vars['lang']['article']['source']; ?>
£º
		    <input name="articlenew[source]" type="text" class="textinput" id="article_source" style="width:75px;" value="<?php echo $this->_tpl_vars['article']['source']; ?>
" />
			  <select name="selectf" onchange="article_source.value=this.value">
			   <option value=""><?php echo $this->_tpl_vars['lang']['please_select']; ?>
..</option>
               <?php $_from = $this->_tpl_vars['sources']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ss']):
?>
			   <option value="<?php echo $this->_tpl_vars['ss']['sitename']; ?>
"> <?php echo $this->_tpl_vars['ss']['sitename']; ?>
</option>
               <?php endforeach; endif; unset($_from); ?>
			</select>
		  </td>
		</tr>
		<tr>
		  <td><?php echo $this->_tpl_vars['lang']['article']['image']; ?>
£º</td>
		  <td>
			<input name="articlenew[image]" class="textinput" type="text" id="article_image" style="width:400px;" value="<?php echo $this->_tpl_vars['article']['image']; ?>
" tabindex="5" /> 	
			<span class="btn btn-dft" onclick="OpenDialog('article_image')" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['upload']; ?>
</span></span> 
		  </td>
       </tr>
		  <tr>
			<td><?php echo $this->_tpl_vars['lang']['article']['summary']; ?>
£º</td>
			<td><textarea name="articlenew[summary]" id="article_summary" style="width:98%; height:100px;" tabindex="5"><?php echo $this->_tpl_vars['article']['summary']; ?>
</textarea></td>
		  </tr>
		  <tr>
			<td colspan="2">
				<?php echo $this->_tpl_vars['lang']['article']['autopage']; ?>
£º<input name="articlenew[autopage]" type="checkbox" id="article_autopage" style="vertical-align:middle;" value="1" checked="checked"<?php if ($this->_tpl_vars['article']['autopage'] == 1): ?><?php endif; ?> />¡¡
				<?php echo $this->_tpl_vars['lang']['article']['pagesize']; ?>
£º<input name="articlenew[pagesize]" type="text" class="textinput" id="article_pagesize" style="width:60px;" value="<?php if ($this->_tpl_vars['operation'] == 'addnew'): ?>5000<?php else: ?><?php echo $this->_tpl_vars['article']['pagesize']; ?>
<?php endif; ?>" />
			</td>
		  </tr>
		  <tr>
		  	<td colspan="2"><?php echo $this->_tpl_vars['fckeditor']; ?>
</td>
		  </tr>
		  <tr>
			<td colspan="2">
			   <input name="articlenew[allowcomment]" type="checkbox" value="1"<?php if ($this->_tpl_vars['article']['allowcomment']): ?> checked="checked"<?php endif; ?> /> 
			   <?php echo $this->_tpl_vars['lang']['allowcomment']; ?>
¡¡
			   <input name="articlenew[allowvote]" type="checkbox" value="1"<?php if ($this->_tpl_vars['article']['allowvote']): ?> checked="checked"<?php endif; ?> /> 
			   <?php echo $this->_tpl_vars['lang']['allowvote']; ?>
¡¡
			   <input name="articlenew[recommend]" type="checkbox" value="1"<?php if ($this->_tpl_vars['article']['recommend']): ?> checked="checked"<?php endif; ?> /> 
			   <?php echo $this->_tpl_vars['lang']['setrecommend']; ?>
¡¡
			   <input name="articlenew[audited]" type="checkbox" value="1"<?php if ($this->_tpl_vars['article']['audited']): ?> checked="checked"<?php endif; ?> /> 
			   <?php echo $this->_tpl_vars['lang']['passaudited']; ?>
¡¡
			</td>
		  </tr>
		</tr>
    </table>
    </form>
	<div class="toolbar">
		<span class="btn btn-dft" onclick="SaveArticle()" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['save']; ?>
</span></span>
		<?php if ($this->_tpl_vars['operation'] == 'edit'): ?>
		<span class="btn btn-dft" onclick="DropOne(<?php echo $this->_tpl_vars['article']['id']; ?>
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
<script type="text/javascript">
var hassubmited = false;
var Message = new Array();
Message[0] = '<?php echo $this->_tpl_vars['lang']['articletxt']['0']; ?>
';
Message[1] = '<?php echo $this->_tpl_vars['lang']['articletxt']['1']; ?>
';
<?php echo 'function SaveArticle(){ 
	if(hassubmited) return false;
	var theForm = document.article;
	if(!$("#article_title").val()){
		showError(Message[0]);
		return false;
	}  
	if(!$("#article_source").val()){
		showError(Message[1]);
		return false;
	}
	hassubmited = true;
	theForm.submit();
}
window.document.onkeydown = function(e){
	e=window.event||e;
	if(e.ctrlKey&&e.keyCode==13){
	   SaveArticle();
	   return false;
	}
}
</script>'; ?>