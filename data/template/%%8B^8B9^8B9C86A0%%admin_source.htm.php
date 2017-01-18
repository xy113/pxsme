<?php /* Smarty version 2.6.19, created on 2012-02-23 07:58:35
         compiled from admin_source.htm */ ?>
<div class="main-div">
	<div class="pos-div">
		<h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['source']['manage']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['source'][$this->_tpl_vars['type']]; ?>
</h2>
	</div>
  <div class="toolbar">
		<span class="btn btn-dft" onclick="Drop('sid[]','type=<?php echo $this->_tpl_vars['type']; ?>
')" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><b><?php echo $this->_tpl_vars['lang']['drop']; ?>
</b></span></span>
		<span class="btn btn-dft" onclick="window.location.reload()" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
  </div>
  <table border="0" cellspacing="0" cellpadding="0" class="list">
    <tr>
      <th width="25"><input type="checkbox" onclick="checkAll(this,'sid[]')" /></th>
      <th width="180" style="cursor:pointer;" title="<?php echo $this->_tpl_vars['lang']['click_resort']; ?>
" onclick="Sort()"><?php echo $this->_tpl_vars['lang']['source']['sitename']; ?>
</th>
	  <th width="40" class="tocenter"><?php echo $this->_tpl_vars['lang']['sort']; ?>
</th>
      <th class="last"><?php echo $this->_tpl_vars['lang']['source']['siteurl']; ?>
</th>
    </tr>
    <?php $_from = $this->_tpl_vars['sources']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['source']):
?>
    <tr onmouseover="this.className='active'" onmouseout="this.className=''">
      <td><input type="checkbox" name="sid[]" value="<?php echo $this->_tpl_vars['source']['sid']; ?>
" /></td>
      <td><span title="<?php echo $this->_tpl_vars['lang']['click_edit']; ?>
" onclick="Edit(this,'operation=edit_name&sid=<?php echo $this->_tpl_vars['source']['sid']; ?>
')"><?php echo $this->_tpl_vars['source']['sitename']; ?>
</span></td>
	  <td class="tocenter"><span title="<?php echo $this->_tpl_vars['lang']['click_edit']; ?>
" onclick="Edit(this,'operation=edit_order&sid=<?php echo $this->_tpl_vars['source']['sid']; ?>
')"><?php echo $this->_tpl_vars['source']['ordernum']; ?>
</span></td>
      <td><span title="<?php echo $this->_tpl_vars['lang']['click_edit']; ?>
" onclick="Edit(this,'operation=edit_url&sid=<?php echo $this->_tpl_vars['source']['sid']; ?>
')"><?php echo $this->_tpl_vars['source']['siteurl']; ?>
</span></td>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
    <tr>
      <td colspan="4">
	        <?php echo $this->_tpl_vars['lang']['source']['sitename']; ?>
: <input name="sitename" id="sitename" type="text" class="textinput" style="width:100px;" />¡¡ 
			<?php echo $this->_tpl_vars['lang']['source']['siteurl']; ?>
: <input type="text" name="siteurl" id="siteurl" value="http://"  class="textinput" style="width:280px;" />¡¡        
			<?php echo $this->_tpl_vars['lang']['sort']; ?>
: <input name="ordernum" id="ordernum" type="text"  class="textinput" style="width:30px;" />
			<input type="button" name="btn_s" id="btn_s" class="button" value="<?php echo $this->_tpl_vars['lang']['add']; ?>
" onclick="Add('<?php echo $this->_tpl_vars['type']; ?>
')" />
      </td>
    </tr>
  </table>
  <div class="toolbar">
		<span class="btn btn-dft" onclick="Drop('sid[]','type=<?php echo $this->_tpl_vars['type']; ?>
')" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><b><?php echo $this->_tpl_vars['lang']['drop']; ?>
</b></span></span>
		<span class="btn btn-dft" onclick="window.location.reload()" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseover="this.className='btn btn-hover'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
  </div>
</div>
<?php echo '<script type="text/javascript">
function Add(type){
   if(!$("#sitename").val()){
	   showError(sitename_empty);
       return false;
   }
   var data = {sitename:$("#sitename").val(),siteurl:$("#siteurl").val(),ordernum:$("#ordernum").val()};
   $.post(url+\'opration=save&type=\'+type,data,function(result){
       if(result){
	       $(\'#bodyFrame\').html(result);
	   }
   })
   $$(\'btn_s\').disabled=true;
}
</script>'; ?>