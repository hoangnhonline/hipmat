<?php /* Smarty version 2.6.20, created on 2016-07-18 22:24:18
         compiled from video-new.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('p' => 'general','tpl_name' => "video-new")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="category-header" class="container-fluid pm-new-videos-page">
	<div class="pm-category-highlight animated fadeInLeft">
		<h1><i class="mico mico-new_releases"></i> <?php echo $this->_tpl_vars['lang']['new_videos']; ?>
</h1>
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
			<ul class="dropdown-menu" role="menu">
				<li><a href="<?php echo @_URL; ?>
/newvideos.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['any_time']; ?>
</a></li>
				<li><a href="<?php echo @_URL; ?>
/newvideos.<?php echo @_FEXT; ?>
?d=today"><?php echo $this->_tpl_vars['lang']['today']; ?>
</a></li>
				<li><a href="<?php echo @_URL; ?>
/newvideos.<?php echo @_FEXT; ?>
?d=yesterday"><?php echo $this->_tpl_vars['lang']['yesterday']; ?>
</a></li>
				<li><a href="<?php echo @_URL; ?>
/newvideos.<?php echo @_FEXT; ?>
?d=month"><?php echo $this->_tpl_vars['lang']['this_month']; ?>
</a></li>
			</ul>
			</div>
		</div>

		<ul class="row pm-ul-browse-videos list-unstyled" id="pm-grid">
		<?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
		</ul>
		<div class="clearfix"></div>

		
		<?php if ($this->_tpl_vars['empty_results']): ?>
			<p class="alert"><?php echo $this->_tpl_vars['lang']['nv_page_sorry_msg']; ?>
</p>
		<?php endif; ?>

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
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array('tpl_name' => "video-new")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>