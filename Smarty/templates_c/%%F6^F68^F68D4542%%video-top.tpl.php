<?php /* Smarty version 2.6.20, created on 2016-07-18 11:19:18
         compiled from video-top.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('p' => 'general','tpl_name' => "video-top")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="category-header" class="container-fluid pm-popular-videos-page">
	<div class="pm-category-highlight animated fadeInLeft">
		<h1><i class="mico mico-import_export"></i> <?php echo $this->_tpl_vars['lang']['top_m_videos']; ?>
<?php if ($this->_tpl_vars['cat_name']): ?>:<?php echo $this->_tpl_vars['cat_name']; ?>
<?php endif; ?></h1>
	</div>
</div>
<div id="content">
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		<div class="pm-section-head">
			<div class="btn-group btn-group-sort">
				<button class="btn btn-default" id="show-grid"><i class="fa fa-th"></i></button>
				<button class="btn btn-default" id="show-list"><i class="fa fa-th-list"></i></button>
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<?php echo $this->_tpl_vars['lang']['sorting']; ?>
 <span class="caret"></span>
				</button>
				<ul class="dropdown-menu scrollable-menu" role="menu">
					<li role="presentation" class="dropdown-header"><?php echo $this->_tpl_vars['lang']['most_liked']; ?>
</li>
					<li><a href="<?php echo @_URL; ?>
/topvideos.<?php echo @_FEXT; ?>
?do=rating"<?php if ($_GET['do'] == 'rating'): ?> class="disabled"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['any_time']; ?>
</a></li>
					<li role="presentation" class="dropdown-header"><?php echo $this->_tpl_vars['lang']['by_time']; ?>
</li>
					<li><a href="<?php echo @_URL; ?>
/topvideos.<?php echo @_FEXT; ?>
"<?php if ($_GET['do'] == 'rating'): ?> class="disabled"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['any_time']; ?>
</a></li>
					<li><a href="<?php echo @_URL; ?>
/topvideos.<?php echo @_FEXT; ?>
?do=recent"<?php if ($_GET['do'] == 'recent'): ?> class="disabled"<?php endif; ?>><?php echo $this->_tpl_vars['chart_days']; ?>
</a></li>
					<li role="presentation" class="dropdown-header"><?php echo $this->_tpl_vars['lang']['by_cat']; ?>
</li>
					<?php echo $this->_tpl_vars['categories_ul_list']; ?>

				</ul>
			</div>
		</div>

		<ul class="row pm-ul-browse-videos list-unstyled" id="pm-grid">
		<?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['video_data']):
?>
		<li class="col-xs-6 col-sm-6 col-md-3">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'item-video-obj.tpl', 'smarty_include_vars' => array('tpl_name' => 'video-top')));
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
		
		<?php if (is_array ( $this->_tpl_vars['pagination'] )): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'item-pagination-obj.tpl', 'smarty_include_vars' => array('custom_class' => 'pagination-arrows')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
		</div><!-- #content -->
	</div><!-- .row -->
	</div><!-- .container -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array('tpl_name' => "video-top")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 