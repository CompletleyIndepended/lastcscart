<?php /* Smarty version Smarty-3.1.21, created on 2021-09-07 03:17:51
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\buttons\add_empty_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19162962586136afaf225ea8-46810261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0a99510a4dbe53486de2687c8ca7cf26aa651c9' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\buttons\\add_empty_item.tpl',
      1 => 1630972045,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19162962586136afaf225ea8-46810261',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_id' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6136afaf22ade6_38967635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6136afaf22ade6_38967635')) {function content_6136afaf22ade6_38967635($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add'));
?>
<a class="btn btn-add" name="add" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add");?>
</a>&nbsp;<?php }} ?>
