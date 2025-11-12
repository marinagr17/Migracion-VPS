<?php
/* Smarty version 4.5.5, created on 2025-11-06 13:41:38
  from '/var/www/cmsms/admin/themes/OneEleven/templates/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_690c97820cf1f7_04259508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '463f42c36a14b6c9c99b56dd17983162f07a159e' => 
    array (
      0 => '/var/www/cmsms/admin/themes/OneEleven/templates/footer.tpl',
      1 => 1762431686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690c97820cf1f7_04259508 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cmsms/lib/plugins/function.cms_version.php','function'=>'smarty_function_cms_version',),1=>array('file'=>'/var/www/cmsms/lib/plugins/function.cms_versionname.php','function'=>'smarty_function_cms_versionname',),));
?>
<footer id="oe_footer" class="cf"><div class="footer-left"><small class="copyright">Copyright &copy; <a rel="external" href="http://www.cmsmadesimple.org">CMS Made Simple&trade; <?php echo smarty_function_cms_version(array(),$_smarty_tpl);?>
 &ldquo;<?php echo smarty_function_cms_versionname(array(),$_smarty_tpl);?>
&rdquo;</a></small></div><div class="footer-right cf"><ul class="links"><li><a href="https://docs.cmsmadesimple.org/" rel="external" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'lang' ][ 0 ], array( 'documentation' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'lang' ][ 0 ], array( 'documentation' ));?>
</a></li><li><a href="https://forum.cmsmadesimple.org/" rel="external" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'lang' ][ 0 ], array( 'forums' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'lang' ][ 0 ], array( 'forums' ));?>
</a></li><li><a href="http://www.cmsmadesimple.org/about-link/" rel="external" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'lang' ][ 0 ], array( 'about' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'lang' ][ 0 ], array( 'about' ));?>
</a></li><li><a href="http://www.cmsmadesimple.org/about-link/about-us/" rel="external" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'lang' ][ 0 ], array( 'team' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'lang' ][ 0 ], array( 'team' ));?>
</a></li></ul></div></footer><?php }
}
