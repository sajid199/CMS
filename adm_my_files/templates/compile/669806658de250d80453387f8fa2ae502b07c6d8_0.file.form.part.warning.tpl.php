<?php
/* Smarty version 4.4.1, created on 2024-12-19 11:31:53
  from 'C:\wamp64\www\admidio\adm_themes\simple\templates\sys-template-parts\parts\form.part.warning.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6763d9f96b4a34_35983614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '669806658de250d80453387f8fa2ae502b07c6d8' => 
    array (
      0 => 'C:\\wamp64\\www\\admidio\\adm_themes\\simple\\templates\\sys-template-parts\\parts\\form.part.warning.tpl',
      1 => 1728504941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6763d9f96b4a34_35983614 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['alertWarning']->value) {?>
    <div class="alert alert-warning mt-3" role="alert">
        <i class="fas fa-exclamation-triangle"></i><?php echo $_smarty_tpl->tpl_vars['alertWarning']->value;?>

    </div>
<?php }
}
}
