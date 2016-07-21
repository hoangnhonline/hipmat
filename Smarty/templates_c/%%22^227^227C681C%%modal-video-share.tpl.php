<?php /* Smarty version 2.6.20, created on 2016-07-18 11:06:26
         compiled from modal-video-share.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'echo_securimage_sid', 'modal-video-share.tpl', 59, false),)), $this); ?>
<!-- Modal -->
<div class="modal" id="modal-video-share" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title" id="myModalLabel"><?php echo $this->_tpl_vars['lang']['_share']; ?>
</h4>
	  </div>
	  <div class="modal-body">

		<div class="row pm-modal-share">
			<div class="col-md-12 hidden-xs hidden-sm">
				<h5><?php echo $this->_tpl_vars['meta_title']; ?>
</h5>
				<div id="share-confirmation" class="hide-me alert alert-info"><button type="button" class="close" data-dismiss="alert">&times;</button></div>
			</div>
			<div class="col-md-3 hidden-xs hidden-sm">
				<div class="pm-modal-video-info">
					<img src="<?php echo $this->_tpl_vars['facebook_image_src']; ?>
" width="480" height="360" class="img-responsive" />
					<?php if ($this->_tpl_vars['meta_description']): ?>
						<p><?php echo $this->_tpl_vars['meta_description']; ?>
</p>
					<?php endif; ?>
				</div>
			</div>

			<div class="col-md-9">
				<h6><?php echo $this->_tpl_vars['lang']['share_on_social']; ?>
</h6>
				<a href="https://www.facebook.com/sharer.php?u=<?php echo $this->_tpl_vars['facebook_like_href']; ?>
&amp;t=<?php echo $this->_tpl_vars['facebook_like_title']; ?>
" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" rel="tooltip" title="Share on FaceBook"><i class="pm-vc-sprite facebook-icon"></i></a>
				<a href="https://twitter.com/home?status=Watching%20<?php echo $this->_tpl_vars['facebook_like_title']; ?>
%20on%20<?php echo $this->_tpl_vars['facebook_like_href']; ?>
" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" rel="tooltip" title="Share on Twitter"><i class="pm-vc-sprite twitter-icon"></i></a>
				<a href="https://plus.google.com/share?url=<?php echo $this->_tpl_vars['facebook_like_href']; ?>
" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" rel="tooltip" title="Share on Google+"><i class="pm-vc-sprite google-icon"></i></a>

				<h6><?php echo $this->_tpl_vars['lang']['_embed']; ?>
</h6>
				<form>
				<div class="form-group">
					<div class="input-group"><span class="input-group-addon" onClick="SelectAll('pm-share-link');"><i class="fa fa-link"></i></span><input name="pm-share-link" id="pm-share-link" type="text" value="<?php echo $this->_tpl_vars['video_data']['video_href']; ?>
" class="form-control" onClick="SelectAll('pm-share-link');"></div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon" onClick="SelectAll('pm-embed-code');"><i class="fa fa-code"></i></span>
						<textarea name="pm-embed-code" id="pm-embed-code" rows="1" class="form-control" onClick="SelectAll('pm-embed-code');"><?php echo $this->_tpl_vars['embedcode_to_share']; ?>
</textarea>
					</div>
				</div>
				</form>

				<form name="sharetofriend" action="" method="POST" class="">
				<h6>Share via Email</h6>
					<div class="form-group">
						<input type="text" id="name" name="name" class="form-control" value="<?php echo $this->_tpl_vars['s_name']; ?>
" placeholder="<?php echo $this->_tpl_vars['lang']['your_name']; ?>
" size="40">
					</div>
					<div class="form-group">
						<input type="text" id="email" name="email" class="form-control" placeholder="<?php echo $this->_tpl_vars['lang']['friends_email']; ?>
" size="50">
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
" id="securimage-share" alt="" width="100" height="35">
									<button class="btn btn-sm btn-link btn-refresh" onclick="document.getElementById('securimage-share').src = '<?php echo @_URL; ?>
/include/securimage_show.php?sid=' + Math.random(); return false;">
									<i class="fa fa-refresh"></i>
									</button>
								</div>
							</div>
						</div>
						<?php endif; ?>
						<input type="hidden" name="p" value="detail">
						<input type="hidden" name="do" value="share">
						<input type="hidden" name="vid" value="<?php echo $this->_tpl_vars['video_data']['uniq_id']; ?>
">
					<div class="form-group">
						<button type="submit" name="Submit" class="btn btn-sm btn-success"><?php echo $this->_tpl_vars['lang']['submit_send']; ?>
</button>
					</div>
				</form>
			</div>
		</div>
	  </div>
	</div>
  </div>
</div>