<?php /* Smarty version 2.6.19, created on 2012-02-22 09:12:20
         compiled from admin_settings.htm */ ?>
<div class="main-div">
<div class="pos-div">
	<h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['setting_system']; ?>
 &raquo; 
	<?php if ($this->_tpl_vars['operation'] == 'basic'): ?><?php echo $this->_tpl_vars['lang']['setting_basic']; ?>
<?php endif; ?>
	<?php if ($this->_tpl_vars['operation'] == 'optimization'): ?><?php echo $this->_tpl_vars['lang']['setting_optimization']; ?>
<?php endif; ?>
	<?php if ($this->_tpl_vars['operation'] == 'attachment'): ?><?php echo $this->_tpl_vars['lang']['setting_attachment']; ?>
<?php endif; ?>
	<?php if ($this->_tpl_vars['operation'] == 'image'): ?><?php echo $this->_tpl_vars['lang']['setting_image']; ?>
<?php endif; ?>
	<?php if ($this->_tpl_vars['operation'] == 'register'): ?><?php echo $this->_tpl_vars['lang']['setting_register']; ?>
<?php endif; ?>
	<?php if ($this->_tpl_vars['operation'] == 'randcode'): ?><?php echo $this->_tpl_vars['lang']['setting_randcode']; ?>
<?php endif; ?>
	</h2>
</div>
<div class="toolbar">
	<span class="btn btn-dft" onclick="document.settings.submit()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['save_edit']; ?>
</span></span>
	<span class="btn btn-dft" onclick="window.location.reload()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
</div>
<form name="settings" method="post" action="admin.php?action=settings&operation=<?php echo $this->_tpl_vars['operation']; ?>
&do=modify">
	<?php if ($this->_tpl_vars['operation'] == 'basic'): ?>
	<table border="0" cellpadding="0" cellspacing="0" class="formtable">
	<tr>
	  <td width="360" class="bold"><?php echo $this->_tpl_vars['lang']['setting_sysname']; ?>
£º</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td><input name="settingnew[sysname]" type="text" class="textinput txt" value="<?php echo $this->_tpl_vars['config']['sysname']; ?>
" /></td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_0']; ?>
</td>
	</tr>
	<tr>
	  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_sitename']; ?>
£º</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td><input name="settingnew[sitename]" type="text" class="textinput txt" value="<?php echo $this->_tpl_vars['config']['sitename']; ?>
"/></td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_1']; ?>
</td>
	</tr>
	<tr>
	  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_siteurl']; ?>
£º</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td><input name="settingnew[siteurl]" type="text" class="textinput txt" value="<?php echo $this->_tpl_vars['config']['siteurl']; ?>
"/></td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_2']; ?>
</td>
	</tr>
	<tr>
	  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_keywords']; ?>
£º</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td><textarea name="settingnew[keywords]" ><?php echo $this->_tpl_vars['config']['keywords']; ?>
</textarea></td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_3']; ?>
</td>
	</tr>
	<tr>
	  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_description']; ?>
£º</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td><textarea name="settingnew[description]"><?php echo $this->_tpl_vars['config']['description']; ?>
</textarea></td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_4']; ?>
</td>
	</tr>
	<tr>
	  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_icp']; ?>
£º</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td><input name="settingnew[icp]" type="text" class="textinput txt" value="<?php echo $this->_tpl_vars['config']['icp']; ?>
" /></td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_5']; ?>
</td>
	</tr>
	<tr>
	  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_copyright']; ?>
£º</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td><textarea name="settingnew[copyright]"><?php echo $this->_tpl_vars['config']['copyright']; ?>
</textarea></td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_6']; ?>
</td>
	</tr>
	<tr>
	  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_islog']; ?>
£º</td>
	  <td></td>
	</tr>
	<tr>
		<td>
			<input type="radio" name="settingnew[islog]"  value="1"<?php if ($this->_tpl_vars['config']['islog'] == 1): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
¡¡
			<input type="radio" name="settingnew[islog]"  value="0"<?php if ($this->_tpl_vars['config']['islog'] == 0): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['no']; ?>
	</td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_7']; ?>
</td>
	</tr>
	<tr>
	  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_statcode']; ?>
£º</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td><textarea name="settingnew[statcode]"><?php echo $this->_tpl_vars['config']['statcode']; ?>
</textarea></td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_8']; ?>
</td>
	</tr>
	<tr>
	  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_slidewidth']; ?>
£º</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td><input type="text" name="settingnew[slidewidth]" value="<?php echo $this->_tpl_vars['config']['slidewidth']; ?>
" class="textinput txt" /></td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_9']; ?>
</td>
	</tr>
	<tr>
	  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_slideheight']; ?>
£º</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td><input type="text" name="settingnew[slideheight]" value="<?php echo $this->_tpl_vars['config']['slideheight']; ?>
" class="textinput txt" /></td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_10']; ?>
</td>
	</tr>
	<tr>
	  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_sysclosed']; ?>
£º</td>
	  <td>	</td>
	</tr>
	<tr>
	  <td>
		<input name="settingnew[sysclosed]" type="radio" value="1"<?php if ($this->_tpl_vars['config']['sysclosed'] == 1): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
¡¡
		<input name="settingnew[sysclosed]" type="radio" value="0"<?php if ($this->_tpl_vars['config']['sysclosed'] == 0): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['no']; ?>
  </td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_11']; ?>
</td>
	</tr>
	<tr>
	  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_closedreason']; ?>
£º</td>
	  <td>&nbsp;</td>
	</tr>
	
	<tr>
	  <td><textarea name="settingnew[sysclosedreason]"><?php echo $this->_tpl_vars['config']['sysclosedreason']; ?>
</textarea></td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_12']; ?>
</td>
	</tr>
	</table>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['operation'] == 'optimization'): ?>
	<table border="0" cellspacing="0" cellpadding="0" class="formtable">
		<tr>
		  <td width="360" class="bold"><?php echo $this->_tpl_vars['lang']['setting_rewrite']; ?>
:</td>
		  <td>&nbsp;</td>
	  	</tr>
		<tr>
		  <td>
		  	<input type="radio" name="settingnew[rewrite]"  value="1"<?php if ($this->_tpl_vars['config']['rewrite'] == 1): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
¡¡
			<input type="radio" name="settingnew[rewrite]"  value="0"<?php if ($this->_tpl_vars['config']['rewrite'] == 0): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['no']; ?>
		  </td>
		  <td><?php echo $this->_tpl_vars['lang']['setting_tips_13']; ?>
</td>
	  	</tr>
		<tr>
		  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_seotitle']; ?>
:</td>
		  <td></td>
	  </tr>
		<tr>
		  <td><input name="settingnew[seotitle]" type="text" class="textinput txt" value="<?php echo $this->_tpl_vars['config']['seotitle']; ?>
" /></td>
		  <td><?php echo $this->_tpl_vars['lang']['setting_tips_14']; ?>
</td>
	  </tr>
		<tr>
		  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_seohead']; ?>
:</td>
		  <td></td>
	  </tr>
		<tr>
		  <td><textarea name="settingnew[seohead]"><?php echo $this->_tpl_vars['config']['seohead']; ?>
</textarea></td>
		  <td><?php echo $this->_tpl_vars['lang']['setting_tips_15']; ?>
</td>
	  </tr>
		<tr>
		  <td width="100" class="bold"><?php echo $this->_tpl_vars['lang']['setting_iscache']; ?>
£º</td>
		  <td></td>
		</tr>
		<tr>
		  <td>
		  	<input type="radio" name="settingnew[iscache]"  value="1"<?php if ($this->_tpl_vars['config']['iscache'] == 1): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
¡¡
			<input type="radio" name="settingnew[iscache]"  value="0"<?php if ($this->_tpl_vars['config']['iscache'] == 0): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['no']; ?>
		  </td>
		  <td><?php echo $this->_tpl_vars['lang']['setting_tips_16']; ?>
</td>
	  	</tr>
		<tr>
		  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_cacheindex']; ?>
:</td>
		  <td></td>
	  </tr>
		<tr>
		  <td><input type="text" name="settingnew[cacheindex]" class="textinput txt" value="<?php echo $this->_tpl_vars['config']['cacheindex']; ?>
" /></td>
		  <td><?php echo $this->_tpl_vars['lang']['setting_tips_17']; ?>
</td>
	  </tr>
		<tr>
		  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_cachetime']; ?>
£º</td>
		  <td></td>
		</tr>
		<tr>
		  <td><input type="text" name="settingnew[cachetime]" value="<?php echo $this->_tpl_vars['config']['cachetime']; ?>
" class="textinput txt" /></td>
		  <td><?php echo $this->_tpl_vars['lang']['setting_tips_18']; ?>
</td>
	  </tr>
		<tr>
		  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_cachedir']; ?>
£º</td>
		  <td></td>
		</tr>
		<tr>
		  <td><input type="text" name="settingnew[cachedir]" value="<?php echo $this->_tpl_vars['config']['cachedir']; ?>
" class="textinput txt" /></td>
		  <td><?php echo $this->_tpl_vars['lang']['setting_tips_19']; ?>
</td>
	  </tr>
		<tr>
		  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_gzipcompress']; ?>
£º</td>
		  <td></td>
		</tr>
		<tr>
		  <td>
		  	<input type="radio" name="settingnew[gzipcompress]" value="1"<?php if ($this->_tpl_vars['config']['gzipcompress'] == 1): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
¡¡
			<input type="radio" name="settingnew[gzipcompress]" value="0"<?php if ($this->_tpl_vars['config']['gzipcompress'] == 0): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['no']; ?>

		  </td>
		  <td><?php echo $this->_tpl_vars['lang']['setting_tips_20']; ?>
</td>
	  </tr>
	</table>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['operation'] == 'attachment'): ?>
	<table border="0" cellspacing="0" cellpadding="0" class="formtable">
	  <tr>
		<td width="360" class="bold"><?php echo $this->_tpl_vars['lang']['setting_attachdir']; ?>
£º</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td><input name="settingnew[attachdir]" type="text" value="<?php echo $this->_tpl_vars['config']['attachdir']; ?>
" class="textinput txt" /></td>
		<td><?php echo $this->_tpl_vars['lang']['setting_tips_21']; ?>
</td>
	  </tr>
	  <tr>
		<td class="bold"><?php echo $this->_tpl_vars['lang']['setting_attachmax']; ?>
£º</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td><input name="settingnew[attachmax]" type="text" value="<?php echo $this->_tpl_vars['config']['attachmax']; ?>
" class="textinput txt" /></td>
		<td><?php echo $this->_tpl_vars['lang']['setting_tips_22']; ?>
</td>
	  </tr>
	  <tr>
		<td class="bold"><?php echo $this->_tpl_vars['lang']['setting_attachtype']; ?>
£º</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td><input name="settingnew[attachtype]" type="text" value="<?php echo $this->_tpl_vars['config']['attachtype']; ?>
" class="textinput txt" /></td>
		<td><?php echo $this->_tpl_vars['lang']['setting_tips_23']; ?>
</td>
	  </tr>
	</table>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['operation'] == 'image'): ?>
	<table border="0" cellspacing="0" cellpadding="0" class="formtable">
	  <tr>
		<td width="360" class="bold"><?php echo $this->_tpl_vars['lang']['setting_imgtype']; ?>
£º</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td><input name="settingnew[imgtype]" type="text" value="<?php echo $this->_tpl_vars['config']['imgtype']; ?>
" class="textinput txt" /></td>
		<td><?php echo $this->_tpl_vars['lang']['setting_tips_24']; ?>
</td>
	  </tr>
	  <tr>
		<td class="bold"><?php echo $this->_tpl_vars['lang']['setting_thumbstatus']; ?>
£º</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td>
			<input type="radio" name="settingnew[thumbstatus]" value="1"<?php if ($this->_tpl_vars['config']['thumbstatus'] == 1): ?> checked="checked"<?php endif; ?> />
			<?php echo $this->_tpl_vars['lang']['yes']; ?>

			<input type="radio" name="settingnew[thumbstatus]" value="0"<?php if ($this->_tpl_vars['config']['thumbstatus'] == 0): ?> checked="checked"<?php endif; ?> />
			<?php echo $this->_tpl_vars['lang']['no']; ?>
		 	
		</td>
		<td><?php echo $this->_tpl_vars['lang']['setting_tips_25']; ?>
</td>
	  </tr>
	  <tr>
		<td class="bold"><?php echo $this->_tpl_vars['lang']['setting_thumbsize']; ?>
£º</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td>
			<input name="settingnew[thumbwidth]" type="text" value="<?php echo $this->_tpl_vars['config']['thumbwidth']; ?>
" class="textinput" style="width:60px;" /> x 
			<input name="settingnew[thumbheight]" type="text" value="<?php echo $this->_tpl_vars['config']['thumbheight']; ?>
" class="textinput" style="width:60px;" />			</td>
		<td><?php echo $this->_tpl_vars['lang']['setting_tips_26']; ?>
</td>
	  </tr>
	  <tr>
		<td class="bold"><?php echo $this->_tpl_vars['lang']['setting_watermark']; ?>
£º</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td>
			<input type="radio" name="settingnew[watermarkstatus]" value="0"<?php if ($this->_tpl_vars['config']['watermarkstatus'] == 0): ?> checked="checked"<?php endif; ?> />
			<?php echo $this->_tpl_vars['lang']['setting_nowatermark']; ?>
<br />
			<input type="radio" name="settingnew[watermarkstatus]" value="1"<?php if ($this->_tpl_vars['config']['watermarkstatus'] == 1): ?> checked="checked"<?php endif; ?> />
			#1
			<input type="radio" name="settingnew[watermarkstatus]" value="2"<?php if ($this->_tpl_vars['config']['watermarkstatus'] == 2): ?> checked="checked"<?php endif; ?> />
			#2
			<input type="radio" name="settingnew[watermarkstatus]" value="3"<?php if ($this->_tpl_vars['config']['watermarkstatus'] == 3): ?> checked="checked"<?php endif; ?> />
			#3<br />
			<input type="radio" name="settingnew[watermarkstatus]" value="4"<?php if ($this->_tpl_vars['config']['watermarkstatus'] == 4): ?> checked="checked"<?php endif; ?> />
			#4
			<input type="radio" name="settingnew[watermarkstatus]" value="5"<?php if ($this->_tpl_vars['config']['watermarkstatus'] == 5): ?> checked="checked"<?php endif; ?> />
			#5
			<input type="radio" name="settingnew[watermarkstatus]" value="6"<?php if ($this->_tpl_vars['config']['watermarkstatus'] == 6): ?> checked="checked"<?php endif; ?> />
			#6<br />
			<input type="radio" name="settingnew[watermarkstatus]" value="7"<?php if ($this->_tpl_vars['config']['watermarkstatus'] == 7): ?> checked="checked"<?php endif; ?> />
			#7
			<input type="radio" name="settingnew[watermarkstatus]" value="8"<?php if ($this->_tpl_vars['config']['watermarkstatus'] == 8): ?> checked="checked"<?php endif; ?> />
			#8
			<input type="radio" name="settingnew[watermarkstatus]" value="9"<?php if ($this->_tpl_vars['config']['watermarkstatus'] == 9): ?> checked="checked"<?php endif; ?> />
			#9			</td>
		<td><?php echo $this->_tpl_vars['lang']['setting_tips_27']; ?>
</td>
	  </tr>
	  <tr>
		<td class="bold"><?php echo $this->_tpl_vars['lang']['setting_watermarktype']; ?>
£º</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td>
		<input type="radio" name="settingnew[watermarktype]" value="0"<?php if ($this->_tpl_vars['config']['watermarktype'] == 0): ?> checked="checked"<?php endif; ?> />
		<?php echo $this->_tpl_vars['lang']['setting_watermarktype_0']; ?>

		<input type="radio" name="settingnew[watermarktype]" value="1"<?php if ($this->_tpl_vars['config']['watermarktype'] == 1): ?> checked="checked"<?php endif; ?> />
		<?php echo $this->_tpl_vars['lang']['setting_watermarktype_1']; ?>
			
		</td>
		<td><?php echo $this->_tpl_vars['lang']['setting_tips_28']; ?>
</td>
	  </tr>
	  <tr>
		<td class="bold"><?php echo $this->_tpl_vars['lang']['setting_watertext']; ?>
£º</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td><textarea name="settingnew[watermarktext]" rows="3" class="textinput txt"><?php echo $this->_tpl_vars['config']['watermarktext']; ?>
</textarea></td>
		<td><?php echo $this->_tpl_vars['lang']['setting_tips_29']; ?>
</td>
	  </tr>
	  <tr>
		<td class="bold"><?php echo $this->_tpl_vars['lang']['setting_waterfont']; ?>
£º</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td><input name="settingnew[watermarkfontfile]" type="text" value="<?php echo $this->_tpl_vars['config']['watermarkfontfile']; ?>
" class="textinput txt" /></td>
		<td><?php echo $this->_tpl_vars['lang']['setting_tips_30']; ?>
</td>
	  </tr>
	  <tr>
		<td class="bold"><?php echo $this->_tpl_vars['lang']['setting_watersize']; ?>
£º</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td><input name="settingnew[watermarkfontsize]" type="text" value="<?php echo $this->_tpl_vars['config']['watermarkfontsize']; ?>
" class="textinput txt" /></td>
		<td><?php echo $this->_tpl_vars['lang']['setting_tips_31']; ?>
</td>
	  </tr>
	  <tr>
		<td class="bold"><?php echo $this->_tpl_vars['lang']['setting_watercolor']; ?>
£º</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td><input name="settingnew[watermarkfontcolor]" type="text" value="<?php echo $this->_tpl_vars['config']['watermarkfontcolor']; ?>
" class="textinput txt" /></td>
		<td><?php echo $this->_tpl_vars['lang']['setting_tips_32']; ?>
</td>
	  </tr>
	  <tr>
		<td class="bold"><?php echo $this->_tpl_vars['lang']['setting_waterimg']; ?>
£º</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td><input name="settingnew[watermarkimg]" type="text" value="<?php echo $this->_tpl_vars['config']['watermarkimg']; ?>
" class="textinput txt" /></td>
		<td><?php echo $this->_tpl_vars['lang']['setting_tips_33']; ?>
</td>
	  </tr>
	  <tr>
		<td class="bold"><?php echo $this->_tpl_vars['lang']['setting_wateralpha']; ?>
£º</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td><input name="settingnew[watermarkalpha]" type="text" value="<?php echo $this->_tpl_vars['config']['watermarkalpha']; ?>
" class="textinput txt" /></td>
		<td><?php echo $this->_tpl_vars['lang']['setting_tips_34']; ?>
</td>
	  </tr>
	  <tr>
		<td class="bold"><?php echo $this->_tpl_vars['lang']['setting_waterxoffset']; ?>
£º</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td><input name="settingnew[watermarkoffsetx]" type="text" value="<?php echo $this->_tpl_vars['config']['watermarkoffsetx']; ?>
" class="textinput txt" /></td>
		<td><?php echo $this->_tpl_vars['lang']['setting_tips_35']; ?>
</td>
	  </tr>
	  <tr>
		<td class="bold"><?php echo $this->_tpl_vars['lang']['setting_wateryoffset']; ?>
£º</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td><input name="settingnew[watermarkoffsety]" type="text" value="<?php echo $this->_tpl_vars['config']['watermarkoffsety']; ?>
" class="textinput txt" /></td>
		<td><?php echo $this->_tpl_vars['lang']['setting_tips_36']; ?>
</td>
	  </tr>
	</table>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['operation'] == 'register'): ?>
	<table border="0" cellpadding="0" cellspacing="0" class="formtable">
	<tr>
	  <td width="360" class="bold"><?php echo $this->_tpl_vars['lang']['setting_register_allowed']; ?>
£º</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td>
		<input name="settingnew[regallowed]" type="radio" value="1"<?php if ($this->_tpl_vars['config']['regallowed'] == 1): ?> checked="checked"<?php endif; ?> />
		<?php echo $this->_tpl_vars['lang']['yes']; ?>
¡¡
		  <input name="settingnew[regallowed]" type="radio" value="0"<?php if ($this->_tpl_vars['config']['regallowed'] == 0): ?> checked="checked"<?php endif; ?> />
		<?php echo $this->_tpl_vars['lang']['no']; ?>
			</td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_37']; ?>
</td>
	  </tr>
	<tr>
	  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_register_link']; ?>
:</td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td><input type="text" name="settingnew[reglink]" value="<?php echo $this->_tpl_vars['config']['reglink']; ?>
" class="textinput txt" /></td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_38']; ?>
</td>
	  </tr>
	<tr>
	  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_register_linkname']; ?>
:</td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td><input type="text" name="settingnew[reglinkname]" value="<?php echo $this->_tpl_vars['config']['reglinkname']; ?>
" class="textinput txt" /></td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_39']; ?>
</td>
	  </tr>
	<tr>
	  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_register_advance']; ?>
£º</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td>
		<input name="settingnew[regadvance]" type="radio" value="1"<?php if ($this->_tpl_vars['config']['regadvance'] == 1): ?> checked="checked"<?php endif; ?> />
		<?php echo $this->_tpl_vars['lang']['yes']; ?>
¡¡
		  <input name="settingnew[regadvance]" type="radio" value="0"<?php if ($this->_tpl_vars['config']['regadvance'] == 0): ?> checked="checked"<?php endif; ?> />
		<?php echo $this->_tpl_vars['lang']['no']; ?>
			</td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_40']; ?>
</td>
	  </tr>
	<tr>
	  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_register_verify']; ?>
:</td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td>
		<select name="settingnew[regverify]" style="width:300px;">
			<option value="0"<?php if ($this->_tpl_vars['config']['regverify'] == 0): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['setting_register_verify_0']; ?>
</option>
			<option value="1"<?php if ($this->_tpl_vars['config']['regverify'] == 1): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['setting_register_verify_1']; ?>
</option>
			<option value="2"<?php if ($this->_tpl_vars['config']['regverify'] == 2): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['setting_register_verify_2']; ?>
</option>
		</select>
	  </td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_41']; ?>
</td>
	  </tr>
	<tr>
	  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_register_wellcomemsg']; ?>
£º</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td>
		<ul>
			<li><input name="settingnew[wellcomemsg]" type="radio" value="0"<?php if ($this->_tpl_vars['config']['wellcomemsg'] == 0): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['setting_register_wellcomemsg_0']; ?>
</li>
			<li><input name="settingnew[wellcomemsg]" type="radio" value="1"<?php if ($this->_tpl_vars['config']['wellcomemsg'] == 1): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['setting_register_wellcomemsg_1']; ?>
</li>
			<li><input name="settingnew[wellcomemsg]" type="radio" value="2"<?php if ($this->_tpl_vars['config']['wellcomemsg'] == 2): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['setting_register_wellcomemsg_2']; ?>
</li>
		</ul>		 	
		</td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_42']; ?>
</td>
	  </tr>
	<tr>
	  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_register_wellcomemsgtitle']; ?>
£º</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td><input type="text" name="settingnew[wellcomemsgtitle]" class="textinput txt" value="<?php echo $this->_tpl_vars['config']['wellcomemsgtitle']; ?>
" /></td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_43']; ?>
</td>
	  </tr>
	<tr>
	  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_register_wellcomemsgtxt']; ?>
£º</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td><textarea name="settingnew[wellcomemsgtxt]" style="height:100px;"><?php echo $this->_tpl_vars['config']['wellcomemsgtxt']; ?>
</textarea></td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_44']; ?>
</td>
	  </tr>
	<tr>
	  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_register_sysrules']; ?>
£º</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td>
		<input name="settingnew[sysrules]" type="radio" value="1"<?php if ($this->_tpl_vars['config']['sysrules'] == 1): ?> checked="checked"<?php endif; ?> />
		<?php echo $this->_tpl_vars['lang']['yes']; ?>
¡¡
		<input name="settingnew[sysrules]" type="radio" value="0"<?php if ($this->_tpl_vars['config']['sysrules'] == 0): ?> checked="checked"<?php endif; ?> />
		<?php echo $this->_tpl_vars['lang']['no']; ?>
			
		</td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_45']; ?>
</td>
	  </tr>
	<tr>
	  <td class="bold"><?php echo $this->_tpl_vars['lang']['setting_register_sysrulestxt']; ?>
£º</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td><textarea name="settingnew[sysrulestxt]" style="height:100px;"><?php echo $this->_tpl_vars['config']['sysrulestxt']; ?>
</textarea></td>
	  <td><?php echo $this->_tpl_vars['lang']['setting_tips_46']; ?>
</td>
	  </tr>
	</table>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['operation'] == 'randcode'): ?>
	<table border="0" cellpadding="0" cellspacing="0" class="formtable">
		<tr>
		  <td width="360" class="bold"><?php echo $this->_tpl_vars['lang']['setting_randcodestatus']; ?>
£º</td>
		  <td></td>
		</tr>
		<tr>
		  <td>
			<ul>
				<li><input name="settingnew[randcodestatus][0]" type="checkbox" value="1"<?php if ($this->_tpl_vars['config']['randcodestatus']['0'] == 1): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['setting_randcodestatus_1']; ?>
</li>
				<li><input name="settingnew[randcodestatus][1]" type="checkbox" value="1"<?php if ($this->_tpl_vars['config']['randcodestatus']['1'] == 1): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['setting_randcodestatus_2']; ?>
</li>
				<li><input name="settingnew[randcodestatus][2]" type="checkbox" value="1"<?php if ($this->_tpl_vars['config']['randcodestatus']['2'] == 1): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['setting_randcodestatus_3']; ?>
</li>
				<li><input name="settingnew[randcodestatus][3]" type="checkbox" value="1"<?php if ($this->_tpl_vars['config']['randcodestatus']['3'] == 1): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['setting_randcodestatus_4']; ?>
</li>
				<li><input name="settingnew[randcodestatus][4]" type="checkbox" value="1"<?php if ($this->_tpl_vars['config']['randcodestatus']['4'] == 1): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['lang']['setting_randcodestatus_5']; ?>
</li>
			</ul>			  
		  </td>
		  <td><?php echo $this->_tpl_vars['lang']['setting_tips_47']; ?>
</td>
	  </tr>
	</table>
	<?php endif; ?>
</form>
<div class="toolbar">
	<span class="btn btn-dft" onclick="document.settings.submit()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['save_edit']; ?>
</span></span>
	<span class="btn btn-dft" onclick="window.location.reload()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
</div>
</div>