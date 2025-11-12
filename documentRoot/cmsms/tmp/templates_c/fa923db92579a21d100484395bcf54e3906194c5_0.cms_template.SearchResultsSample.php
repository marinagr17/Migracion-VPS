<?php
/* Smarty version 4.5.5, created on 2025-11-06 13:37:02
  from 'cms_template:Search Results Sample' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_690c966e3a96e5_02160884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa923db92579a21d100484395bcf54e3906194c5' => 
    array (
      0 => 'cms_template:Search Results Sample',
      1 => '1762431762',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690c966e3a96e5_02160884 (Smarty_Internal_Template $_smarty_tpl) {
?><h3><?php echo $_smarty_tpl->tpl_vars['searchresultsfor']->value;?>
 &quot;<?php echo $_smarty_tpl->tpl_vars['phrase']->value;?>
&quot;</h3>
<?php if ($_smarty_tpl->tpl_vars['itemcount']->value > 0) {?>
<ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
?>
  <li><?php echo $_smarty_tpl->tpl_vars['entry']->value->title;?>
 - <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value->urltxt;?>
</a> (<?php echo $_smarty_tpl->tpl_vars['entry']->value->weight;?>
%)</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<p><?php echo $_smarty_tpl->tpl_vars['timetaken']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['timetook']->value;?>
</p>
<?php } else { ?>
  <p><strong><?php echo $_smarty_tpl->tpl_vars['noresultsfound']->value;?>
</strong></p>
<?php }
}
}
