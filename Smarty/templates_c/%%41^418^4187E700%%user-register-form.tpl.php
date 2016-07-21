<?php /* Smarty version 2.6.20, created on 2016-07-18 11:06:34
         compiled from user-register-form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'echo_securimage_sid', 'user-register-form.tpl', 44, false),)), $this); ?>
<?php if ($this->_tpl_vars['allow_registration'] == '1'): ?>
<form class="" id="register-form" name="register-form" method="post" action="<?php echo @_URL; ?>
/register.php">
		<div class="form-group">
			<label for="name"><?php echo $this->_tpl_vars['lang']['your_name']; ?>
</label>
			<div class="controls"><input type="text" class="form-control" name="name" value="<?php echo $this->_tpl_vars['inputs']['name']; ?>
"></div>
		</div>
		<div class="form-group">
			<label for="username"><?php echo $this->_tpl_vars['lang']['username']; ?>
</label>
			<div class="controls"><input type="text" class="form-control" name="username" value="<?php echo $this->_tpl_vars['inputs']['username']; ?>
"></div>
		</div>
		<div class="form-group">
			<label for="email"><?php echo $this->_tpl_vars['lang']['your_email']; ?>
</label>
			<div class="controls"><input type="email" class="form-control" id="email" name="email" value="<?php echo $this->_tpl_vars['inputs']['email']; ?>
" autocomplete="off"></div>
		</div>
		<div class="form-group">
			<label for="pass"><?php echo $this->_tpl_vars['lang']['password']; ?>
</label>
			<div class="controls"><input type="password" class="form-control" id="pass" name="pass" maxlength="32" autocomplete="off"></div>
		</div>
		<div class="form-group">
			<label for="confirm_pass"><?php echo $this->_tpl_vars['lang']['password_retype']; ?>
</label>
			<div class="controls">
			<input type="password" class="form-control" id="confirm_pass" name="confirm_pass" maxlength="32">
			</div>
		</div>
		<div class="form-group">
			<label for="country"><?php echo $this->_tpl_vars['lang']['country']; ?>
</label>
			<div class="controls">
		<?php if ($this->_tpl_vars['show_countries_list']): ?>
		<select name="country" class="form-control">
		<option value="-1"><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
			<?php $_from = $this->_tpl_vars['countries_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
			<option value="<?php echo $this->_tpl_vars['k']; ?>
" <?php if ($this->_tpl_vars['inputs']['country'] == $this->_tpl_vars['k']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['v']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
		</select>
		<?php endif; ?>
		<input type="text" name="website" class="hide-me botmenot" maxlength="32">
			</div>
		</div>
<?php if (isset ( $this->_tpl_vars['mm_register_fields_inject'] )): ?><?php echo $this->_tpl_vars['mm_register_fields_inject']; ?>
<?php endif; ?>
	<?php if ($this->_tpl_vars['spambot_prevention'] == 'securimage'): ?>
		<div class="form-group">
		<div class="controls">
					<input type="text" name="imagetext" class="form-control" autocomplete="off" placeholder="<?php echo $this->_tpl_vars['lang']['enter_captcha']; ?>
">
					<img src="<?php echo @_URL; ?>
/include/securimage_show.php?sid=<?php echo smarty_echo_securimage_sid(array(), $this);?>
" id="captcha_image" align="absmiddle" alt="" class="img-rounded">
					<button class="btn btn-link btn-refresh" onclick="document.getElementById('captcha_image').src = '<?php echo @_URL; ?>
/include/securimage_show.php?sid=' + Math.random(); return false"><i class="fa fa-refresh"></i></button>
			</div>
		</div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['spambot_prevention'] == 'recaptcha'): ?>
	<div class="form-group">
		<div class="controls">
			<?php echo $this->_tpl_vars['recaptcha_html']; ?>

		</div>
	</div>
	<?php endif; ?>

	<div class="checkbox">
		<label>
		<input type="checkbox" id="agree" name="agree" <?php if ($this->_tpl_vars['inputs']['agree'] == 'on'): ?>checked="checked"<?php endif; ?>> <span class="help-inline"><?php echo $this->_tpl_vars['lang']['i_agree_with']; ?>
 <a data-toggle="modal" href="#modal-terms" id="element" ><?php echo $this->_tpl_vars['lang']['terms_of_agreement']; ?>
</a></span>
		</label>
	</div>
	<div class="form-group">
		<input type="hidden" class="form-control" name="gender" value="male">
		<button type="submit" name="Register" value="<?php echo $this->_tpl_vars['lang']['register']; ?>
" class="btn btn-success" data-loading-text="<?php echo $this->_tpl_vars['lang']['register']; ?>
"><?php echo $this->_tpl_vars['lang']['register']; ?>
</button>
	</div>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modal-info-terms.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php else: ?>
<?php echo $this->_tpl_vars['lang']['registration_closed']; ?>

<?php endif; ?>