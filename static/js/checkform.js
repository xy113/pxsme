// JavaScript Document
function checkLogin(){
	if(!$("#login_username").val()){
		alert("�û����������ա�");
		return false;
	}
	if(!$("#login_password").val()){
		alert("���벻�����ա�");
		return false;
	}
	return true;
}
function checkReg(){
	if(!$("#member_username").val()){
		alert("�û�������Ϊ�ա�");
		return false;
	}
	var password = $("#member_password").val();
	if(password.length<6){
		alert("���������������6λ��");
		return false;
	}
	if(!($("#member_password").val()==$("#password2").val())){
		alert("�������벻һ�£����������롣");
		return false;
	}
	if(!$("#member_email").val()){
		alert("�����ʼ��������ա�");
		return false;
	}
	return true;
}
function checkName(username){
	if(!username) return false;
	$.get("member.php?inajax=1&action=register&do=checkname&username="+username,function(result){
		if(parseInt(result)==0){
			$("#msg").html('<font color="#003300">���û�������</font>');
		}else{
			$("#msg").html('<font color="#FF0000">���û����ѱ���ʹ��</font>');
		}
	})
}
function checkPass(){
	if(!$("#password").val()){
		alert("ԭ���벻��Ϊ�ա�");
		return false;
	}
	var password = $("#passwordnew").val();
	if(password.length<6){
		alert("�����������������6λ��");
		return false;
	}
	if(password != $("#passwordnew1").val()){
		alert("�������벻һ�£����������롣");
		return false;
	}
	return true;
}