<?php /* Smarty version 2.6.19, created on 2012-03-13 11:06:42
         compiled from admin.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['lang']['app_name']; ?>
</title>
<link href="templates/admincp/images/index.css" rel="stylesheet" type="text/css">
<script src="static/js/jquery.js" type="text/javascript"></script>
</head>

<body>
<span id="load-div"><img src="templates/admincp/images/loading.gif" border="0" width="16" height="16" /> <?php echo $this->_tpl_vars['lang']['loading']; ?>
</span>
<table width="100%" border="0" cellspacing="0" cellpadding="0" id="mainFrame">
  <tr>
    <td colspan="2" valign="top">
	   <div id="top-div">
		  <span style="padding-right:20px; text-align:left; display:inline; float:right;">
		      <a href="javascript:document.location.reload();"><?php echo $this->_tpl_vars['lang']['refresh']; ?>
</a> |
			  <a href="http://www.songdewei.com" target="_blank"><?php echo $this->_tpl_vars['lang']['aboutus']; ?>
</a> |
			  <a href="./" target="_blank"><?php echo $this->_tpl_vars['lang']['view_homepage']; ?>
</a> |
			  <a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=announce" target="mainframes"><?php echo $this->_tpl_vars['lang']['view_announce']; ?>
</a> |
			  <a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=account" target="mainframes"><?php echo $this->_tpl_vars['lang']['view_account']; ?>
</a> |
			  <a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=clearcache" target="mainframes"><?php echo $this->_tpl_vars['lang']['clearcache']; ?>
</a> |
			  <a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=logout" target="_top"><?php echo $this->_tpl_vars['lang']['quit']; ?>
</a>
		  </span>
	      <span style="font-family:Arial;"><?php echo $this->_tpl_vars['lang']['wellcome']; ?>
，<?php if ($this->_tpl_vars['admincp']['isfounder']): ?><?php echo $this->_tpl_vars['lang']['founder']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['administrator']; ?>
<?php endif; ?>，<?php echo $this->_tpl_vars['admincp']['admin']; ?>
，<?php echo $this->_tpl_vars['lang']['yourip']; ?>
:<?php echo $this->_tpl_vars['ipaddr']; ?>
</span> 
	   </div>
	   <div id="logo"></div>
	   <div id="topmenu">
		   <ul>
		      <li><a href="javascript:;" id="header_index" onclick="toggleMenu('index','index')" class="cur"><?php echo $this->_tpl_vars['lang']['admincp_home']; ?>
</a></li>
			  <li><a href="javascript:;" hidefocus="true" id="header_settings" onclick="toggleMenu('settings','settings&operation=basic');">系统配置</a></li>
			  <li><a href="javascript:;" hidefocus="true" id="header_member" onclick="toggleMenu('member','member');">用户管理</a></li>
			  <li><a href="javascript:;" hidefocus="true" id="header_article" onclick="toggleMenu('article','article');">文章管理</a></li>
			  <!--<li><a href="javascript:;" hidefocus="true" id="header_video" onclick="toggleMenu('video','video');">视频管理</a></li>
			  <li><a href="javascript:;" hidefocus="true" id="header_image" onclick="toggleMenu('image','image');">图组管理</a></li>
			  <li><a href="javascript:;" hidefocus="true" id="header_goods" onclick="toggleMenu('goods','goods');">产品管理</a></li> -->
			  <li><a href="javascript:;" hidefocus="true" id="header_job" onclick="toggleMenu('job','job');">招聘管理</a></li>
			  <li><a href="javascript:;" hidefocus="true" id="header_template" onclick="toggleMenu('template','template');">模板管理</a></li>
			  <li><a href="javascript:;" hidefocus="true" id="header_tool" onclick="toggleMenu('tool','db');">系统工具</a></li>
			  <li><a href="javascript:;" hidefocus="true" id="header_other" onclick="toggleMenu('other','about');">其他</a></li>
		   </ul>
	   </div>
	</td>
  </tr>
  <tr>
    <td class="menutd" width="191" valign="top">
	    <div class="top-tab"></div>
	    <div class="menu-tab">
		     <a  href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=loginout" target="_top" class="check"><?php echo $this->_tpl_vars['lang']['quit']; ?>
</a>
			 <a href="./" class="compose" target="_blank"><?php echo $this->_tpl_vars['lang']['home']; ?>
</a>
		</div>
		<div id="leftmenu">
			<ul id="menu_index" style="display:block;">
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=account" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes"><?php echo $this->_tpl_vars['lang']['view_account']; ?>
</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=announce" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes"><?php echo $this->_tpl_vars['lang']['view_announce']; ?>
</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=clearcache" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes"><?php echo $this->_tpl_vars['lang']['clearcache']; ?>
</a></li>
				<li><a href="http://www.songdewei.com" hidefocus="true" onclick="SwitchMenu(this)" target="_blank"><?php echo $this->_tpl_vars['lang']['aboutus']; ?>
</a></li>
			</ul>
			<ul id="menu_settings">
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=settings&amp;operation=basic" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">基本信息配置</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=settings&amp;operation=optimization" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">系统优化配置</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=settings&amp;operation=attachment" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">附件上传设置</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=settings&amp;operation=image" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">图片附件设置</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=settings&amp;operation=register" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">用户注册设置</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=settings&amp;operation=randcode" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">验证码设置</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=nav" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">自定义导航栏</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=contactus" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">联系信息设置</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=announce" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">系统公告管理</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=cplog" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">后台日志管理</a></li>
			</ul>
			<ul id="menu_member">
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=admin&amp;operation=addnew" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">添加管理员</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=admin" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">管理员列表</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=cpgroup" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">管理员分组设置</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=member&amp;operation=addnew" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">添加会员</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=member" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">会员列表</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=usergroup" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">会员分组设置</a></li>
			</ul>
			<ul id="menu_article">
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=article&operation=addnew" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">添加文章</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=article&operation=list" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">文章列表</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=article&operation=list&authorid=1" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">我发布的文章</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=category&operation=addnew&ctype=article" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">添加文章分类</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=category&operation=list&ctype=article" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">文章分类列表</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=source&type=article" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">文章来源管理</a></li>
			</ul>
			<ul id="menu_video">
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=video&operation=addnew" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">添加视频</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=video&operation=list" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">视频列表</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=video&operation=list&authorid=1" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">我发布的视频</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=category&operation=addnew&ctype=video" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">添加视频分类</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=category&operation=list&ctype=video" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">视频分类列表</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=source&type=video" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">视频来源管理</a></li>
			</ul>
			<ul id="menu_image">
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=image&operation=addnew" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">添加图组</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=image&operation=list" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">图组列表</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=image&operation=list&authorid=1" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">我发布的图组</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=category&operation=addnew&ctype=image" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">添加图组分类</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=category&operation=list&ctype=image" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">图组分类列表</a></li>
				<li><a href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=source&type=image" hidefocus="true" onclick="SwitchMenu(this)" target="mainframes">图组来源管理</a></li>
			</ul>
			<ul id="menu_goods">
				<li><a target="mainframes" onclick="SwitchMenu(this)" hidefocus="true" href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=goods&operation=addnew">添加产品</a></li>
				<li><a target="mainframes" onclick="SwitchMenu(this)" hidefocus="true" href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=goods">产品列表</a></li>
				<li><a target="mainframes" onclick="SwitchMenu(this)" hidefocus="true" href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=goods&authorid=<?php echo $this->_tpl_vars['admincp']['adminid']; ?>
">我发布的产品</a></li>
				<li><a target="mainframes" onclick="SwitchMenu(this)" hidefocus="true" href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=category&ctype=goods&operation=addnew">添加产品分类</a></li>
				<li><a target="mainframes" onclick="SwitchMenu(this)" hidefocus="true" href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=category&ctype=goods">产品分类列表</a></li>
			</ul>
			<ul id="menu_job">
				<li><a target="mainframes" onclick="SwitchMenu(this)" hidefocus="true" href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=job&operation=addnew">发布职位</a></li>
				<li><a target="mainframes" onclick="SwitchMenu(this)" hidefocus="true" href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=job&operation=list">职位列表</a></li>
				<li><a target="mainframes" onclick="SwitchMenu(this)" hidefocus="true" href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=category&ctype=job&operation=addnew">添加职位分类</a></li>
				<li><a target="mainframes" onclick="SwitchMenu(this)" hidefocus="true" href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=category&ctype=job&operation=list">职位分类列表</a></li>
			</ul>
			<ul id="menu_template">
				<li><a target="mainframes" onclick="SwitchMenu(this)" hidefocus="true" href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=template">模板编辑</a></li>
				<li><a target="mainframes" onclick="SwitchMenu(this)" hidefocus="true" href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=template&amp;operation=select">模板选择</a></li>
			</ul>
			<ul id="menu_tool">
				<li><a target="mainframes" onclick="SwitchMenu(this)" hidefocus="true" href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=db">数据备份</a></li>
				<li><a target="mainframes" onclick="SwitchMenu(this)" hidefocus="true" href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=db&amp;operation=resume">数据恢复</a></li>
				<li><a target="mainframes" onclick="SwitchMenu(this)" hidefocus="true" href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=db&amp;operation=sql">SQL查询操作</a></li>
				<li><a target="mainframes" onclick="SwitchMenu(this)" hidefocus="true" href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=email">邮件发送工具</a></li>
			</ul>
			<ul id="menu_other">
				<li><a target="mainframes" onclick="SwitchMenu(this)" hidefocus="true" href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=about">单页文章管理</a></li>
				<li><a target="mainframes" onclick="SwitchMenu(this)" hidefocus="true" href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=slide">幻灯片图片管理</a></li>
				<li><a target="mainframes" onclick="SwitchMenu(this)" hidefocus="true" href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=friendlink">友情链接管理</a></li>
				<li><a target="mainframes" onclick="SwitchMenu(this)" hidefocus="true" href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=poll">在线投票管理</a></li>
				<li><a target="mainframes" onclick="SwitchMenu(this)" hidefocus="true" href="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=faq">常见问题管理</a></li>
			</ul>
		</div>
	</td>
    <td valign="top" width="100%">
	    <div class="top-tr"></div>
		<div style="height:100%; width:100%;">
		<iframe name="mainframes" id="mainframes" style="height:100%; width:100%; overflow:visible;" src="<?php echo $this->_tpl_vars['adminscript']; ?>
?action=index" frameborder="0"></iframe>
	    </div>
	</td>
  </tr>
</table>
<script type="text/javascript">
var ADMINSCRIPT = '<?php echo $this->_tpl_vars['adminscript']; ?>
';
<?php echo '$(function(){
	$("#mainFrame").height($(document).height());
	$("#mainframes").height($(document).height()-80);
})
var headers = new Array(\'index\',\'settings\',\'member\',\'article\',\'video\',\'image\',\'goods\',\'job\',\'template\',\'tool\',\'other\');
function SwitchMenu(obj){
	if(!obj)return;
	var li = obj.parentNode;
    var items = li.parentNode.getElementsByTagName(\'a\');
	for(i=0;i<items.length;i++){
	    if(obj==items[i]){
		    items[i].parentNode.className = \'cur\';
		}else{
		    items[i].parentNode.className = \'\';
		}
	}
}
function toggleMenu(menukey,url){
    if(!menukey || !$$(\'header_\' + menukey)) {
		return;
	}
	for(var k in top.headers) {
		if($$(\'menu_\' + headers[k])) {
			$$(\'menu_\' + headers[k]).style.display = headers[k] == menukey ? \'\' : \'none\';
		}
	}
    var hrefs = $$(\'topmenu\').getElementsByTagName(\'a\');
	for(i=0;i<hrefs.length;i++){
	    hrefs[i].className=\'\';
	}
	$$(\'header_\'+menukey).className = \'cur\';
	if(url){
		var uls = $$(\'leftmenu\').getElementsByTagName(\'ul\');
		for(j=0; j<uls.length; j++){
			uls[j].style.displey = \'none\';
		}
		if($$(\'menu_\'+menukey))$$(\'menu_\'+menukey).style.display = \'block\';
		parent.mainframes.location = ADMINSCRIPT+\'?action=\'+url;
	}
	return false;
}
function $$(a){
	return document.getElementById(a);
}
</script>'; ?>

</body>
</html>