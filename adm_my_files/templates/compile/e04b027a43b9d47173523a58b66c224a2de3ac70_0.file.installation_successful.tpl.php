<?php
/* Smarty version 4.4.1, created on 2024-12-19 11:31:45
  from 'C:\wamp64\www\admidio\adm_program\installation\templates\installation_successful.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6763d9f113da18_98940263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e04b027a43b9d47173523a58b66c224a2de3ac70' => 
    array (
      0 => 'C:\\wamp64\\www\\admidio\\adm_program\\installation\\templates\\installation_successful.tpl',
      1 => 1728504941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6763d9f113da18_98940263 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="installation-message">
    <h3><?php echo $_smarty_tpl->tpl_vars['l10n']->value->get("SYS_INSTALLATION_SUCCESSFUL");?>
</h3>

    <div class="alert alert-success form-alert">
        <i class="fas fa-check"></i>
        <strong><?php echo $_smarty_tpl->tpl_vars['l10n']->value->get('SYS_INSTALLATION_SUCCESSFUL_SHORT_DESC');?>
</strong>
    </div>

    <p>
        <?php echo $_smarty_tpl->tpl_vars['l10n']->value->get('SYS_INSTALLATION_SUCCESSFUL_DESC');?>
<br /><br />
        <?php echo $_smarty_tpl->tpl_vars['l10n']->value->get('INS_SUPPORT_FURTHER_DEVELOPMENT');?>

    </p>

    <p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
</div>
<?php }
}
