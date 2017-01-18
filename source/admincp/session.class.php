<?php
/**
 * ============================================================================
 * 版权所有 (C) 2010-2099 WWW.SONGDEWEI.COM All Rights Reserved。
 * 网站地址: http://www.songdewei.com
 * ============================================================================
 * @author:     David Song<songdewei@163.com>
 * @version:    v1.0
 * ---------------------------------------------
 * $Date: 2012-02-06
 * $ID: session.class.php
**/
if (!defined('IN_XSCMS'))die('Access Denied!');
class Admin{
	var $adminid = 0;
	var $isfounder = false;
	var $cpaccess = 0;
	var $admincp = array();
	function __construct(){
		$this->Admin();
	}
	function Admin(){
		global $_SESSION;
		if (!isset($_SESSION['admincp'])){
			$this->cpaccess = 0;
		}else {
			$this->admincp = $_SESSION['admincp'];
			if ((isset($this->admincp['adminid']) && $this->admincp['adminid']<1) || empty($this->admincp['admin']) || empty($this->admincp['password'])){
				$this->cpaccess = 0;
			}else {
				$this->cpaccess = 1;
				$this->adminid = $this->admincp['adminid'];
				$this->isfounder = $this->founder($this->adminid);
			}
		}
	}
	function founder($adminid){
		return in_array($adminid,explode(',',$GLOBALS['config']['admincp']['founders']));
	}
	function AdminLogin($admin,$password,$randcode){
		global $db,$LANG,$_SESSION;
		$links[0] = array('text'=>$LANG['go_back'],'href'=>$_SERVER['HTTP_REFERER']);
		if ($randcode && ($randcode != $_SESSION['randcode'])){
			showmsg('login_error_3',1,$links);
		}
		$admindata = $db->GetOne("SELECT a.*,g.cpgroupname,g.cpgroupperms FROM sdw_admins a LEFT JOIN sdw_admingroups g ON g.cpgroupid=a.cpgroupid WHERE a.admin='$admin'");
		if (empty($admindata)){
			showmsg('login_error_4',1,$links);
		}elseif (!(md5(md5($password).md5($admindata['random']))==$admindata['password'])){
			showmsg('login_error_5',1,$links);
		}else {
			$_SESSION['admincp'] = $admindata;
			$db->query("UPDATE sdw_admins SET lastlogin='$GLOBALS[timestamp]',lastip='$GLOBALS[ipaddr]',logintimes=logintimes+1 WHERE adminid=$admindata[adminid]");
			$userdata = $db->GetOne("SELECT uid,username,password FROM sdw_members WHERE username='$admin' AND adminid=$admindata[adminid]");
			if ($userdata){
				xsetcookie('uid',$userdata['uid']);
				xsetcookie('username',$userdata['username']);
				xsetcookie('password',$userdata['password']);
				$_SESSION['admincp']['uid'] = $userdata['uid'];
			}else {
				$_SESSION['admincp']['uid'] = 0;
			}
			$result = $db->GetOne("SELECT COUNT(*) FROM sdw_usermails WHERE uid=".$_SESSION['admincp']['uid']);
			$_SESSION['admincp']['newmails'] = $result['COUNT(*)'];
			$this->Admin();
			$this->cplog($LANG['login_succed']);
			header('location:./'.ADMINSCRIPT);
		}
	}
	function AdminLogout(){
		$_SESSION['admincp'] = NULL;
		header('location:./'.ADMINSCRIPT);
	}
	function checkadminpriv($allow){
		if ($this->isfounder){
			return true;
		}else {
			$perms = explode(',',$_SESSION['admincp']['cpgroupperms']);
			if (!in_array($allow,$perms)){
				showmsg('priv_error',1);
			}else {
				return TRUE;
			}
		}
	}
	function cplog($body=''){
		$GLOBALS['db']->query("INSERT INTO sdw_adminlog(adminid,body,dateline,adminip)VALUES('$this->adminid','$body','$GLOBALS[timestamp]','$GLOBALS[ipaddr]')");
	}
}
?>