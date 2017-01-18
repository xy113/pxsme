// JavaScript Document
function checkLogin(){
	if(!$("#login_username").val()){
		alert("用户名不能留空。");
		return false;
	}
	if(!$("#login_password").val()){
		alert("密码不能留空。");
		return false;
	}
	return true;
}
function checkReg(){
	if(!$("#member_username").val()){
		alert("用户名不能为空。");
		return false;
	}
	var password = $("#member_password").val();
	if(password.length<6){
		alert("密码输入错误，至少6位。");
		return false;
	}
	if(!($("#member_password").val()==$("#password2").val())){
		alert("密码输入不一致，请重新输入。");
		return false;
	}
	if(!$("#member_email").val()){
		alert("电子邮件不能留空。");
		return false;
	}
	return true;
}
function checkName(username){
	if(!username) return false;
	$.get("member.php?inajax=1&action=register&do=checkname&username="+username,function(result){
		if(parseInt(result)==0){
			$("#msg").html('<font color="#003300">此用户名可用</font>');
		}else{
			$("#msg").html('<font color="#FF0000">此用户名已被人使用</font>');
		}
	})
}
function checkPass(){
	if(!$("#password").val()){
		alert("原密码不能为空。");
		return false;
	}
	var password = $("#passwordnew").val();
	if(password.length<6){
		alert("新密码输入错误，至少6位。");
		return false;
	}
	if(password != $("#passwordnew1").val()){
		alert("密码输入不一致，请重新输入。");
		return false;
	}
	return true;
}