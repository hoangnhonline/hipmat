<?php /* Smarty version 2.6.20, created on 2016-07-18 22:39:32
         compiled from video-tag.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('p' => 'general')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<div id="category-header" class="container-fluid pm-search-videos-page">
	<div class="pm-category-highlight animated fadeInLeft">
		<h1><i class="mico mico-search"></i> <?php echo $this->_tpl_vars['lang']['search_results']; ?>
<?php if (is_array ( $this->_tpl_vars['results'] )): ?>: <mark><?php echo $this->_tpl_vars['searchstring']; ?>
</mark><?php endif; ?></h1>
	</div>
</div>
<div id="content">
	<div class="container-fluid">
	  <div class="row">
		<div class="col-md-12">
			<div class="pm-section-head">
			<h1><?php echo $this->_tpl_vars['lang']['search_results']; ?>
<?php if (is_array ( $this->_tpl_vars['results'] )): ?>: "<span class="pm-yellow-marker"><?php echo $this->_tpl_vars['searchstring']; ?>
</span>"<?php endif; ?></h1>
			<div class="btn-group btn-group-sort">
			<button class="btn btn-default" id="show-grid"><i class="fa fa-th"></i> </button>
			<button class="btn btn-default" id="show-list"><i class="fa fa-th-list"></i></button>
			</div>
			</div>
			
			<?php echo $this->_tpl_vars['error_msg']; ?>

			<?php echo $this->_tpl_vars['total_results']; ?>


			<?php if (is_array ( $this->_tpl_vars['results'] )): ?>
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
			<?php endforeach; endif; unset($_from); ?>
			</ul>
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
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>