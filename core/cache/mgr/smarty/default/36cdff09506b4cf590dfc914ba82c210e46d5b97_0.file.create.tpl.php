<?php /* Smarty version 3.1.27, created on 2017-04-13 13:04:21
         compiled from "/Users/PaulDrozdFair/Sites/proviant.loc/manager/templates/default/element/chunk/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:114393535958ef5b35351247_33509841%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36cdff09506b4cf590dfc914ba82c210e46d5b97' => 
    array (
      0 => '/Users/PaulDrozdFair/Sites/proviant.loc/manager/templates/default/element/chunk/create.tpl',
      1 => 1490676176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114393535958ef5b35351247_33509841',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58ef5b3535dee7_71842383',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ef5b3535dee7_71842383')) {
function content_58ef5b3535dee7_71842383 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '114393535958ef5b35351247_33509841';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>