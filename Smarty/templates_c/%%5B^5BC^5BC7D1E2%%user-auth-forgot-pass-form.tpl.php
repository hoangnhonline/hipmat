<?php /* Smarty version 2.6.20, created on 2016-07-18 11:06:34
         compiled from user-auth-forgot-pass-form.tpl */ ?>
<form name="forgot-pass" id="reset-form" method="post" action="<?php echo @_URL; ?>
/login.php?do=forgot_pass">
    <div class="form-group">
      <label><?php echo $this->_tpl_vars['lang']['your_username_or_email']; ?>
</label>
      <div class="controls"><input type="text" class="form-control" name="username_email" placeholder="" value="<?php echo $this->_tpl_vars['inputs']['username_email']; ?>
"></div>
    </div>
    <div class="form-group">
    <button type="submit" name="Send" value="<?php echo $this->_tpl_vars['lang']['submit_send']; ?>
" class="btn btn-success btn-with-loader" data-loading-text="<?php echo $this->_tpl_vars['lang']['submit_send']; ?>
"><?php echo $this->_tpl_vars['lang']['submit_send']; ?>
</button>
    </div>
</form>