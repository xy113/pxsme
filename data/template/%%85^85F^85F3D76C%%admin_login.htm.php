<?php /* Smarty version 2.6.19, created on 2012-03-13 11:05:13
         compiled from admin_login.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['lang']['cp_home']; ?>
</title>
<link href="templates/admincp/images/style.css" rel="stylesheet" type="text/css">
<script src="static/js/jquery.js" type="text/javascript"></script>
<script src="static/js/common.js" type="text/javascript"></script>
<?php echo '<script type="text/javascript">
function checkForm(theForm){
    if(theForm.admin.value && theForm.password.value && theForm.randcode.value){
	    return true;
	}else{
	    return false;
	}
}
</script>'; ?>

</head>
<body>
<div class="loginbox">
	<form action="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=login" method="post" name="login" target="_top" id="login" onsubmit="return checkForm(this);">
    <div class="left">
	     <div><img src="templates/admincp/images/ctr.gif" border="0" width="216" height="42" /></div>
		 <p><?php echo $this->_tpl_vars['lang']['login_announce']; ?>
</p>
	</div>
	<ul class="right">
	    <li><span class="lable"><?php echo $this->_tpl_vars['lang']['login_username']; ?>
</span><input name="admin" type="text" class="linput"/></li>
		<li><span class="lable"><?php echo $this->_tpl_vars['lang']['login_password']; ?>
</span><input name="password" type="password" class="linput"/></li>
		<li><span class="lable"><?php echo $this->_tpl_vars['lang']['login_randcode']; ?>
</span><input name="randcode" type="text" class="linput" style="width:65px; float:left;" maxlength="4" />
		 <img src="./source/include/randcode.php" onclick="this.src='./source/include/randcode.php?'+Math.random()" style="float:left; margin-left:4px;"/>
		</li>
		<li class="li2">
		<input name="b1" type="submit" value="<?php echo $this->_tpl_vars['lang']['login_btnlogin']; ?>
" class="button" style="width:100px; margin-left:44px;" tabindex="0" />
		</li>
	</ul>
	</form>
</div>
<p style="margin-top:100px; text-align:center; font:400 12px Arial; color:#666;"><?php echo $this->_tpl_vars['lang']['copyright']; ?>
</p>
</body>
</html>