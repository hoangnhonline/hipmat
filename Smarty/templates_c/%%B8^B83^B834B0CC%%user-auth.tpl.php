<?php /* Smarty version 2.6.20, created on 2016-07-18 11:06:34
         compiled from user-auth.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'user-auth.tpl', 7, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('p' => 'general')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<div id="content" class="content-narrow">
  <div class="container-fluid">
	<div class="row pm-user-auth">
	<div class="col-md-12">
		<nav class="tabbable" role="navigation">
			<h1><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['my_account'])) ? $this->_run_mod_handler('default', true, $_tmp, 'My Account') : smarty_modifier_default($_tmp, 'My Account')); ?>
</h1>

			<ul class="nav nav-tabs nav-underlined nav-right">
				<?php if ($this->_tpl_vars['allow_registration'] == '1'): ?>
				<li<?php if ($this->_tpl_vars['display_form'] == 'register' || $this->_tpl_vars['display_form'] == 'twitter'): ?> class="active"<?php endif; ?>>
					<?php if ($this->_tpl_vars['display_form'] == 'register'): ?>
						<a href="#pm-register" data-toggle="tab"><?php echo $this->_tpl_vars['lang']['create_account']; ?>
</a>
					<?php else: ?>
						<a href="<?php echo @_URL; ?>
/register.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['create_account']; ?>
</a>
					<?php endif; ?>
				</li>
				<?php endif; ?>
				<li<?php if ($this->_tpl_vars['display_form'] == 'login'): ?> class="active"<?php endif; ?>><a href="#pm-login" data-toggle="tab"><?php echo $this->_tpl_vars['lang']['login']; ?>
</a></li>
				
				<?php if ($this->_tpl_vars['display_form'] == 'forgot_pass'): ?>
				<li class="active"><a href="#pm-reset" data-toggle="tab"><?php echo $this->_tpl_vars['lang']['forgot_pass']; ?>
</a></li>
				<?php endif; ?>
			</ul>
		</nav><!-- #site-navigation -->

		<div class="tab-content">
			<div class="tab-pane<?php if ($this->_tpl_vars['display_form'] == 'register' || $this->_tpl_vars['display_form'] == 'twitter'): ?> active<?php endif; ?>" id="pm-register">
			<?php if ($this->_tpl_vars['display_form'] == 'register'): ?>
				<?php if ($this->_tpl_vars['success']): ?>
					<div class="alert alert-info">
						<?php echo $this->_tpl_vars['lang']['register_msg2']; ?>
 <?php echo $this->_tpl_vars['inputs']['email']; ?>
. <br /><?php echo $this->_tpl_vars['msg']; ?>
<br />
					</div>
				<?php else: ?>
					<?php if (count ( $this->_tpl_vars['errors'] ) > 0): ?>
						<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<ul class="list-unstyled">
							<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
								<li><i class="fa fa-warning"></i> <?php echo $this->_tpl_vars['v']; ?>
</li>
							<?php endforeach; endif; unset($_from); ?>
						</ul>
						</div>
					<?php endif; ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'user-register-form.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endif; ?>
			<?php elseif ($this->_tpl_vars['display_form'] == 'twitter'): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'user-register-twitter-form.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php else: ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'user-register-form.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endif; ?>
			</div>
			
			<div class="tab-pane<?php if ($this->_tpl_vars['display_form'] == 'login'): ?> active<?php endif; ?>" id="pm-login">
			<?php if ($this->_tpl_vars['display_form'] == 'login'): ?>
				<?php if ($this->_tpl_vars['success']): ?>
					
				<?php else: ?>
					<?php if (count ( $this->_tpl_vars['errors'] ) > 0): ?>
						<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<ul class="list-unstyled">
							<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
								<li><i class="fa fa-warning"></i> <?php echo $this->_tpl_vars['v']; ?>
</li>
							<?php endforeach; endif; unset($_from); ?>
						</ul>
						</div>
					<?php endif; ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'user-auth-login-form.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endif; ?>
			<?php else: ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'user-auth-login-form.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endif; ?> 
			</div>
			
			<div class="tab-pane<?php if ($this->_tpl_vars['display_form'] == 'forgot_pass'): ?> active<?php endif; ?>" id="pm-reset">
			<?php if ($this->_tpl_vars['display_form'] == 'forgot_pass'): ?>
				<?php if ($this->_tpl_vars['success']): ?>
					<div class="alert alert-info">
						<?php echo $this->_tpl_vars['lang']['fp_msg']; ?>

					</div>
				<?php else: ?>
					<?php if (count ( $this->_tpl_vars['errors'] ) > 0): ?>
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<ul class="list-unstyled">
						<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						  <li><i class="fa fa-warning"></i> <?php echo $this->_tpl_vars['v']; ?>
</li>
						<?php endforeach; endif; unset($_from); ?>
						</ul>
					</div>
					<?php endif; ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'user-auth-forgot-pass-form.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endif; ?>
			<?php else: ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'user-auth-forgot-pass-form.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endif; ?>
			</div>


			<div class="tab-pane<?php if ($this->_tpl_vars['display_form'] == 'activate_acc'): ?> active<?php endif; ?>" id="pm-reset">
			<?php if ($this->_tpl_vars['display_form'] == 'activate_acc'): ?>
				<?php if ($this->_tpl_vars['success']): ?>
					<div class="alert alert-success">
						<?php echo $this->_tpl_vars['lang']['activate_account_msg1']; ?>

					</div>
				<?php else: ?>
					<?php if (count ( $this->_tpl_vars['errors'] ) > 0): ?>
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<ul class="list-unstyled">
						<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						  <li><i class="fa fa-warning"></i> <?php echo $this->_tpl_vars['v']; ?>
</li>
						<?php endforeach; endif; unset($_from); ?>
						</ul>
					</div>
					<?php endif; ?>
				<?php endif; ?>
			<?php endif; ?>
			</div>
			
			<div class="tab-pane<?php if ($this->_tpl_vars['display_form'] == 'pwdreset'): ?> active<?php endif; ?>" id="pm-reset">
			<?php if ($this->_tpl_vars['display_form'] == 'pwdreset'): ?>
				<?php if ($this->_tpl_vars['success']): ?>
					<div class="alert alert-success">
						<?php echo $this->_tpl_vars['lang']['activate_pass_msg1']; ?>

					</div>
				<?php else: ?>
					<?php if (count ( $this->_tpl_vars['errors'] ) > 0): ?>
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<ul class="list-unstyled">
						<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						  <li><i class="fa fa-warning"></i> <?php echo $this->_tpl_vars['v']; ?>
</li>
						<?php endforeach; endif; unset($_from); ?>
						</ul>
					</div>
					<?php endif; ?>
				<?php endif; ?>
			<?php endif; ?>
			</div>
			
		</div><!-- /tab-content -->
	</div><!-- #content -->
	</div><!-- .row --> 
  </div><!-- .container -->


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array('p' => 'auth')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 