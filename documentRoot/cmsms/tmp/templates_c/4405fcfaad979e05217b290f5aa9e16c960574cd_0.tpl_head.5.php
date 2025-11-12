<?php
/* Smarty version 4.5.5, created on 2025-11-06 13:23:36
  from 'tpl_head:5' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_690c9348019442_00402050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4405fcfaad979e05217b290f5aa9e16c960574cd' => 
    array (
      0 => 'tpl_head:5',
      1 => '1762431753',
      2 => 'tpl_head',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690c9348019442_00402050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cmsms/lib/plugins/function.sitename.php','function'=>'smarty_function_sitename',),1=>array('file'=>'/var/www/cmsms/lib/plugins/function.title.php','function'=>'smarty_function_title',),2=>array('file'=>'/var/www/cmsms/lib/plugins/function.metadata.php','function'=>'smarty_function_metadata',),3=>array('file'=>'/var/www/cmsms/lib/plugins/function.cms_stylesheet.php','function'=>'smarty_function_cms_stylesheet',),4=>array('file'=>'/var/www/cmsms/lib/plugins/function.cms_selflink.php','function'=>'smarty_function_cms_selflink',),));
?>
<head>
    <title><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_title(array(),$_smarty_tpl);?>
</title>

 <?php echo smarty_function_metadata(array(),$_smarty_tpl);?>


 <?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>


 <?php echo smarty_function_cms_selflink(array('dir'=>"start",'rellink'=>1),$_smarty_tpl);?>

 <?php echo smarty_function_cms_selflink(array('dir'=>"prev",'rellink'=>1),$_smarty_tpl);?>

 <?php echo smarty_function_cms_selflink(array('dir'=>"next",'rellink'=>1),$_smarty_tpl);?>


 
<?php echo '<script'; ?>
 type="text/JavaScript">
<!--
//pass min and max - measured against window width
function P7_MinMaxW(a,b){
var nw="auto",w=document.documentElement.clientWidth;
if(w>=b){nw=b+"px";}if(w<=a){nw=a+"px";}return nw;
}
//-->
<?php echo '</script'; ?>
>
    <!--[if lte IE 6]>
    <style type="text/css">
    #pagewrapper {width:expression(P7_MinMaxW(720,1200));}
    #container {height: 1%;}
    </style>
    <![endif]-->
    

  </head><?php }
}
