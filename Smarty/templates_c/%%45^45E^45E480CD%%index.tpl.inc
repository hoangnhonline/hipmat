<?php /* Smarty version 2.6.20, created on 2016-07-18 00:41:16
         compiled from index.tpl */

$this->_cache_serials['/home/hipmatco/public_html/Smarty/templates_c/%%45^45E^45E480CD%%index.tpl.inc'] = '5f3d33fe56d5a0f60965d741b0bc10bb';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'get_advanced_video_list', 'index.tpl', 9, false),array('function', 'smarty_fewchars', 'index.tpl', 62, false),array('function', 'dropdown_menu_video_categories', 'index.tpl', 461, false),)), $this); ?>
<?php
function _smarty_tplfunc_5f3d33fe56d5a0f60965d741b0bc10bb_0(&$_smarty)
{
echo smarty_get_advanced_video_list(array('assignto' => 'advanced_video_list','tag' => 'Hot','limit' => 9), $_smarty);
}


function _smarty_tplfunc_5f3d33fe56d5a0f60965d741b0bc10bb_1(&$_smarty)
{
echo smarty_get_advanced_video_list(array('assignto' => 'advanced_video_list','category_id' => 4,'limit' => 6), $_smarty);
}


function _smarty_tplfunc_5f3d33fe56d5a0f60965d741b0bc10bb_2(&$_smarty)
{
echo smarty_get_advanced_video_list(array('assignto' => 'advanced_video_list','category_id' => 10,'limit' => 6), $_smarty);
}


function _smarty_tplfunc_5f3d33fe56d5a0f60965d741b0bc10bb_3(&$_smarty)
{
echo smarty_get_advanced_video_list(array('assignto' => 'advanced_video_list','category_id' => 7,'limit' => 6), $_smarty);
}


function _smarty_tplfunc_5f3d33fe56d5a0f60965d741b0bc10bb_4(&$_smarty)
{
echo smarty_get_advanced_video_list(array('assignto' => 'advanced_video_list','category_id' => 9,'limit' => 6), $_smarty);
}


function _smarty_tplfunc_5f3d33fe56d5a0f60965d741b0bc10bb_5(&$_smarty)
{
echo smarty_get_advanced_video_list(array('assignto' => 'advanced_video_list','category_id' => $_smarty->_tpl_vars['category_id_anhtai'],'order_by' => 'site_views','days_ago' => 30,'limit' => 12), $_smarty);
}



?>
