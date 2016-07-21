<?php /* Smarty version 2.6.20, created on 2016-07-17 17:32:35
         compiled from video-tag.tpl */

$this->_cache_serials['/home/hipmatco/public_html/Smarty/templates_c/%%1E^1E4^1E476FA0%%video-tag.tpl.inc'] = '560ca24371a98c703d9fc9fda270abce';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'get_advanced_video_list', 'video-tag.tpl', 8, false),)), $this); ?>
<?php
function _smarty_tplfunc_560ca24371a98c703d9fc9fda270abce_0(&$_smarty)
{
echo smarty_get_advanced_video_list(array('assignto' => 'advanced_video_list','category_id' => $_smarty->_tpl_vars['cat_id'],'featured' => '1','limit' => 5), $_smarty);
}


function _smarty_tplfunc_560ca24371a98c703d9fc9fda270abce_1(&$_smarty)
{
echo smarty_get_advanced_video_list(array('assignto' => 'advanced_video_list','limit' => 7), $_smarty);
}



?>
