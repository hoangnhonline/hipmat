<?php /* Smarty version 2.6.20, created on 2016-07-18 11:06:26
         compiled from modal-video-report.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'echo_securimage_sid', 'modal-video-report.tpl', 33, false),)), $this); ?>
<!-- Modal -->
<div class="modal" id="modal-video-report" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<form name="reportvideo" action="" method="POST">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><?php echo $this->_tpl_vars['lang']['report_video']; ?>
</h4>
			</div>
			<div class="modal-body">
				<div id="report-confirmation" class="hide-me alert alert-info"><button type="button" class="close" data-dismiss="alert">&times;</button></div>
					<input type="hidden" id="name" name="name" class="form-control" value="<?php if ($this->_tpl_vars['logged_in']): ?><?php echo $this->_tpl_vars['s_name']; ?>
<?php endif; ?>">
					<input type="hidden" id="email" name="email" class="form-control" value="<?php if ($this->_tpl_vars['logged_in']): ?><?php echo $this->_tpl_vars['s_email']; ?>
<?php endif; ?>">

				<div class="form-group">
						<label for="exampleInputEmail1">Specify Reason</label>
						<select name="reason" class="form-control">
						<option value="<?php echo $this->_tpl_vars['lang']['report_form1']; ?>
" selected="selected"><?php echo $this->_tpl_vars['lang']['report_form1']; ?>
</option>
						<option value="<?php echo $this->_tpl_vars['lang']['report_form4']; ?>
"><?php echo $this->_tpl_vars['lang']['report_form4']; ?>
</option>
						<option value="<?php echo $this->_tpl_vars['lang']['report_form5']; ?>
"><?php echo $this->_tpl_vars['lang']['report_form5']; ?>
</option>
						<option value="<?php echo $this->_tpl_vars['lang']['report_form6']; ?>
"><?php echo $this->_tpl_vars['lang']['report_form6']; ?>
</option>
						<option value="<?php echo $this->_tpl_vars['lang']['report_form7']; ?>
"><?php echo $this->_tpl_vars['lang']['report_form7']; ?>
</option>
						</select>
				</div>
					
				<?php if (! $this->_tpl_vars['logged_in']): ?>
				<div class="form-group">
					<div class="row">
						<div class="col-xs-6 col-sm-5 col-md-2">
							<input type="text" name="imagetext" class="form-control" autocomplete="off" placeholder="<?php echo $this->_tpl_vars['lang']['confirm_comment']; ?>
">
						</div>
						<div class="col-xs-6 col-sm-7 col-md-10">
							<img src="<?php echo @_URL; ?>
/include/securimage_show.php?sid=<?php echo smarty_echo_securimage_sid(array(), $this);?>
" id="securimage-report" alt="" width="100" height="35">
							<button class="btn btn-sm btn-link btn-refresh" onclick="document.getElementById('securimage-report').src = '<?php echo @_URL; ?>
/include/securimage_show.php?sid=' + Math.random(); return false;"><i class="fa fa-refresh"></i> </button>
						</div>
					</div>
				</div>
				<?php endif; ?>
					
				<input type="hidden" name="p" value="detail">
				<input type="hidden" name="do" value="report">
				<input type="hidden" name="vid" value="<?php echo $this->_tpl_vars['video_data']['uniq_id']; ?>
">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-link" data-dismiss="modal"><?php echo $this->_tpl_vars['lang']['submit_cancel']; ?>
</button>
				<button type="submit" name="Submit" class="btn btn-sm btn-danger" value="<?php echo $this->_tpl_vars['lang']['submit_send']; ?>
"><?php echo $this->_tpl_vars['lang']['report_video']; ?>
</button>
			</div>
		</div>
		</form>
	</div>
</div>