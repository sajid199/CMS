<?php
/* Smarty version 4.4.1, created on 2024-12-19 11:31:53
  from 'C:\wamp64\www\admidio\adm_themes\simple\templates\sys-template-parts\parts\form.part.icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6763d9f923b0e6_77160064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e37783f0068a17b1a0fd8647707dae98ba2ebb2' => 
    array (
      0 => 'C:\\wamp64\\www\\admidio\\adm_themes\\simple\\templates\\sys-template-parts\\parts\\form.part.icon.tpl',
      1 => 1728504941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6763d9f923b0e6_77160064 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['icon']->value) {?>
    <?php if (Image::isFontAwesomeIcon($_smarty_tpl->tpl_vars['icon']->value)) {?>
        <i class="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
 fas" <?php if ((isset($_smarty_tpl->tpl_vars['label']->value))) {?>data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
"<?php }?>></i>
    <?php } else { ?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['label']->value))) {?>alt="<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
"<?php }?> />
    <?php }
}
}
}
