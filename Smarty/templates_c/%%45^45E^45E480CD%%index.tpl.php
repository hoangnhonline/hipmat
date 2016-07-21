<?php /* Smarty version 2.6.20, created on 2016-07-18 11:06:09
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'index.tpl', 44, false),array('modifier', 'truncate', 'index.tpl', 132, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('p' => 'index','tpl_name' => 'index')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<div class="container-fluid">
	<div class="row">
		<div class="pm-section-highlighted col-sm-12 col-md-12">
		<div id="video-wrapper">
			<div class="pm-video-watch-featured">
			<?php if ($this->_tpl_vars['featured_videos_total'] == 1): ?>
				<h2><a href="<?php echo $this->_tpl_vars['featured_videos']['0']['video_href']; ?>
"><?php echo $this->_tpl_vars['featured_videos']['0']['video_title']; ?>
</a></h2>
				<?php if ($this->_tpl_vars['display_preroll_ad'] == true): ?>
					<div id="preroll_placeholder">
						<div class="preroll_countdown">
							<?php echo $this->_tpl_vars['lang']['preroll_ads_timeleft']; ?>
 <span class="preroll_timeleft"><?php echo $this->_tpl_vars['preroll_ad_data']['timeleft_start']; ?>
</span>
						</div>
						<?php echo $this->_tpl_vars['preroll_ad_data']['code']; ?>

						
						<?php if ($this->_tpl_vars['preroll_ad_data']['skip']): ?>
						<div class="preroll_skip_countdown">
							<?php echo $this->_tpl_vars['lang']['preroll_ads_skip_msg']; ?>
 <span class="preroll_skip_timeleft"><?php echo $this->_tpl_vars['preroll_ad_data']['skip_delay_seconds']; ?>
</span>
						</div>
						<div class="preroll_skip_button">
						<button class="btn btn-default hide-me" id="preroll_skip_btn"><?php echo $this->_tpl_vars['lang']['preroll_ads_skip']; ?>
</button>
						</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['preroll_ad_data']['disable_stats'] == 0): ?>
							<img src="<?php echo @_URL; ?>
/ajax.php?p=stats&do=show&aid=<?php echo $this->_tpl_vars['preroll_ad_data']['id']; ?>
&at=<?php echo @_AD_TYPE_PREROLL; ?>
" width="1" height="1" border="0" />
						<?php endif; ?>
					</div>
				<?php else: ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "player.tpl", 'smarty_include_vars' => array('page' => 'index','video_data' => $this->_tpl_vars['featured_videos']['0'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endif; ?>

			<?php elseif ($this->_tpl_vars['featured_videos_total'] > 1): ?>
				<h2><a href="<?php echo $this->_tpl_vars['featured_videos']['0']['video_href']; ?>
"><?php echo $this->_tpl_vars['featured_videos']['0']['video_title']; ?>
</a></h2>
				<div id="video-wrapper">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "player.tpl", 'smarty_include_vars' => array('page' => 'index','video_data' => $this->_tpl_vars['featured_videos']['0'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</div>
				<div class="clearfix"></div>

				<?php if ($this->_tpl_vars['featured_videos_total'] > 2): ?>
				<div class="row">
					<div class="col-md-12">
						<div class="clearfix"></div>
						<div class="pm-section-head">
							<h2><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['featured'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Featured') : smarty_modifier_default($_tmp, 'Featured')); ?>
</h2>
						</div>
						<div class="pm-carousel-sidebuttons">
							<button class="btn btn-xs btn-link btn-slider btn-car-prev  hidden-xs" id="pm-slide-prev_featuredlist"><i class="fa fa-chevron-left"></i></button>
							<!-- Carousel items -->
							<ul class="pm-ul-carousel-videos list-inline" data-slides="5" data-slider-id="featuredlist" id="pm-carousel_featuredlist">
								<?php $_from = $this->_tpl_vars['featured_videos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['video_data']):
?>
								<?php if ($this->_tpl_vars['k'] > 0): ?>
								<li class="">
									<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'item-video-obj.tpl', 'smarty_include_vars' => array('hideLabels' => '1','hideMeta' => '1','thumbSize' => 'medium')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
								</li>
								<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
							</ul>
							<button class="btn btn-xs btn-link btn-slider btn-car-next  hidden-xs" id="pm-slide-next_featuredlist"><i class="fa fa-chevron-right"></i></button>
						</div><!-- #pm-slider -->
					</div>
				</div>
				<?php endif; ?>
			<?php endif; ?>
			</div>
		</div>
		</div>
	</div>
</div>


<div id="content">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
			<div class="pm-section-head">
				<h2><a href="<?php echo @_URL; ?>
/newvideos.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['new_videos']; ?>
</a></h2>
			</div>
			<ul class="row pm-ul-browse-videos list-unstyled">
				<?php $_from = $this->_tpl_vars['new_videos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['video_data']):
?>
				<li class="col-xs-6 col-sm-6 col-md-4">
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
			</ul>
			<div class="clearfix"></div>
        </div><!-- .col-md-8 -->

        <div class="col-md-4">
	        <?php if ($this->_tpl_vars['ad_5'] != ''): ?>
			<div class="widget">
				<div class="pm-section-head">
					<h4><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['_advertisment'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Advertisment') : smarty_modifier_default($_tmp, 'Advertisment')); ?>
</h4>
				</div>
	        	<div class="pm-ads-banner" align="center"><?php echo $this->_tpl_vars['ad_5']; ?>
</div>
	        </div><!-- .widget -->
	        <?php endif; ?>

			<div class="widget">
			<div class="pm-section-head">
				<h4><a href="<?php echo @_URL; ?>
/topvideos.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['top_m_videos']; ?>
</a></h4>
			</div>
			<ul class="row pm-ul-browse-videos list-unstyled">
				<?php $_from = $this->_tpl_vars['top_videos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['video_data']):
?>
				<li class="col-xs-6 col-sm-6 col-md-6">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'item-video-obj.tpl', 'smarty_include_vars' => array('hideMeta' => '1','hideLabels' => '1','thumbSize' => 'small')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

				</li>
				<?php endforeach; else: ?>
				<li class="col-xs-12 col-sm-12 col-md-12">
					<?php echo $this->_tpl_vars['lang']['top_videos_msg2']; ?>

				</li>
				<?php endif; unset($_from); ?>
			</ul>
			<div class="clearfix"></div>
	        </div><!-- .widget -->				

	        <?php if (@_MOD_ARTICLE == 1): ?>
	        <div class="widget">
	        	<h4><a href="<?php echo @_URL; ?>
/article.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['articles_latest']; ?>
</a></h4>
	            <ul class="pm-sidebar-articles list-unstyled">
	            <?php $_from = $this->_tpl_vars['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['article']):
?>
				<li class="media<?php if ($this->_tpl_vars['article']['featured'] == '1'): ?> media-featured<?php endif; ?>">
					<?php if ($this->_tpl_vars['article']['meta']['_post_thumb_show'] != ''): ?>
					<a href="<?php echo $this->_tpl_vars['article']['link']; ?>
" class="pull-left" title="<?php echo $this->_tpl_vars['article']['title']; ?>
"><img src="<?php echo @_ARTICLE_ATTACH_DIR; ?>
/<?php echo $this->_tpl_vars['article']['meta']['_post_thumb_show']; ?>
" align="left" width="55" height="55" border="0" alt="<?php echo $this->_tpl_vars['article']['title']; ?>
" class="media-object"></a>
					<?php endif; ?>
					<div class="media-body">
						<h5 class="media-heading"><a href="<?php echo $this->_tpl_vars['article']['link']; ?>
" title="<?php echo $this->_tpl_vars['article']['title']; ?>
" ><?php echo $this->_tpl_vars['article']['title']; ?>
</a></h5>
						<span class="ellipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']['excerpt'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 130) : smarty_modifier_truncate($_tmp, 130)); ?>
</span>
					</div>
				</li>
	            <?php endforeach; endif; unset($_from); ?>
	            </ul>
	        </div><!-- .widget -->
	        <?php endif; ?>
	        
	        <?php if (( $this->_tpl_vars['show_tags'] == 1 ) && ( count ( $this->_tpl_vars['tags'] ) > 0 )): ?>
			<div class="widget">
				<h4><?php echo $this->_tpl_vars['lang']['tags']; ?>
</h4>
				<div class="entry-tags">
	            <?php $_from = $this->_tpl_vars['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['tag']):
?>
	                <?php echo $this->_tpl_vars['tag']['href']; ?>

	            <?php endforeach; endif; unset($_from); ?>
		        </div>
	        </div><!-- .widget -->
	        <?php endif; ?>
	        
	        <?php if ($this->_tpl_vars['show_stats'] == 1): ?>
	        <div class="widget">
	        	<h4><?php echo $this->_tpl_vars['lang']['site_stats']; ?>
</h4>
		        <ul class="pm-ul-stats list-unstyled">
		        	<li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
?do=online"><?php echo $this->_tpl_vars['lang']['online_users']; ?>
</a> <span class="pm-stats-count"><?php echo $this->_tpl_vars['stats']['online_users']; ?>
</span></li>
		            <li><a href="<?php echo @_URL; ?>
/memberlist.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['total_users']; ?>
</a> <span class="pm-stats-count"><?php echo $this->_tpl_vars['stats']['users']; ?>
</span></li>
		            <li><?php echo $this->_tpl_vars['lang']['total_videos']; ?>
 <span class="pm-stats-count"><?php echo $this->_tpl_vars['stats']['videos']; ?>
</span></li>
		        	<li><?php echo $this->_tpl_vars['lang']['videos_added_lw']; ?>
 <span class="pm-stats-count"><?php echo $this->_tpl_vars['stats']['videos_last_week']; ?>
</span></li>
		        </ul>
			</div><!-- .widget -->
	        <?php endif; ?>
        
		</div><!-- .col-md-4 -->
      </div><!-- .row -->


		<div class="row">
			<div class="col-md-12">
				<?php if ($this->_tpl_vars['total_playingnow'] > 0): ?>
				<div class="pm-section-head">
					<h3><?php echo $this->_tpl_vars['lang']['vbwrn']; ?>
</h3>
					<div class="btn-group btn-group-sort">
					<button class="btn btn-xs" id="pm-slide-prev_vbwrn"><i class="fa fa-chevron-left"></i></button>
					<button class="btn btn-xs" id="pm-slide-next_vbwrn"><i class="fa fa-chevron-right"></i></button>
					</div>
				</div>
				<div id="">
				<!-- Carousel items -->
					<ul class="pm-ul-carousel-videos list-inline" data-slider-id="vbwrn" data-slides="5" id="pm-carousel_vbwrn">
						<?php $_from = $this->_tpl_vars['playingnow']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['video_data']):
?>
						<li class="">
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'item-video-obj.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						</li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</div><!-- #pm-slider -->
				<?php endif; ?>
			</div>
		</div>

	<?php if (count ( $this->_tpl_vars['featured_categories_data'] ) > 0): ?>
		<?php $_from = $this->_tpl_vars['featured_categories_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category_id'] => $this->_tpl_vars['video_data_array']):
?>
		<div class="row">
			<div class="col-md-12">
				<?php if ($this->_tpl_vars['categories'][$this->_tpl_vars['category_id']]['published_videos'] > 0): ?>
				<div class="pm-section-head">
					<h3><a href="<?php echo $this->_tpl_vars['categories'][$this->_tpl_vars['category_id']]['url']; ?>
"><?php echo $this->_tpl_vars['categories'][$this->_tpl_vars['category_id']]['name']; ?>
</a></h3>
					<div class="btn-group btn-group-sort">
					<button class="btn btn-xs" id="pm-slide-prev_<?php echo $this->_tpl_vars['category_id']; ?>
"><i class="fa fa-chevron-left"></i></button>
					<button class="btn btn-xs" id="pm-slide-next_<?php echo $this->_tpl_vars['category_id']; ?>
"><i class="fa fa-chevron-right"></i></button>
					</div>
				</div>
				<div id="">
				<!-- Carousel items -->
					<ul class="pm-ul-carousel-videos list-inline" data-slider-id="<?php echo $this->_tpl_vars['category_id']; ?>
" data-slides="5" id="pm-carousel_<?php echo $this->_tpl_vars['category_id']; ?>
">
						<?php $_from = $this->_tpl_vars['video_data_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['video_data']):
?>
						<li class="">
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'item-video-obj.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						</li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</div><!-- #pm-slider -->
				<?php endif; ?>
			</div>
		</div>
		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>

      <div class="clearfix"></div>
    </div><!-- .container -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array('p' => 'index')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 