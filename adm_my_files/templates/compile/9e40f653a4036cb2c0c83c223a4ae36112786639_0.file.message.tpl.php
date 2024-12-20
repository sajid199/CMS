<?php
/* Smarty version 4.4.1, created on 2024-12-19 09:27:48
  from 'C:\wamp64\www\admidio\adm_program\installation\templates\message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6763d904e797d4_23708722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e40f653a4036cb2c0c83c223a4ae36112786639' => 
    array (
      0 => 'C:\\wamp64\\www\\admidio\\adm_program\\installation\\templates\\message.tpl',
      1 => 1728504941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6763d904e797d4_23708722 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="installation-message">
    <h3><?php echo $_smarty_tpl->tpl_vars['messageHeadline']->value;?>
</h3>

    <?php if ($_smarty_tpl->tpl_vars['outputMode']->value == "error") {?>
        <p><?php echo $_smarty_tpl->tpl_vars['l10n']->value->get("SYS_PROCESSING_ERROR_DESC");?>
</p>
        <p>
            <div class="alert alert-danger alert-small" role="alert">
                <i class="fas fa-exclamation-circle"></i>
                <strong><?php echo $_smarty_tpl->tpl_vars['messageText']->value;?>
</strong>
            </div>
        </p>
    <?php } elseif ($_smarty_tpl->tpl_vars['outputMode']->value == "success") {?>
        <p>
            <div class="alert alert-success alert-small" role="alert">
                <i class="fas fa-check"></i>
                <strong><?php echo $_smarty_tpl->tpl_vars['messageText']->value;?>
</strong>
            </div>
        </p>
    <?php }?>

    <p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
</div>
<?php }
}
