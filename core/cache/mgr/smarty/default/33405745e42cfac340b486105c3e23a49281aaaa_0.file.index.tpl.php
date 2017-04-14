<?php /* Smarty version 3.1.27, created on 2017-04-13 11:30:40
         compiled from "/Users/PaulDrozdFair/Sites/proviant.loc/manager/templates/default/workspaces/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:98437539658ef4540039304_33693084%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33405745e42cfac340b486105c3e23a49281aaaa' => 
    array (
      0 => '/Users/PaulDrozdFair/Sites/proviant.loc/manager/templates/default/workspaces/index.tpl',
      1 => 1490676186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98437539658ef4540039304_33693084',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58ef4540046e69_31922711',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ef4540046e69_31922711')) {
function content_58ef4540046e69_31922711 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '98437539658ef4540039304_33693084';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>