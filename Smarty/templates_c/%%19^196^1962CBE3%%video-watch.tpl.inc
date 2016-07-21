<?php /* Smarty version 2.6.20, created on 2016-07-18 00:41:23
         compiled from video-watch.tpl */

$this->_cache_serials['/home/hipmatco/public_html/Smarty/templates_c/%%19^196^1962CBE3%%video-watch.tpl.inc'] = '517486b5a9c179040efa7049a3710b98';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'echo_securimage_sid', 'video-watch.tpl', 195, false),array('function', 'get_advanced_video_list', 'video-watch.tpl', 305, false),array('function', 'smarty_fewchars', 'video-watch.tpl', 398, false),)), $this); ?>
<?php
function _smarty_tplfunc_517486b5a9c179040efa7049a3710b98_0(&$_smarty)
{
echo smarty_get_advanced_video_list(array('assignto' => 'advanced_video_list','category_id' => $_smarty->_tpl_vars['category_id_anhtai'],'limit' => 3,'featured' => '0'), $_smarty);
}


function _smarty_tplfunc_517486b5a9c179040efa7049a3710b98_1(&$_smarty)
{
echo smarty_get_advanced_video_list(array('assignto' => 'advanced_video_list','category_id' => $_smarty->_tpl_vars['category_id_anhtai'],'limit' => 6,'featured' => '1'), $_smarty);
}


function _smarty_tplfunc_517486b5a9c179040efa7049a3710b98_2(&$_smarty)
{
echo smarty_get_advanced_video_list(array('assignto' => 'advanced_video_list','category_id' => $_smarty->_tpl_vars['category_id_anhtai'],'order_by' => 'site_views','days_ago' => 12,'limit' => 6), $_smarty);
}



?>
