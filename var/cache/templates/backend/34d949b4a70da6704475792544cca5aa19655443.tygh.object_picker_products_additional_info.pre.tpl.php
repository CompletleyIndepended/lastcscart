<?php /* Smarty version Smarty-3.1.21, created on 2021-09-07 03:58:05
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_variations\hooks\products\object_picker_products_additional_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9158067666136b91d9d4e31-38820367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34d949b4a70da6704475792544cca5aa19655443' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\object_picker_products_additional_info.pre.tpl',
      1 => 1630972045,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9158067666136b91d9d4e31-38820367',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6136b91d9d6e29_44015232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6136b91d9d6e29_44015232')) {function content_6136b91d9d6e29_44015232($_smarty_tpl) {?>
    ${data.variation_features
        ? `<div class="product-variations__variation-features product-variations__variation-features--inline product-variations__variation-features--secondary">
            ${data.variation_features.map(feature => feature['variant']).join(' • ')}&nbsp;—&nbsp;
           </div>`
        : ''
    }
<?php }} ?>
