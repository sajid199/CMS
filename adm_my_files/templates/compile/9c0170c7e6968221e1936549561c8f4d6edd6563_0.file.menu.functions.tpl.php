<?php
/* Smarty version 4.4.1, created on 2024-12-19 11:31:52
  from 'C:\wamp64\www\admidio\adm_themes\simple\templates\sys-template-parts\menu.functions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6763d9f828a202_15113953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c0170c7e6968221e1936549561c8f4d6edd6563' => 
    array (
      0 => 'C:\\wamp64\\www\\admidio\\adm_themes\\simple\\templates\\sys-template-parts\\menu.functions.tpl',
      1 => 1728504941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6763d9f828a202_15113953 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="nav admidio-menu-function-node">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuFunctions']->value, 'menuItem');
$_smarty_tpl->tpl_vars['menuItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->value) {
$_smarty_tpl->tpl_vars['menuItem']->do_else = false;
?>
        <?php if (array_key_exists('items',$_smarty_tpl->tpl_vars['menuItem']->value)) {?>
            <li class="nav-item dropdown">
                <a id="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value['id'];?>
" class="nav-link btn btn-secondary dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value['icon'];?>
 fa-fw"></i><?php echo $_smarty_tpl->tpl_vars['menuItem']->value['name'];?>

                </a>
                <div class="dropdown-menu dropdown-menu-left">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuItem']->value['items'], 'subItem');
$_smarty_tpl->tpl_vars['subItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subItem']->value) {
$_smarty_tpl->tpl_vars['subItem']->do_else = false;
?>
                        <a id="<?php echo $_smarty_tpl->tpl_vars['subItem']->value['id'];?>
" class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['subItem']->value['url'];?>
">
                            <i class="<?php echo $_smarty_tpl->tpl_vars['subItem']->value['icon'];?>
 fa-fw"></i><?php echo $_smarty_tpl->tpl_vars['subItem']->value['name'];?>

                        </a>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </li>
        <?php } else { ?>
            <li class="nav-item">
                <a id="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value['id'];?>
" class="nav-link btn btn-secondary" href="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value['url'];?>
">
                    <i class="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value['icon'];?>
 fa-fw"></i><?php echo $_smarty_tpl->tpl_vars['menuItem']->value['name'];?>

                    <?php if ($_smarty_tpl->tpl_vars['menuItem']->value['badgeCount'] > 0) {?>
                        <span class="badge bg-light text-dark"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value['badgeCount'];?>
</span>
                    <?php }?>
                </a>
            </li>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
