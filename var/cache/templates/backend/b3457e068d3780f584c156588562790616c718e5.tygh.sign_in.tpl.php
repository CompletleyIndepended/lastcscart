<?php /* Smarty version Smarty-3.1.21, created on 2021-09-07 02:55:32
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\buttons\sign_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10628969526136aa7422ddb0-74866619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3457e068d3780f584c156588562790616c718e5' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\buttons\\sign_in.tpl',
      1 => 1630972045,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10628969526136aa7422ddb0-74866619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6136aa7424ccf7_56790784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6136aa7424ccf7_56790784')) {function content_6136aa7424ccf7_56790784($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sign_in'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("sign_in"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_arrow'=>"on",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>
<?php }} ?>
