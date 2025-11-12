<?php
/* Smarty version 4.5.5, created on 2025-11-06 13:23:36
  from 'cms_template:footer' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_690c9348015a15_41420467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f9121934ffea35012556d438b8c6e274617933c' => 
    array (
      0 => 'cms_template:footer',
      1 => '1762431753',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690c9348015a15_41420467 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cmsms/lib/plugins/function.cms_version.php','function'=>'smarty_function_cms_version',),));
?>
<p>&copy; Copyright <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['custom_copyright'][0], array( array(),$_smarty_tpl ) );?>
 - CMS Made Simple<br />
This site is powered by <a class="external" href="http://www.cmsmadesimple.org">CMS Made Simple</a> version <?php echo smarty_function_cms_version(array(),$_smarty_tpl);?>
</p><?php }
}
