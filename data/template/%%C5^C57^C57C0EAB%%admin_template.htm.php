<?php /* Smarty version 2.6.19, created on 2012-02-22 09:11:24
         compiled from admin_template.htm */ ?>
<?php if ($this->_tpl_vars['operation'] == 'edit'): ?>
<?php echo '<style type="text/css">
#ad { position:absolute; right:60px; top:30px; width:500px; height:66px; border:0px; margin:0px; padding:0px;}
textarea#htmlbox {margin-top:0px;padding:10px;border:1px double #666;background-color:#fafafa;height:500px;width:95%}
.ed_button {padding:2px;}
#ed_italic_canvas {font-style:italic;}
#ed_bold_canvas {font-weight:bold;}
#ed_h1_canvas {font-weight:bold;}
#ed_h2_canvas {font-weight:bold;}
#ed_h3_canvas {font-weight:bold;}
#ed_h4_canvas {font-weight:bold;}
#ed_link_canvas {color:blue;text-decoration:underline;}
#ed_toolbar_canvas {background:#ddd;padding:5px;padding-top:2px;border:2px solid #777;float:left;margin-top:5px;}
input {margin-right: 7px;border:1px solid #aaa;margin-top:5px;font-size:13px;}
.preview {float:right;font-size:12px;border:1px double #785;}
.preview h4 {font-size:14px;margin-top:0px;}
#dynamicframe { width:98%; height:520px;border:1px double #785;}
A:link {COLOR: #4B4B4B;text-decoration: none;}
A:visited {COLOR: #4B4B4B;text-decoration: none;}
A:hover {COLOR: #0E6E9E;TEXT-DECORATION: underline;}
A:active {COLOR: #000}
</style>'; ?>

<script src="static/js/quicktags.js"></script>
<div class="main-div">
<div class="pos-div">
	 <h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['tpl']['manage']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['tpl']['edit']; ?>
</h2>
</div>
<div class="toolbar">
	<span class="btn btn-dft" onclick="document.form1.submit()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><b><?php echo $this->_tpl_vars['lang']['save']; ?>
</b></span></span>
	<span class="btn btn-dft" onclick="LoadPage()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['back_list']; ?>
</span></span>
	<span class="btn btn-dft" onclick="window.location.reload()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
</div>
<form id="form1" name="form1" method="post" action="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=template&operation=save&file=<?php echo $this->_tpl_vars['file']; ?>
">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-table">
	<tr>
		<td align="center"><script type="text/javascript">edToolbar('htmlbox');</script></td>
	</tr>
	<tr>
		<td align="center"><textarea id="htmlbox" name="tmpcontent" style="width:97%; margin:0 auto; height:450px;"><?php echo $this->_tpl_vars['tmpcontent']; ?>
</textarea></td>
	</tr>
</table>
</form>
<div class="toolbar">
	<span class="btn btn-dft" onclick="document.form1.submit()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><b><?php echo $this->_tpl_vars['lang']['save']; ?>
</b></span></span>
	<span class="btn btn-dft" onclick="LoadPage('curpath=<?php echo $_GET['curpath']; ?>
')" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['back_list']; ?>
</span></span>
	<span class="btn btn-dft" onclick="window.location.reload()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
</div>
</div>
<?php elseif ($this->_tpl_vars['operation'] == 'select'): ?>
<div class="main-div">
<div class="pos-div2"><h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['tpl']['manage']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['tpl']['select']; ?>
</h2></div>
<div class="blank"></div>
<h2 style="padding-left:10px;"><?php echo $this->_tpl_vars['lang']['tpl']['current']; ?>
</h2>
<div class="tmp-box">
   <img src="<?php echo $this->_tpl_vars['curtmp']; ?>
" width="160" height="120" border="0" />
   <div class="tmp-name"><b><?php echo $this->_tpl_vars['config']['template']; ?>
</b></div>
</div>
<div class="blank" style="border-bottom:1px #CCCCCC solid;"></div>
<div class="blank"></div>
<h2 style="padding-left:10px;"><?php echo $this->_tpl_vars['lang']['tpl']['list']; ?>
</h2>
<?php $_from = $this->_tpl_vars['templets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tmp']):
?>
<div class="tmp-box">
<a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=template&operation=done&tmp=<?php echo $this->_tpl_vars['tmp']['name']; ?>
"><img src="<?php echo $this->_tpl_vars['tmp']['img']; ?>
" title="<?php echo $this->_tpl_vars['lang']['click_choose']; ?>
" width="160" height="120" border="0"/></a>
<div class="tmp-name"><?php echo $this->_tpl_vars['tmp']['name']; ?>
</div>
</div>
<?php endforeach; endif; unset($_from); ?>
<div class="blank"></div>
</div>
<div class="bottom-line"></div>
<?php else: ?>
<div class="main-div">
<div class="pos-div">
	 <h2><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['tpl']['manage']; ?>
 &raquo; <?php echo $this->_tpl_vars['lang']['tpl']['list']; ?>
</h2>
</div>
  <div class="toolbar">
	<span class="btn btn-dft" onclick="history.go(-1)" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['go_back']; ?>
</span></span>
	<span class="btn btn-dft" onclick="window.location.reload()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
  </div>
  <table border="0" cellspacing="0" cellpadding="0" class="list">
    <tr>
      <th><?php echo $this->_tpl_vars['lang']['filename']; ?>
</td>
      <th width="140"><?php echo $this->_tpl_vars['lang']['filesize']; ?>
</th>
	  <th width="140" class="last"><?php echo $this->_tpl_vars['lang']['filetime']; ?>
</th>
    </tr>
	<?php if ($this->_tpl_vars['folderup']): ?>
    <tr onmouseover="this.className='active'" onmouseout="this.className=''">
      <td> <img src="<?php echo $this->_tpl_vars['folderup']['img']; ?>
" border="0" align="absmiddle" /> <a href="<?php echo $this->_tpl_vars['folderup']['folderlink']; ?>
"><?php echo $this->_tpl_vars['folderup']['filename']; ?>
</a></td>
      <td></td>
      <td></td>
    </tr>
	<?php endif; ?>
    <?php $_from = $this->_tpl_vars['folders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dir']):
?>
    <tr onmouseover="this.className='active'" onmouseout="this.className=''">
      <td> <img src="<?php echo $this->_tpl_vars['dir']['img']; ?>
" border="0" align="absmiddle" /> <a href="<?php echo $this->_tpl_vars['dir']['folderlink']; ?>
"><?php echo $this->_tpl_vars['dir']['filename']; ?>
</a></td>
      <td></td>
      <td></td>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
    <?php $_from = $this->_tpl_vars['filetree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>
    <tr onmouseover="this.className='active'" onmouseout="this.className=''">
      <td> <img src="<?php echo $this->_tpl_vars['file']['img']; ?>
" border="0" align="absmiddle" /> <a href="admin.php?action=template&operation=edit&curpath=<?php echo $this->_tpl_vars['curpath']; ?>
&file=<?php echo $this->_tpl_vars['file']['filepath']; ?>
"><?php echo $this->_tpl_vars['file']['filename']; ?>
</a></td>
      <td><?php echo $this->_tpl_vars['file']['filesize']; ?>
</td>
      <td><?php echo $this->_tpl_vars['file']['filetime']; ?>
</td>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
  </table>
  <div class="toolbar">
	<span class="btn btn-dft" onclick="history.go(-1)" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['go_back']; ?>
</span></span>
	<span class="btn btn-dft" onclick="window.location.reload()" onmouseover="this.className='btn btn-hover'" onmouseup="this.className='btn btn-hover'" onmousedown="this.className='btn btn-active'" onmouseout="this.className='btn btn-dft'" tabindex="0"><span><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</span></span>
  </div>
</div>
<?php endif; ?>