<?php
/* Smarty version 4.4.1, created on 2024-12-19 11:31:52
  from 'C:\wamp64\www\admidio\adm_themes\simple\templates\overview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6763d9f86b1da3_41790515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '844b9fe33402ae128da917f3b49d99ffcec99b81' => 
    array (
      0 => 'C:\\wamp64\\www\\admidio\\adm_themes\\simple\\templates\\overview.tpl',
      1 => 1728504941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6763d9f86b1da3_41790515 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\admidio\\adm_program\\system\\smarty-plugins\\function.load_admidio_plugin.php','function'=>'smarty_function_load_admidio_plugin',),));
?>

<div class="row mb-5">
    <div class="admidio-overview-plugin col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-login-form">
        <div class="card admidio-card">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"login_form",'file'=>"login_form.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
    <div class="admidio-overview-plugin col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-birthday">
        <div class="card admidio-card">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"birthday",'file'=>"birthday.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
    <div class="admidio-overview-plugin col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-calendar">
        <div class="card admidio-card">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"calendar",'file'=>"calendar.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
    <div class="admidio-overview-plugin col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-random-photo">
        <div class="card admidio-card">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"random_photo",'file'=>"random_photo.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
    <div class="admidio-overview-plugin col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-latest-documents-files">
        <div class="card admidio-card">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"latest-documents-files",'file'=>"latest-documents-files.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
    <div class="admidio-overview-plugin col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-announcement-list">
        <div class="card admidio-card">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"announcement-list",'file'=>"announcement-list.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
    <div class="admidio-overview-plugin col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-event-list">
        <div class="card admidio-card">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"event-list",'file'=>"event-list.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
    <div class="admidio-overview-plugin col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-who-is-online">
        <div class="card admidio-card">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"who-is-online",'file'=>"who-is-online.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
</div>
<?php }
}
