<?php
/* Smarty version 4.4.1, created on 2024-12-19 11:32:03
  from 'C:\wamp64\www\admidio\adm_themes\simple\templates\sys-template-parts\form.static.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6763da03d8f9d6_37317915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '072b6ee19d6057d6ac014ea969a19e5789939649' => 
    array (
      0 => 'C:\\wamp64\\www\\admidio\\adm_themes\\simple\\templates\\sys-template-parts\\form.static.tpl',
      1 => 1728504941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sys-template-parts/parts/form.part.icon.tpl' => 1,
    'file:sys-template-parts/parts/form.part.iconhelp.tpl' => 1,
    'file:sys-template-parts/parts/form.part.helptext.tpl' => 1,
    'file:sys-template-parts/parts/form.part.warning.tpl' => 1,
  ),
),false)) {
function content_6763da03d8f9d6_37317915 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_group" class="form-group <?php if ($_smarty_tpl->tpl_vars['data']->value['formtype'] != 'vertical' && $_smarty_tpl->tpl_vars['data']->value['formtype'] != 'navbar') {?>row<?php }?> <?php if ($_smarty_tpl->tpl_vars['property']->value == 1) {?>admidio-form-group-required<?php }?>">
    <label for="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="<?php if ($_smarty_tpl->tpl_vars['data']->value['formtype'] != 'vertical' && $_smarty_tpl->tpl_vars['data']->value['formtype'] != 'navbar') {?>col-sm-3<?php }?> control-label">
        <?php $_smarty_tpl->_subTemplateRender('file:sys-template-parts/parts/form.part.icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php echo $_smarty_tpl->tpl_vars['label']->value;?>

        <?php $_smarty_tpl->_subTemplateRender('file:sys-template-parts/parts/form.part.iconhelp.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </label>
    <div class="<?php if ($_smarty_tpl->tpl_vars['data']->value['formtype'] != 'vertical' && $_smarty_tpl->tpl_vars['data']->value['formtype'] != 'navbar') {?>col-sm-9<?php }?>">
        <p <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['attributes'], 'itemvar');
$_smarty_tpl->tpl_vars['itemvar']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemvar']->key => $_smarty_tpl->tpl_vars['itemvar']->value) {
$_smarty_tpl->tpl_vars['itemvar']->do_else = false;
$__foreach_itemvar_0_saved = $_smarty_tpl->tpl_vars['itemvar'];
?>
        <?php echo $_smarty_tpl->tpl_vars['itemvar']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['itemvar']->value;?>
" <?php
$_smarty_tpl->tpl_vars['itemvar'] = $__foreach_itemvar_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</p>

        <?php $_smarty_tpl->_subTemplateRender('file:sys-template-parts/parts/form.part.helptext.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:sys-template-parts/parts/form.part.warning.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>
<?php }
}
