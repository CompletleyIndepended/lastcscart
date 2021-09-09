<?php /* Smarty version Smarty-3.1.21, created on 2021-09-07 17:22:42
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\views\products\department.tpl" */ ?>
<?php /*%%SmartyHeaderCode:494090646136ad7518bb70-95874592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea386ee6eb4d4d6f0a64c2f909f5325d82b207f7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\views\\products\\department.tpl',
      1 => 1631024560,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '494090646136ad7518bb70-95874592',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6136ad751f9032_47607654',
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'department_data' => 0,
    'staff_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6136ad751f9032_47607654')) {function content_6136ad751f9032_47607654($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('description_department_in_department','description_department_in_department'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="product_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
<div class="ty-feature">
    <?php if ($_smarty_tpl->tpl_vars['department_data']->value['main_pair']) {?>
    <div class="ty-feature__image">
        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['department_data']->value['main_pair']), 0);?>

    </div>
    <?php }?>
</div>

<div class="ty-feature__description ty-wysiwyg-content">
    <?php echo $_smarty_tpl->__("description_department_in_department");?>
 : <?php echo $_smarty_tpl->tpl_vars['department_data']->value['description'];?>

</div>

<p><?php echo $_smarty_tpl->__('manager_department');?>
 : <?php echo htmlspecialchars(fn_get_username($_smarty_tpl->tpl_vars['department_data']->value['user_id']), ENT_QUOTES, 'UTF-8');?>
</p>

<p><?php echo $_smarty_tpl->__('staffs_of_department');?>
:</p>

<p class="ty-no-items">
    <?php  $_smarty_tpl->tpl_vars['staff_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['staff_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['department_data']->value['employeers_ids']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['staff_id']->key => $_smarty_tpl->tpl_vars['staff_id']->value) {
$_smarty_tpl->tpl_vars['staff_id']->_loop = true;
?>
        <?php echo htmlspecialchars(fn_get_username_staff($_smarty_tpl->tpl_vars['staff_id']->value), ENT_QUOTES, 'UTF-8');?>
<br>
    <?php } ?> 
</p>

</div>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['department_data']->value['department'], ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/department.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/department.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div id="product_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
<div class="ty-feature">
    <?php if ($_smarty_tpl->tpl_vars['department_data']->value['main_pair']) {?>
    <div class="ty-feature__image">
        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['department_data']->value['main_pair']), 0);?>

    </div>
    <?php }?>
</div>

<div class="ty-feature__description ty-wysiwyg-content">
    <?php echo $_smarty_tpl->__("description_department_in_department");?>
 : <?php echo $_smarty_tpl->tpl_vars['department_data']->value['description'];?>

</div>

<p><?php echo $_smarty_tpl->__('manager_department');?>
 : <?php echo htmlspecialchars(fn_get_username($_smarty_tpl->tpl_vars['department_data']->value['user_id']), ENT_QUOTES, 'UTF-8');?>
</p>

<p><?php echo $_smarty_tpl->__('staffs_of_department');?>
:</p>

<p class="ty-no-items">
    <?php  $_smarty_tpl->tpl_vars['staff_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['staff_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['department_data']->value['employeers_ids']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['staff_id']->key => $_smarty_tpl->tpl_vars['staff_id']->value) {
$_smarty_tpl->tpl_vars['staff_id']->_loop = true;
?>
        <?php echo htmlspecialchars(fn_get_username_staff($_smarty_tpl->tpl_vars['staff_id']->value), ENT_QUOTES, 'UTF-8');?>
<br>
    <?php } ?> 
</p>

</div>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['department_data']->value['department'], ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?><?php }} ?>
