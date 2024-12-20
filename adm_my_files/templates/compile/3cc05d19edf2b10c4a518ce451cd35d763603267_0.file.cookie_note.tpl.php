<?php
/* Smarty version 4.4.1, created on 2024-12-19 11:31:51
  from 'C:\wamp64\www\admidio\adm_themes\simple\templates\cookie_note.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6763d9f7cea9f7_22343837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cc05d19edf2b10c4a518ce451cd35d763603267' => 
    array (
      0 => 'C:\\wamp64\\www\\admidio\\adm_themes\\simple\\templates\\cookie_note.tpl',
      1 => 1728504941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6763d9f7cea9f7_22343837 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['urlAdmidio']->value;?>
/adm_program/libs/client/cookieconsent/cookieconsent.min.css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['urlAdmidio']->value;?>
/adm_program/libs/client/cookieconsent/cookieconsent.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    window.addEventListener("load", function() {
        window.cookieconsent.initialise({
            "cookie": {
                "name": "<?php echo $_smarty_tpl->tpl_vars['cookiePrefix']->value;?>
_cookieconsent_status",
                "domain": "<?php echo $_smarty_tpl->tpl_vars['cookieDomain']->value;?>
",
                "path": "<?php echo $_smarty_tpl->tpl_vars['cookiePath']->value;?>
"
            },
            "content": {
                "message": "<?php echo $_smarty_tpl->tpl_vars['l10n']->value->get('SYS_COOKIE_DESC');?>
",
                "dismiss": "<?php echo $_smarty_tpl->tpl_vars['l10n']->value->get('SYS_OK');?>
",
                <?php echo $_smarty_tpl->tpl_vars['cookieDataProtectionUrl']->value;?>

                "link": "<?php echo $_smarty_tpl->tpl_vars['l10n']->value->get('SYS_FURTHER_INFORMATIONS');?>
"
            },
            "position": "bottom",
            "theme": "classic",
            "palette": {
                "popup": {
                    "background": "#252e39"
                },
                "button": {
                    "background": "#409099"
                }
            }
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
