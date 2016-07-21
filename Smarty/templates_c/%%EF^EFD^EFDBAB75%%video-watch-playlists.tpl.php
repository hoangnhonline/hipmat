<?php /* Smarty version 2.6.20, created on 2016-07-18 11:16:40
         compiled from video-watch-playlists.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'video-watch-playlists.tpl', 19, false),)), $this); ?>
<div id="playlist-container">
	<?php if (count ( $this->_tpl_vars['my_playlists'] ) > 0): ?>
	<ul class="pm-playlist-items list-group">
		<?php $_from = $this->_tpl_vars['my_playlists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['my_playlists_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['my_playlists_foreach']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['playlist_data']):
        $this->_foreach['my_playlists_foreach']['iteration']++;
?>
		<li data-playlist-id="<?php echo $this->_tpl_vars['playlist_data']['list_id']; ?>
" class="list-group-item<?php if ($this->_tpl_vars['playlist_data']['has_current_video']): ?> pm-playlist-item-selected<?php endif; ?>">
		<!--<li class="pm-playlist-item-selected">-->
			<a href="#" onclick="<?php if ($this->_tpl_vars['playlist_data']['has_current_video']): ?>playlist_remove_item(<?php echo $this->_tpl_vars['playlist_data']['list_id']; ?>
, <?php echo $this->_tpl_vars['video_data']['id']; ?>
);<?php else: ?>playlist_add_item(<?php echo $this->_tpl_vars['playlist_data']['list_id']; ?>
, <?php echo $this->_tpl_vars['video_data']['id']; ?>
);<?php endif; ?> return false;">
				<span class="pm-playlist-response">
					<?php if ($this->_tpl_vars['playlist_data']['has_current_video']): ?>
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
						<polyline class="path check" fill="none" stroke="#73AF55" stroke-width="16" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
						</svg>
<!-- 						<span class="label label-success"><?php echo $this->_tpl_vars['lang']['added']; ?>
</span> -->
					<?php else: ?>
						<span class="pm-playlist-response"></span>
					<?php endif; ?>
				</span>
				<span class="pm-playlists-name">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['playlist_data']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)); ?>
 
				</span> 
				<span class="pm-playlist-visibility">
					<?php if ($this->_tpl_vars['playlist_data']['visibility'] == @PLAYLIST_PUBLIC): ?>
						<!--<?php echo $this->_tpl_vars['lang']['public']; ?>
-->
					<?php endif; ?>
					<?php if ($this->_tpl_vars['playlist_data']['visibility'] == @PLAYLIST_PRIVATE): ?>
						<span rel="tooltip" title="<?php echo $this->_tpl_vars['lang']['private']; ?>
"><i class="mico mico-lock"></i></span>
					<?php endif; ?>
				</span>
				<span class="pm-playlists-video-count"><?php echo $this->_tpl_vars['playlist_data']['items_count']; ?>
 <?php echo $this->_tpl_vars['lang']['videos']; ?>
</span>
<!-- 				<span class="pm-playlist-created">
					<time datetime="<?php echo $this->_tpl_vars['playlist_data']['html5_datetime']; ?>
" title="<?php echo $this->_tpl_vars['playlist_data']['full_datetime']; ?>
"><?php echo $this->_tpl_vars['playlist_data']['time_since']; ?>
 <?php echo $this->_tpl_vars['lang']['ago']; ?>
</time>
				</span> -->
			</a>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
	<?php else: ?>
	<img src="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/img/ajax-loading.gif" alt="<?php echo $this->_tpl_vars['lang']['please_wait']; ?>
" align="absmiddle" border="0" width="16" height="16" /> <?php echo $this->_tpl_vars['lang']['please_wait']; ?>

	<?php endif; ?>
</div>