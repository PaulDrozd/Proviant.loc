<?php /* Smarty version 3.1.27, created on 2017-04-13 11:30:14
         compiled from "/Users/PaulDrozdFair/Sites/proviant.loc/setup/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:179925243158ef4526175298_14196162%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d9d9d54826a3c46bb3b77442c0c561c5c49aacb' => 
    array (
      0 => '/Users/PaulDrozdFair/Sites/proviant.loc/setup/templates/footer.tpl',
      1 => 1490676194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179925243158ef4526175298_14196162',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58ef45261869e3_83146219',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ef45261869e3_83146219')) {
function content_58ef45261869e3_83146219 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/Users/PaulDrozdFair/Sites/proviant.loc/core/model/smarty/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '179925243158ef4526175298_14196162';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>