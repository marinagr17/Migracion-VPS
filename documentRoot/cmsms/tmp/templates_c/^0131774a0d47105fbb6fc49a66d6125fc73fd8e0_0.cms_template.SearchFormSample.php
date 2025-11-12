<?php
/* Smarty version 4.5.5, created on 2025-11-06 13:23:35
  from 'cms_template:Search Form Sample' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_690c9347f0b7a7_05194653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0131774a0d47105fbb6fc49a66d6125fc73fd8e0' => 
    array (
      0 => 'cms_template:Search Form Sample',
      1 => '1762431762',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690c9347f0b7a7_05194653 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['startform']->value;?>

<label for="<?php echo $_smarty_tpl->tpl_vars['search_actionid']->value;?>
searchinput"><?php echo $_smarty_tpl->tpl_vars['searchprompt']->value;?>
:&nbsp;</label><input type="text" class="search-input" id="<?php echo $_smarty_tpl->tpl_vars['search_actionid']->value;?>
searchinput" name="<?php echo $_smarty_tpl->tpl_vars['search_actionid']->value;?>
searchinput" size="20" maxlength="50" placeholder="<?php echo $_smarty_tpl->tpl_vars['searchtext']->value;?>
"/>
<input class="search-button" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['submittext']->value;?>
" type="submit" />
<?php if ((isset($_smarty_tpl->tpl_vars['hidden']->value))) {
echo $_smarty_tpl->tpl_vars['hidden']->value;
}
echo $_smarty_tpl->tpl_vars['endform']->value;
}
}
