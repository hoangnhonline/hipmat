<?php /* Smarty version 2.6.20, created on 2016-07-18 11:06:19
         compiled from modal-user-register.tpl */ ?>
<div class="modal" id="modal-register-form">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $this->_tpl_vars['lang']['close']; ?>
</span></button>
				<h4 class="modal-title"><?php echo $this->_tpl_vars['lang']['create_account']; ?>
</h4>
			</div>
			<div class="modal-body">
				<?php if ($this->_tpl_vars['allow_facebook_login'] || $this->_tpl_vars['allow_twitter_login']): ?>
				<div class="pm-social-accounts">
					<label><?php echo $this->_tpl_vars['lang']['register_with_social']; ?>
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
				<a href="<?php echo @_URL; ?>
/register.<?php echo @_FEXT; ?>
" class="btn btn-info btn-block"><?php echo $this->_tpl_vars['lang']['register_with_email']; ?>
</a>
			</div>
		</div>
	</div>
</div>