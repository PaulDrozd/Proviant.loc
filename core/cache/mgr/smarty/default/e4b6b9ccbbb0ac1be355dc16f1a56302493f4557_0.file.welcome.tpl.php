<?php /* Smarty version 3.1.27, created on 2017-04-13 11:30:31
         compiled from "/Users/PaulDrozdFair/Sites/proviant.loc/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:61581849058ef453719d1e5_58289589%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4b6b9ccbbb0ac1be355dc16f1a56302493f4557' => 
    array (
      0 => '/Users/PaulDrozdFair/Sites/proviant.loc/manager/templates/default/welcome.tpl',
      1 => 1490676186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61581849058ef453719d1e5_58289589',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58ef45371a72e1_84588211',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ef45371a72e1_84588211')) {
function content_58ef45371a72e1_84588211 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '61581849058ef453719d1e5_58289589';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>