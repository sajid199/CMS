<?php
/* Smarty version 4.4.1, created on 2024-12-19 09:26:44
  from 'C:\wamp64\www\admidio\adm_program\installation\templates\sys-template-parts\form.button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6763d8c44fca64_17600984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0c5658983c0250bc5b70012f287420081b1f135' => 
    array (
      0 => 'C:\\wamp64\\www\\admidio\\adm_program\\installation\\templates\\sys-template-parts\\form.button.tpl',
      1 => 1728504941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sys-template-parts/parts/form.part.icon.tpl' => 1,
  ),
),false)) {
function content_6763d8c44fca64_17600984 (Smarty_Internal_Template $_smarty_tpl) {
?><button
    id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
    name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>onclick="self.location.href='<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
'" <?php }?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['attributes'], 'itemvar');
$_smarty_tpl->tpl_vars['itemvar']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemvar']->key => $_smarty_tpl->tpl_vars['itemvar']->value) {
$_smarty_tpl->tpl_vars['itemvar']->do_else = false;
$__foreach_itemvar_2_saved = $_smarty_tpl->tpl_vars['itemvar'];
?>
        <?php echo $_smarty_tpl->tpl_vars['itemvar']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['itemvar']->value;?>
"
    <?php
$_smarty_tpl->tpl_vars['itemvar'] = $__foreach_itemvar_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
>
<?php $_smarty_tpl->_subTemplateRender('file:sys-template-parts/parts/form.part.icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo $_smarty_tpl->tpl_vars['value']->value;?>

</button>



<?php }
}
