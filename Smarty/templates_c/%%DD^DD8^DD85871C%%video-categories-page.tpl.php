<?php /* Smarty version 2.6.20, created on 2016-07-18 22:38:17
         compiled from video-categories-page.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'video-categories-page.tpl', 24, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('p' => 'general','tpl_name' => "video-categories-page")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="category-header" class="container-fluid">
	<div class="pm-category-highlight animated fadeInLeft">
	<h1><?php echo $this->_tpl_vars['lang']['_categories']; ?>
</h1>
	</div>
</div>
<div id="content">
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		<div class="pm-section-head">
			
		</div>

		<ul class="pm-ul-browse-categories list-unstyled thumbnails">
		<?php $_from = $this->_tpl_vars['categories_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['category_data']):
?>
			<?php if ($this->_tpl_vars['category_data']['parent_id'] == 0): ?>
			<li>
				<div class="pm-li-category">
				<a href="<?php echo $this->_tpl_vars['category_data']['url']; ?>
">
					<span class="pm-video-thumb pm-thumb-234 pm-thumb">
						<div class="pm-thumb-fix pm-thumb-234"><span class="pm-thumb-fix-clip"><img src="<?php echo $this->_tpl_vars['category_data']['image_url']; ?>
" alt="<?php echo $this->_tpl_vars['category_data']['attr_alt']; ?>
" width="234"><span class="vertical-align"></span></span></div>
					</span>
					<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['category_data']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 32) : smarty_modifier_truncate($_tmp, 32)); ?>
</h3>
				</a>
				</div>
			</li>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		</ul>
		</div><!-- #content -->
	  </div><!-- .row -->
	</div><!-- .container -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array('tpl_name' => "video-categories-page")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>