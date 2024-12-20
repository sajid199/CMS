<?php
/* Smarty version 4.4.1, created on 2024-12-20 07:30:15
  from 'C:\wamp64\www\admidio\adm_themes\simple\templates\message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6764f2d790dc62_95541261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e7d56cdf364522d29f9bc936923ab96cc062830' => 
    array (
      0 => 'C:\\wamp64\\www\\admidio\\adm_themes\\simple\\templates\\message.tpl',
      1 => 1728504941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6764f2d790dc62_95541261 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="message admidio-max-with">
    <p class="lead"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>

    <?php if ($_smarty_tpl->tpl_vars['url']->value != '') {?>
        <?php if ($_smarty_tpl->tpl_vars['showYesNoButtons']->value) {?>
            <button id="admButtonYes" class="btn btn-primary" type="button" onclick="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
                <i class="fas fa-check-circle"></i>
                &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['l10n']->value->get("SYS_YES");?>
&nbsp;&nbsp;&nbsp;
            </button>
            <button id="admButtonNo" class="btn btn-secondary" type="button" onclick="history.back()">
                <i class="fas fa-minus-circle"></i>
                &nbsp;<?php echo $_smarty_tpl->tpl_vars['l10n']->value->get("SYS_NO");?>

            </button>
        <?php } else { ?>
                        <button class="btn btn-primary admidio-margin-bottom" onclick="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['l10n']->value->get("SYS_NEXT");?>

                <i class="fas fa-arrow-circle-right"></i>
            </button>
        <?php }?>
    <?php } else { ?>
                <button class="btn btn-primary admidio-margin-bottom" onclick="history.back()">
            <i class="fas fa-arrow-circle-left"></i>
            <?php echo $_smarty_tpl->tpl_vars['l10n']->value->get("SYS_BACK");?>

        </button>
    <?php }?>
</div>
<?php }
}
