<?php
class Member{
	var $uid = 0;
	var $username = '';
	var $logined = FALSE;
	var $useraccess = array();
	function __construct(){
		$this->Memebr();
	}
	function Memebr(){
		global $_XCOOKIE,$_SESSION,$db;
		if ($_SESSION['member']){
			$this->uid = $_SESSION['member']['uid'];
			$this->username = $_SESSION['member']['username'];
			$this->useraccess = $_SESSION['member'];
			$this->logined = true;
		}elseif (isset($_XCOOKIE['uid']) && isset($_XCOOKIE['username']) && isset($_COOKIE['password'])){
			$userdata = $db->GetOne("SELECT m.*,g.groupname FROM sdw_members m LEFT JOIN sdw_usergroups g ON g.groupid=m.groupid WHERE m.uid=$_XCOOKIE[uid]");
			if (($userdata['username'] == $_XCOOKIE['username']) && ($userdata['password'] == $_XCOOKIE['password'])){
				$_SESSION['member'] = $userdata;
				$this->uid = $userdata['uid'];
				$this->username = $userdata['username'];
				$this->useraccess = $userdata;
				$this->logined = TRUE;
			}else {
				$_SESSION['member'] = NULL;
				$this->useraccess = array();
				$this->logined = FALSE;
			}
		}
	}
	function Login($username,$password,$randcode,$forward=''){
		global $db,$config,$timestamp,$ipaddr;
		!$forward && $forward = $_SERVER['HTTP_REFERER'];
		$forward == 'login' && $forward = 'index.php';
		if ($randcode && !($randcode == $_SESSION['randcode'])){
			$links[0] = array('text'=>'返回上一页','href'=>$_SERVER['HTTP_REFERER']);
			message('验证码错误，请重新登录。',1,$links);
		}
		$userdata = $db->GetOne("SELECT m.*,g.groupname FROM sdw_members m LEFT JOIN sdw_usergroups g ON g.groupid=m.groupid WHERE m.username='$username' LIMIT 0,1");
		if (!$userdata){
			$links[0] = array('text'=>'返回上一页','href'=>$_SERVER['HTTP_REFERER']);
			message('您输入的用户名不存在，请重新输入。',1,$links);
		}elseif (!(md5(md5($password))==$userdata['password'])){
			$links[0] = array('text'=>'返回上一页','href'=>$_SERVER['HTTP_REFERER']);
			message('您输入的密码不正确，请重新输入。',1,$links);
		}else {
			xsetcookie('uid',$userdata['uid']);
			xsetcookie('username',$userdata['username']);
			xsetcookie('password',$userdata['password']);
			$_SESSION['member'] = $userdata;
			$this->Memebr();
			$db->query("UPDATE sdw_members SET lastlogin='$timestamp',lastip='$ipaddr',logintimes=logintimes+1 WHERE uid=$this->uid");
			$links[0] = array('text'=>'返回上一页','href'=>$forward);
			$links[1] = array('text'=>'网站首页','href'=>'index.php');
			message("欢迎回来：$userdata[username]。",0,$links);
		}
	}
	function Logout($forward=''){
		!$forward && $forward = $_SERVER['HTTP_REFERER'];
		xsetcookie('uid','');
		xsetcookie('username','');
		xsetcookie('password','');
		$_SESSION['member'] = NULL;
		header('location:'.$forward);
	}
}
?>