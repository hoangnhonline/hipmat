<?php /* Smarty version 2.6.20, created on 2016-07-18 11:06:34
         compiled from modal-info-terms.tpl */ ?>
<!-- Modal -->
<div class="modal" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><?php echo $this->_tpl_vars['lang']['toa']; ?>
</h4>
			</div>
			<div class="modal-body">
				<?php if ($this->_tpl_vars['terms_page']['content'] != ''): ?>
					<?php echo $this->_tpl_vars['terms_page']['content']; ?>

				<?php else: ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'terms.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>