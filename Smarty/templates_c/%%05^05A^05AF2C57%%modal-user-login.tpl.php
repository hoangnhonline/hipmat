<?php /* Smarty version 2.6.20, created on 2016-07-18 11:06:19
         compiled from modal-user-login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'modal-user-login.tpl', 6, false),)), $this); ?>
<div class="modal" id="modal-login-form">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $this->_tpl_vars['lang']['close']; ?>
</span></button>
				<h4 class="modal-title"><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['sign_in'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Sign in') : smarty_modifier_default($_tmp, 'Sign in')); ?>
</h4>
			</div>
			<div class="modal-body">
				<?php if ($this->_tpl_vars['allow_facebook_login'] || $this->_tpl_vars['allow_twitter_login']): ?>
				<div class="pm-social-accounts">
					<label><?php echo $this->_tpl_vars['lang']['login_with_social']; ?>
</label>
					<?php if ($this->_tpl_vars['allow_facebook_login']): ?>
					<a href="<?php echo @_URL; ?>
/login.php?do=facebook" class="btn btn-facebook" rel="nofollow"><i class="fa fa-facebook-square"></i>Facebook</a>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['allow_twitter_login']): ?>
					<a href="<?php echo @_URL; ?>
/login.php?do=twitter" class="btn btn-twitter" rel="nofollow"><i class="fa fa-twitter"></i> Twitter</a>
					<?php endif; ?>
				</div>
				<div class="clearfix"></div>
				<hr />
				<?php endif; ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "user-auth-login-form.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
		</div>
	</div>
</div>