<?php /* Smarty version 2.6.20, created on 2016-07-18 00:41:35
         compiled from video-category.tpl */

$this->_cache_serials['/home/hipmatco/public_html/Smarty/templates_c/%%4A^4A9^4A98FFB8%%video-category.tpl.inc'] = 'acc60d3d37b247a7c2445573bac6d22c';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'get_advanced_video_list', 'video-category.tpl', 8, false),)), $this); ?>
<?php
function _smarty_tplfunc_acc60d3d37b247a7c2445573bac6d22c_0(&$_smarty)
{
echo smarty_get_advanced_video_list(array('assignto' => 'advanced_video_list','category_id' => $_smarty->_tpl_vars['cat_id'],'featured' => '1','limit' => 5), $_smarty);
}


function _smarty_tplfunc_acc60d3d37b247a7c2445573bac6d22c_1(&$_smarty)
{
echo smarty_get_advanced_video_list(array('assignto' => 'advanced_video_list','category_id' => $_smarty->_tpl_vars['cat_id'],'order_by' => 'site_views','days_ago' => 12,'limit' => 6), $_smarty);
}



?>
