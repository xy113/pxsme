<?php /* Smarty version 2.6.19, created on 2012-02-27 08:53:09
         compiled from comment.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'comment.htm', 4, false),)), $this); ?>
		<div class="article-comment">
			<?php if ($this->_tpl_vars['messages']): ?>
			<?php $_from = $this->_tpl_vars['messages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['msg'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['msg']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['mm']):
        $this->_foreach['msg']['iteration']++;
?>
			<div<?php if (($this->_foreach['msg']['iteration'] <= 1)): ?> style="border-top:none"<?php endif; ?>><span>时间: <?php echo ((is_array($_tmp=$this->_tpl_vars['mm']['dateline'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M')); ?>
<?php if ($this->_tpl_vars['my']['adminid'] > 0): ?>　<a href="javascript:" onclick="DropComment(<?php echo $this->_tpl_vars['articleid']; ?>
,<?php echo $this->_tpl_vars['mm']['id']; ?>
)">删除</a><?php endif; ?></span><strong>网友: <?php echo $this->_tpl_vars['mm']['username']; ?>
</strong></div>
			<p><?php echo $this->_tpl_vars['mm']['message']; ?>
</p>
			<?php endforeach; endif; unset($_from); ?>
			<?php else: ?>
			<p>暂时还没有评论。</p>
			<?php endif; ?>
			<div class="pagediv"><?php echo $this->_tpl_vars['pagelink']; ?>
</div>
		</div> 
		<div class="form">
			<form method="post" action="member.php?action=login&do=login" onsubmit="return checkLogin()">
			用户名:<input type="text" name="username" id="login_username" class="txt"<?php if ($this->_tpl_vars['logined']): ?> value="<?php echo $this->_tpl_vars['my']['username']; ?>
"<?php endif; ?> /> 
			密码:<input type="password" name="password" id="login_password" class="txt"<?php if ($this->_tpl_vars['logined']): ?> value="password"<?php endif; ?> /> 
			<?php if ($this->_tpl_vars['logined']): ?>
			<a href="member.php?action=login&do=logout">退出登录</a> 
			<?php else: ?>
			<input type="submit" class="button" value="登录" /> 
			<input type="button" class="button" value="注册" onclick="window.location='member.php?action=register'" /> 
			<?php endif; ?>
			<input type="button" class="button" value="发评论" onclick="PostComment(<?php echo $this->_tpl_vars['articleid']; ?>
)"<?php if (! $this->_tpl_vars['logined']): ?> disabled="disabled"<?php endif; ?> />
			<textarea name="message" id="message"<?php if (! $this->_tpl_vars['logined']): ?> readonly="readonly"<?php endif; ?>><?php if (! $this->_tpl_vars['logined']): ?>请先登录才能发表评论。<?php endif; ?></textarea>
			</form>
			<p>* 网友评论仅供网友发表个人看法，并不表明中小企业信息网同意其观点或证实其描述！</p>
		</div>