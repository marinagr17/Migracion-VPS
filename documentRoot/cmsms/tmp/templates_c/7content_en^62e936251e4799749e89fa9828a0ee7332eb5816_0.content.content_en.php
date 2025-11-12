<?php
/* Smarty version 4.5.5, created on 2025-11-06 13:38:18
  from 'content:content_en' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_690c96ba1d9bc6_72866360',
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
function content_690c96ba1d9bc6_72866360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cmsms/lib/plugins/function.cms_selflink.php','function'=>'smarty_function_cms_selflink',),));
?>
<p>There are three kinds of extensions, that can add many kinds of functionality to your default CMS Made Simple install. They are called tags, user defined tags, and modules.</p><h3>Tags</h3><p>Tags are the simplest form of extensions. They are designed to accomplish just one small and specific task.</p><p>There are a number of custom tags available with CMS Made Simple. To find what kind of tags are available look in Extensions &raquo; Tags in the Admin Panel.</p><p>To insert any of these in a template or a page, simply type e.g. <code>{content}</code>. Many of these Smarty tags are used as placeholders in a template, i.e. placeholders for content, navigation, breadcrumbs etc.</p><p>Website developers who have a bit of PHP experience will find it easy to create and share their own custom tags.</p><h3>User defined tags</h3><p>Users can also create their own tags to insert in templates or pages., these are called user defined tags. They are snippets of php code (but without the &lt;?php and ?&gt; surrounding them), providing the ability to add re-usable pieces of php functionality to your site. User defined tags are inserted in templates and pages just like tags: <code>{tagname}</code>.</p><p>Typically, user defined tags provide a utility that is special to a website, and likely won't need to be re-used on another site. Also they are typically small and used for simple tasks.</p><h3>Modules</h3><p>Modules are the highest level of plugin in the CMS Made Simple environment. They are designed to allow developers to implement complex tasks within CMSMS. A module typically provides advanced functionality, usually interacts with the database in complex ways, and may provide numerous reports or forms on the website. Additionally, a module may have an administrative interface to allow manipulating its data and its settings.</p><p>An extremely well defined API <em>(Application Programming Interface)</em> has been written to allow module developers to write complex, intricate, and fully functioning applications for use within a CMSMS powered website.</p><p>There are <?php echo smarty_function_cms_selflink(array('page'=>'modules','text'=>'a few modules included'),$_smarty_tpl);?>
 with the default installation of CMS Made Simple. Other popular modules are Frontend Users, Album, Calendar, Guestbook and Form Builder.</p><p>The ModuleManager module (included with CMS Made Simple) allows browsing a list of available modules, reading about them, and then installing them on your website.</p><p>To insert modules in a template or a page, you actually use the module name as a parameter to the <code>{cms_module}</code> tag. It looks like this: <code>{cms_module module='modulename' parameter1='this' parameter2=5 parameter3='that'}</code>. It is normal for modules to accept parameters to effect changes to their default behavior, though it is not always required.</p><h3>Read more</h3><p>You can read more about extensions in the <a class="external" href="http://docs.cmsmadesimple.org/modules/add-ons">CMSMS documentation</a>.</p><?php }
}
