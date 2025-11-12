<?php
/* Smarty version 4.5.5, created on 2025-11-06 13:35:49
  from 'content:content_en' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_690c96253f4515_28848975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62e936251e4799749e89fa9828a0ee7332eb5816' => 
    array (
      0 => 'content:content_en',
      1 => 1762428153,
      2 => 'content',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690c96253f4515_28848975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cmsms/lib/plugins/function.cms_selflink.php','function'=>'smarty_function_cms_selflink',),));
?>
<p>There are six modules that come with the default installation of CMS Made Simple. On the following pages we explain how these are used. Click on each module name in the menu to the left or in the list below.</p><p>To insert a module in a template or a page you normally use the <code>{cms_module}</code> tag with the module name as one of the parameters. But to simplify things, all core modules also have a tag wrapper, so that they are called simple by their name, like <code>{news}</code>.</p><ul><li><?php echo smarty_function_cms_selflink(array('page'=>'news','text'=>'News'),$_smarty_tpl);?>
</li><li><?php echo smarty_function_cms_selflink(array('page'=>'menu-manager-2','text'=>'Menu Manager'),$_smarty_tpl);?>
</li><li><?php echo smarty_function_cms_selflink(array('page'=>'theme-manager','text'=>'Theme Manager'),$_smarty_tpl);?>
</li><li><?php echo smarty_function_cms_selflink(array('page'=>'microtiny','text'=>'MicroTiny'),$_smarty_tpl);?>
</li><li><?php echo smarty_function_cms_selflink(array('page'=>'search','text'=>'Search'),$_smarty_tpl);?>
</li><li><?php echo smarty_function_cms_selflink(array('page'=>'module-manager','text'=>'Module Manager'),$_smarty_tpl);?>
</li></ul><?php }
}
