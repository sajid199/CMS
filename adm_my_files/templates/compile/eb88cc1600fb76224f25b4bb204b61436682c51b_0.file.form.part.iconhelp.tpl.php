<?php
/* Smarty version 4.4.1, created on 2024-12-19 09:26:44
  from 'C:\wamp64\www\admidio\adm_program\installation\templates\sys-template-parts\parts\form.part.iconhelp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6763d8c415fea3_46065743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb88cc1600fb76224f25b4bb204b61436682c51b' => 
    array (
      0 => 'C:\\wamp64\\www\\admidio\\adm_program\\installation\\templates\\sys-template-parts\\parts\\form.part.iconhelp.tpl',
      1 => 1728504941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6763d8c415fea3_46065743 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['helpTextIdLabel']->value) {?>
    <?php if (Language::isTranslationStringId($_smarty_tpl->tpl_vars['helpTextIdLabel']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('helpTextIdLabel', $_smarty_tpl->tpl_vars['l10n']->value->get($_smarty_tpl->tpl_vars['helpTextIdLabel']->value));?>
    <?php }?>
    <i class="fas fa-info-circle admidio-info-icon" data-toggle="popover"
    data-html="true" data-trigger="hover click" data-placement="auto"
    title="<?php echo $_smarty_tpl->tpl_vars['l10n']->value->get('SYS_NOTE');?>
" data-content="<?php echo SecurityUtils::encodeHTML($_smarty_tpl->tpl_vars['helpTextIdLabel']->value);?>
"></i>
<?php }
}
}
