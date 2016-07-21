<?php /* Smarty version 2.6.20, created on 2016-07-18 11:06:19
         compiled from user-auth-login-form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'user-auth-login-form.tpl', 11, false),)), $this); ?>
<form name="login_form" id="login-form" method="post" action="<?php echo @_URL; ?>
/login.php">
	<div class="form-group">
		<label for="username"><?php echo $this->_tpl_vars['lang']['your_username_or_email']; ?>
</label>
		<input type="text" class="form-control" name="username" value="<?php echo $this->_tpl_vars['inputs']['username']; ?>
" placeholder="<?php echo $this->_tpl_vars['lang']['your_username_or_email']; ?>
">
	</div>
	<div class="form-group">
		<label for="pass"><?php echo $this->_tpl_vars['lang']['password']; ?>
</label>
		<input type="password" class="form-control" id="pass" name="pass" maxlength="32" autocomplete="off" placeholder="<?php echo $this->_tpl_vars['lang']['password']; ?>
">
	</div>
	<div class="form-group">
		<button type="submit" name="Login" value="<?php echo $this->_tpl_vars['lang']['login']; ?>
" class="btn btn-success btn-with-loader" data-loading-text="<?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['logging_in'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Signing in...') : smarty_modifier_default($_tmp, 'Signing in...')); ?>
"><?php echo $this->_tpl_vars['lang']['login']; ?>
</button> 
		<small><a href="<?php echo @_URL; ?>
/login.<?php echo @_FEXT; ?>
?do=forgot_pass"><?php echo $this->_tpl_vars['lang']['forgot_pass']; ?>
</a></small>
	</div>
</form>