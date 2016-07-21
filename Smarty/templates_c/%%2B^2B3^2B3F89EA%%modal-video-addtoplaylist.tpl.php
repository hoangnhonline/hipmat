<?php /* Smarty version 2.6.20, created on 2016-07-18 11:06:26
         compiled from modal-video-addtoplaylist.tpl */ ?>
<!-- Modal -->
<div class="modal" id="modal-video-addtoplaylist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><?php echo $this->_tpl_vars['lang']['add_to_playlist']; ?>
</h4>
			</div>
			<div class="modal-body">
				<div id="pm-vc-playlists-content">
				<?php if ($this->_tpl_vars['logged_in']): ?>
				<div id="playlist-ajax-response" class="hide-me"></div>
				<div id="playlist-create-ajax-response" class="hide-me"></div>

				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "video-watch-playlists.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<hr />
				<h4><?php echo $this->_tpl_vars['lang']['create_new_playlist']; ?>
</h4>
				<form class="form-inline" role="form">
					 <div class="form-group">
								<input type="text" class="form-control" name="playlist_name" placeholder="<?php echo $this->_tpl_vars['lang']['playlist_enter_name']; ?>
" size="36">
						</div>
					 <div class="form-group">
						<select name="visibility" class="form-control">
								<option value="<?php echo @PLAYLIST_PUBLIC; ?>
"><?php echo $this->_tpl_vars['lang']['public']; ?>
</option>
								<option value="<?php echo @PLAYLIST_PRIVATE; ?>
"><?php echo $this->_tpl_vars['lang']['private']; ?>
</option>
						</select>
					 </div>
						<div class="form-group">
							<input type="hidden" name="video_id" value="<?php echo $this->_tpl_vars['video_data']['id']; ?>
" />
							<button type="submit" id="create_playlist_submit_btn" class="btn btn-success" onclick="playlist_create(this, 'video-watch'); return false;" disabled><?php echo $this->_tpl_vars['lang']['playlist_create_new']; ?>
</button>
						</div>
				</form>
				<?php else: ?>
				<div class="alert alert-danger">
					<?php echo $this->_tpl_vars['lang']['playlist_msg_login_required']; ?>

				</div>
				<?php endif; ?>
				</div>                
			</div>
		</div>
	</div>
</div>