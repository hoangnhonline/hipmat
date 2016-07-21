<?php /* Smarty version 2.6.20, created on 2016-07-18 11:08:07
         compiled from channel.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'channel.tpl', 61, false),array('modifier', 'lower', 'channel.tpl', 85, false),array('modifier', 'truncate', 'channel.tpl', 108, false),array('modifier', 'sprintf', 'channel.tpl', 187, false),array('function', 'pm_number_format', 'channel.tpl', 85, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('p' => 'general')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">
	<div class="container-fluid">
	  <div class="row">
		<div class="col-md-12">

		<div class="pm-profile">
				<div class="pm-profile-header">
					<div class="pm-profile-cover">
						<?php if ($this->_tpl_vars['profile_data']['id'] == $this->_tpl_vars['s_user_id']): ?>
						<div class="pm-profile-cover-preview" data-cropit-height="200">
							<div class="cropit-image-preview">
								<?php if ($this->_tpl_vars['profile_data']['channel_cover']['max'] != ''): ?>
								<img src="<?php echo $this->_tpl_vars['profile_data']['channel_cover']['max']; ?>
" alt="" border="0" class="img-responsive img-channel-cover">
								<?php else: ?>
								<img src="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/img/bg-channel-cover.png" alt="" border="0" class="img-responsive img-cover">
								<?php endif; ?>
								<span class="pm-profile-cover-edit"><a href="#" class="btn btn-link btn-edit" id="btn-edit-cover"><i class="fa fa-pencil"></i></a></span>

								<form action="#" class="cropit-form" id="cropit-cover-form">
									<input type="file" class="cropit-image-input" id="cropit-cover-input" />
									<input type="hidden" name="image-data" class="hidden-cover-data-img" />
									<input type="hidden" name="p" value="upload" />
									<input type="hidden" name="do" value="channel-cover" />
									<button class="btn btn-default btn-cancel"><?php echo $this->_tpl_vars['lang']['submit_cancel']; ?>
</button>
									<button type="submit" class="btn btn-success"><?php echo $this->_tpl_vars['lang']['submit_save']; ?>
</button>
								</form>
							</div>
						</div>
						<?php else: ?>
							<?php if ($this->_tpl_vars['profile_data']['channel_cover']['max'] != ''): ?>
							<img src="<?php echo $this->_tpl_vars['profile_data']['channel_cover']['max']; ?>
" alt="" border="0" class="img-responsive img-channel-cover">
							<?php else: ?>
							<img src="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/img/bg-channel-cover.png" alt=""  border="0" class="img-responsive img-channel-cover">
							<?php endif; ?>
						<?php endif; ?>

						<div class="pm-profile-avatar-pic">
							<?php if ($this->_tpl_vars['profile_data']['id'] == $this->_tpl_vars['s_user_id']): ?>
							<div class="cropit-image-preview">
								<img src="<?php echo $this->_tpl_vars['profile_data']['avatar_url']; ?>
" alt="<?php echo $this->_tpl_vars['profile_data']['username']; ?>
"  border="0" class="img-responsive">
								<span class="pm-profile-avatar-edit"><a href="#" title="<?php echo $this->_tpl_vars['lang']['update_avatar']; ?>
" class="btn btn-link btn-edit" id="btn-edit-avatar"><i class="fa fa-pencil"></i></a></span>
								<form action="#" class="cropit-form" id="cropit-avatar-form">
									<input type="file" class="cropit-image-input" id="cropit-avatar-input" />
									<input type="hidden" name="image-data" class="hidden-avatar-data-img" />
									<input type="hidden" name="p" value="upload" />
									<input type="hidden" name="do" value="user-avatar" />
									<button class="btn btn-default btn-cancel-avatar"><?php echo $this->_tpl_vars['lang']['submit_cancel']; ?>
</button>
									<button type="submit" class="btn btn-mini btn-success"><?php echo $this->_tpl_vars['lang']['submit_save']; ?>
</button>
								</form>
							</div>
							<?php else: ?>
								<img src="<?php echo $this->_tpl_vars['avatar']; ?>
" alt="<?php echo $this->_tpl_vars['profile_data']['username']; ?>
" border="0" class="img-responsive">
							<?php endif; ?>
						</div>
						
						<div class="pm-profile-user-info">
							<h1><?php echo $this->_tpl_vars['profile_data']['username']; ?>


							<?php if ($this->_tpl_vars['profile_data']['channel_verified'] && @_MOD_SOCIAL): ?>
							<a href="#" rel="tooltip" title="<?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['verified_channel'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Verified Channel') : smarty_modifier_default($_tmp, 'Verified Channel')); ?>
" class="pm-verified-user"><img src="<?php echo @_URL; ?>
/templates/<?php echo @_TPLFOLDER; ?>
/img/ico-verified.png" /></a>
							<?php endif; ?>
							<!--<?php if ($this->_tpl_vars['profile_data']['channel_featured'] == 1): ?><span class="label"><?php echo $this->_tpl_vars['lang']['_featured']; ?>
</span><?php endif; ?>--> 
							<?php if ($this->_tpl_vars['user_is_banned']): ?> <span class="label label-banned"><?php echo $this->_tpl_vars['lang']['user_account_banned_label']; ?>
</span><?php endif; ?>
							<?php if (@_MOD_SOCIAL && $this->_tpl_vars['logged_in'] == 1 && $this->_tpl_vars['s_user_id'] != $this->_tpl_vars['profile_data']['id']): ?>
								<?php if ($this->_tpl_vars['profile_data']['is_following_me']): ?>
									<span class="label label-social-follows hidden-xs"><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['subscriber'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Subscriber') : smarty_modifier_default($_tmp, 'Subscriber')); ?>
</span>
								<?php endif; ?>
							<?php endif; ?>
							</h1>

							<div class="pm-profile-buttons hidden-xs">
								<?php if (@_MOD_SOCIAL && $this->_tpl_vars['logged_in'] == 1 && $this->_tpl_vars['s_user_id'] != $this->_tpl_vars['profile_data']['id']): ?>
									<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'user-subscribe-button.tpl', 'smarty_include_vars' => array('profile_user_id' => $this->_tpl_vars['profile_data']['id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>

				<div class="pm-profile-body">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-9">
							<ul class="pm-profile-stats list-inline">
								<li><?php echo smarty_pm_number_format(array('number' => $this->_tpl_vars['total_submissions']), $this);?>
 <span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
</span></li>
								<?php if (@_MOD_SOCIAL): ?>
								<li><?php echo smarty_pm_number_format(array('number' => $this->_tpl_vars['profile_data']['followers_count']), $this);?>
 <span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['subscribers'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
</span></li>
								<?php endif; ?>
								<li><?php echo smarty_pm_number_format(array('number' => $this->_tpl_vars['total_playlists']), $this);?>
 <span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['_playlists'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
</span></li>
							</ul>
						</div>
						<div class="hidden-xs hidden-sm col-md-3">
							<?php if (count ( $this->_tpl_vars['profile_data']['social_links'] ) > 0): ?>
							<ul class="pm-profile-links list-inline pull-right">
								<?php if ($this->_tpl_vars['profile_data']['social_links']['website'] != ''): ?><li><a href="<?php echo $this->_tpl_vars['profile_data']['social_links']['website']; ?>
" target="_blank" rel="nofollow"><i class="fa fa-globe"></i></a></li><?php endif; ?>
								<?php if ($this->_tpl_vars['profile_data']['social_links']['facebook'] != ''): ?><li><a href="<?php echo $this->_tpl_vars['profile_data']['social_links']['facebook']; ?>
" target="_blank" rel="nofollow"><i class="fa fa-facebook-square"></i></a></li><?php endif; ?>
								<?php if ($this->_tpl_vars['profile_data']['social_links']['twitter'] != ''): ?><li><a href="<?php echo $this->_tpl_vars['profile_data']['social_links']['twitter']; ?>
" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i></a></li><?php endif; ?>
								<?php if ($this->_tpl_vars['profile_data']['social_links']['instagram'] != ''): ?><li><a href="<?php echo $this->_tpl_vars['profile_data']['social_links']['instagram']; ?>
" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a></li><?php endif; ?>
								<?php if ($this->_tpl_vars['profile_data']['social_links']['google_plus'] != ''): ?><li><a href="<?php echo $this->_tpl_vars['profile_data']['social_links']['google_plus']; ?>
" target="_blank" rel="nofollow"><i class="fa fa-google-plus"></i></a></li><?php endif; ?>
								<?php if (isset ( $this->_tpl_vars['mm_profile_webfields_inject'] )): ?><?php echo $this->_tpl_vars['mm_profile_webfields_inject']; ?>
<?php endif; ?>
							</ul>
							<?php endif; ?>
						</div>
					</div>
					<div class="clearfix"></div>
					<?php if ($this->_tpl_vars['profile_data']['about']): ?>
						<div class="pm-profile-desc hidden-xs hidden-sm">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['profile_data']['about'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 280) : smarty_modifier_truncate($_tmp, 280)); ?>

						<?php if (isset ( $this->_tpl_vars['mm_profile_info_inject'] )): ?><?php echo $this->_tpl_vars['mm_profile_info_inject']; ?>
<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="nav-responsive">
					<ul class="nav nav-tabs nav-underlined">
						<li <?php if ($_GET['view'] == 'videos' || $_GET['view'] == ''): ?>class="active"<?php endif; ?>><a href="#pm-pro-own" data-toggle="tab"><?php echo $this->_tpl_vars['lang']['videos']; ?>
</a></li>
						<?php if (@_MOD_SOCIAL): ?>
						<?php if ($this->_tpl_vars['s_user_id'] == $this->_tpl_vars['profile_data']['id']): ?>
							<li><a href="#pm-pro-activity-stream" data-toggle="tab"><?php echo $this->_tpl_vars['lang']['activity_newsfeed']; ?>
</a></li>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['s_user_id'] == $this->_tpl_vars['profile_data']['id'] || $this->_tpl_vars['profile_data']['am_following']): ?>
							<li><a href="#pm-pro-user-activity" data-toggle="tab"><?php echo $this->_tpl_vars['lang']['my_activity']; ?>
</a></li>
						<?php endif; ?>
						<?php endif; ?>
						<li <?php if ($_GET['view'] == 'playlists'): ?>class="active"<?php endif; ?>><a href="#pm-pro-playlists" id="pm-pro-playlists-btn" class="pm-pro-playlists-btn" data-profile-id="<?php echo $this->_tpl_vars['profile_data']['id']; ?>
" data-toggle="tab"><?php echo $this->_tpl_vars['lang']['_playlists']; ?>
</a></li>
						<?php if (@_MOD_SOCIAL && $this->_tpl_vars['s_user_id'] == $this->_tpl_vars['profile_data']['id']): ?>
							<li><a href="#pm-pro-followers" data-toggle="tab"><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['subscribers'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Subscribers') : smarty_modifier_default($_tmp, 'Subscribers')); ?>
</a></li>
							<li><a href="#pm-pro-following" data-toggle="tab"><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['subscribed_to'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Subscribed to') : smarty_modifier_default($_tmp, 'Subscribed to')); ?>
</a></li>
						<?php endif; ?>
						<li><a href="#pm-pro-about" data-toggle="tab"><?php echo $this->_tpl_vars['lang']['_about']; ?>
</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col-md-12">
		<div class="tab-content tab-content-channel">
			<div class="tab-pane fade" id="pm-pro-about">
				<h4><?php echo $this->_tpl_vars['lang']['_about']; ?>
</h4>
				<?php if ($this->_tpl_vars['about']): ?>
				<p><?php echo $this->_tpl_vars['about']; ?>
</p>
				<?php else: ?>
				<p><?php echo $this->_tpl_vars['lang']['profile_msg_about_empty']; ?>
</p>
				<?php endif; ?>
				<?php if (isset ( $this->_tpl_vars['mm_profile_info_inject'] )): ?><?php echo $this->_tpl_vars['mm_profile_info_inject']; ?>
<?php endif; ?>
				<div class="clearfix"></div>

	 			<?php if (count ( $this->_tpl_vars['profile_data']['social_links'] ) > 0): ?>
				<h4><?php echo $this->_tpl_vars['lang']['_social']; ?>
</h4>
				<ul class="pm-pro-social-links list-unstyled">
					<?php if ($this->_tpl_vars['profile_data']['social_links']['website'] != ''): ?> 
						<li><i class="fa fa-globe"></i> <a href="<?php echo $this->_tpl_vars['profile_data']['social_links']['website']; ?>
" target="_blank" rel="nofollow"><?php echo $this->_tpl_vars['profile_data']['social_links']['website']; ?>
</a></li>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['profile_data']['social_links']['facebook'] != ''): ?>
						<li><i class="fa fa-facebook-square"></i> <a href="<?php echo $this->_tpl_vars['profile_data']['social_links']['facebook']; ?>
" target="_blank" rel="nofollow"><?php echo $this->_tpl_vars['profile_data']['social_links']['facebook']; ?>
</a></li>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['profile_data']['social_links']['twitter'] != ''): ?>
						<li><i class="fa fa-twitter"></i> <a href="<?php echo $this->_tpl_vars['profile_data']['social_links']['twitter']; ?>
" target="_blank" rel="nofollow"><?php echo $this->_tpl_vars['profile_data']['social_links']['twitter']; ?>
</a></li>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['profile_data']['social_links']['instagram'] != ''): ?>
						<li><i class="fa fa-instagram"></i> <a href="<?php echo $this->_tpl_vars['profile_data']['social_links']['instagram']; ?>
" target="_blank" rel="nofollow"><?php echo $this->_tpl_vars['profile_data']['social_links']['instagram']; ?>
</a></li> 
					<?php endif; ?>
					<?php if ($this->_tpl_vars['profile_data']['social_links']['google_plus'] != ''): ?>
						<li><i class="fa fa-google-plus"></i> <a href="<?php echo $this->_tpl_vars['profile_data']['social_links']['google_plus']; ?>
" target="_blank" rel="nofollow"><?php echo $this->_tpl_vars['profile_data']['social_links']['google_plus']; ?>
</a></li> 
					<?php endif; ?>
					<?php if (isset ( $this->_tpl_vars['mm_profile_webfields_inject'] )): ?><?php echo $this->_tpl_vars['mm_profile_webfields_inject']; ?>
<?php endif; ?>
				</ul>
				<?php endif; ?>
				<div class="clearfix"></div>
 			</div>

			<div class="tab-pane <?php if ($_GET['view'] == 'playlists'): ?>fade in active<?php else: ?>fade<?php endif; ?>" id="pm-pro-playlists">
				<?php if ($this->_tpl_vars['profile_data']['id'] == $this->_tpl_vars['s_user_id']): ?>
				<h4><?php echo $this->_tpl_vars['lang']['my_playlists']; ?>
</h4>
				<?php else: ?>
				<h4><?php echo $this->_tpl_vars['lang']['_playlists']; ?>
</h4>
				<?php endif; ?>
				<div id="profile-playlists-container">
					<span id="loading"><img src="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/img/ajax-loading.gif" alt="<?php echo $this->_tpl_vars['lang']['please_wait']; ?>
" align="absmiddle" border="0" width="16" height="16" /> <?php echo $this->_tpl_vars['lang']['please_wait']; ?>
</span>
				</div>
			</div>

			<div class="tab-pane <?php if ($_GET['view'] == 'videos' || $_GET['view'] == ''): ?>active<?php else: ?>fade<?php endif; ?>" id="pm-pro-own">
				<h4><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos_from_s'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['profile_data']['username']) : sprintf($_tmp, $this->_tpl_vars['profile_data']['username'])); ?>
</h4>

				<ul class="row pm-ul-browse-videos list-unstyled">
					<?php $_from = $this->_tpl_vars['submitted_video_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['video_data']):
?>
					<li class="col-xs-6 col-sm-4 col-md-3">
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'item-video-obj.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</li>
					<?php endforeach; else: ?>
					<li class="col-xs-12 col-sm-12 col-md-12">
						<?php echo $this->_tpl_vars['lang']['top_videos_msg2']; ?>

					</li>
					<?php endif; unset($_from); ?>

					<?php if (count ( $this->_tpl_vars['submitted_video_list'] ) > 10): ?>
					<li class="col-xs-6 col-sm-4 col-md-3">
						<div class="thumbnail_watch_all">
							<a href="<?php echo @_URL; ?>
/search.php?keywords=<?php echo $this->_tpl_vars['username']; ?>
&btn=Search&t=user" class="btn btn-primary" title="<?php echo $this->_tpl_vars['lang']['profile_watch_all']; ?>
"><?php echo $this->_tpl_vars['lang']['profile_watch_all']; ?>
</a>
						</div>
					</li>
					<?php endif; ?>
				</ul>
			</div>

			<?php if (@_MOD_SOCIAL): ?>
			<div class="tab-pane fade" id="pm-pro-followers">
				<h4><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['subscribers'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Subscribers') : smarty_modifier_default($_tmp, 'Subscribers')); ?>
</h4>
				<div id="pm-pro-followers-content"></div>
			</div>
			
			<div class="tab-pane fade" id="pm-pro-following">
			<?php if (is_array ( $this->_tpl_vars['who_to_follow_list'] )): ?>
				<h4><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['suggested_channels'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Suggested channels') : smarty_modifier_default($_tmp, 'Suggested channels')); ?>
</h4>
				<ul class="row pm-channels-list list-unstyled">
				<?php $_from = $this->_tpl_vars['who_to_follow_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['user_data']):
?>
				<li class="col-sm-6 col-md-4">
					<div class="pm-channel">
						<div class="pm-channel-header">
							<div class="pm-channel-cover">
								<?php if ($this->_tpl_vars['user_data']['channel_cover']['max']): ?>
								<img src="<?php echo $this->_tpl_vars['user_data']['channel_cover']['450']; ?>
" alt="<?php echo $this->_tpl_vars['user_data']['username']; ?>
"  border="0" class="img-responsive">
								<?php endif; ?>
							</div>
							<div class="pm-channel-profile-pic">
								<a href="<?php echo $this->_tpl_vars['user_data']['profile_url']; ?>
"><img src="<?php echo $this->_tpl_vars['user_data']['avatar_url']; ?>
" alt="<?php echo $this->_tpl_vars['user_data']['username']; ?>
"  border="0" class="img-responsive"></a>
							</div>
						</div>
						<div class="pm-channel-body">
							<h3><a href="<?php echo $this->_tpl_vars['user_data']['profile_url']; ?>
" class="ellipsis <?php if ($this->_tpl_vars['user_data']['user_is_banned']): ?>pm-user-banned<?php endif; ?>"><?php echo $this->_tpl_vars['user_data']['name']; ?>
</a> <?php if ($this->_tpl_vars['user_data']['is_following_me']): ?><span class="label label-success label-follow-status pull-right"><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['subscriber'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Subscriber') : smarty_modifier_default($_tmp, 'Subscriber')); ?>
</span><?php endif; ?></h3>
							<div class="pm-channel-stats"> <?php echo $this->_tpl_vars['user_data']['videos_count_formatted']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
 / <?php echo $this->_tpl_vars['user_data']['followers_count_formatted']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['subscribers'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
</div>
							<!-- <div class="pm-channel-desc"><?php echo $this->_tpl_vars['user_data']['about']; ?>
</div> -->
							<div class="pm-channel-buttons">
								<?php if (@_MOD_SOCIAL && $this->_tpl_vars['logged_in'] == '1' && $this->_tpl_vars['user_data']['id'] != $this->_tpl_vars['s_user_id']): ?>
									<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "user-subscribe-button.tpl", 'smarty_include_vars' => array('profile_data' => $this->_tpl_vars['user_data'],'profile_user_id' => $this->_tpl_vars['user_data']['id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</li>
				<?php endforeach; endif; unset($_from); ?>
				</ul>
			<?php endif; ?>

			<h4><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['subscribed_to'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Subscribed to') : smarty_modifier_default($_tmp, 'Subscribed to')); ?>
</h4>
			<div id="pm-pro-following-content"></div>
			</div>

			<?php if ($this->_tpl_vars['s_user_id'] == $this->_tpl_vars['profile_data']['id'] || $this->_tpl_vars['profile_data']['am_following']): ?>
			<div class="tab-pane fade" id="pm-pro-user-activity"> 
				<h4><?php echo $this->_tpl_vars['lang']['my_activity']; ?>
</h4>
				<div id="pm-pro-user-activity-content"></div>
			</div>
			<?php endif; ?>
			
			<?php if ($this->_tpl_vars['s_user_id'] == $this->_tpl_vars['profile_data']['id']): ?>
			<div class="tab-pane fade" id="pm-pro-activity-stream">
				<h4><?php echo $this->_tpl_vars['lang']['activity_newsfeed']; ?>
</h4>
				<form name="user-update-status" method="post" action="" onsubmit="update_status();return false;">
					<div class="form-group">
						<textarea class="form-control" name="post-status" ></textarea>
					</div>
					<div class="form-group">
						<button type="submit" name="btn-update-status" class="btn btn-sm btn-success"><?php echo $this->_tpl_vars['lang']['status_update']; ?>
</button>
					</div>
				</form>
				<div id="pm-pro-activity-stream-content">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'activity-stream.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</div>
			</div>
			<?php endif; ?>
			<?php endif; ?>
		  </div><!-- /tab-content -->
		</div>
		<input type="hidden" name="profile_user_id" value="<?php echo $this->_tpl_vars['profile_data']['id']; ?>
" />
		</div><!-- #content -->
	  </div><!-- .row -->
	</div><!-- .container -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array('tpl_name' => 'channel')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>