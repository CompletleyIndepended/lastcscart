<?php /* Smarty version Smarty-3.1.21, created on 2021-09-09 22:23:35
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\views\products\departments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11577126496136ab3f369da4-42568914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7f72a9a5ea5cd56c0a8525896aa673b3f61ee26' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\views\\products\\departments.tpl',
      1 => 1631214711,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11577126496136ab3f369da4-42568914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6136ab3f47c437_96582985',
  'variables' => 
  array (
    'runtime' => 0,
    'departments' => 0,
    'no_pagination' => 0,
    'show_empty' => 0,
    'columns' => 0,
    'splitted_departments' => 0,
    'sdepartments' => 0,
    'department' => 0,
    'obj_prefix' => 0,
    'settings' => 0,
    'title' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6136ab3f47c437_96582985')) {function content_6136ab3f47c437_96582985($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_function_split')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.split.php';
if (!is_callable('smarty_function_math')) include 'C:\\OpenServer\\domains\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['departments']->value) {?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

    
    <?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['show_empty']->value) {?>
        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['departments']->value,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"splitted_departments"),$_smarty_tpl);?>

    <?php } else { ?>
        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['departments']->value,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"splitted_departments",'skip_complete'=>true),$_smarty_tpl);?>

    <?php }?>

    <?php echo smarty_function_math(array('equation'=>"100 / x",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"cell_width"),$_smarty_tpl);?>


    
    <?php echo smarty_function_script(array('src'=>"js/tygh/product_image_gallery.js"),$_smarty_tpl);?>


    <div class="grid-list">
        <?php  $_smarty_tpl->tpl_vars["sdepartments"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sdepartments"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_departments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["sdepartments"]->key => $_smarty_tpl->tpl_vars["sdepartments"]->value) {
$_smarty_tpl->tpl_vars["sdepartments"]->_loop = true;
$_smarty_tpl->tpl_vars["department"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["department"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sdepartments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["department"]->key => $_smarty_tpl->tpl_vars["department"]->value) {
$_smarty_tpl->tpl_vars["department"]->_loop = true;
?><div class="ty-column<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['department']->value) {
$_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['department']->value['department_id'], null, 0);
$_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['department']->value['department_id']), null, 0);?><div class="ty-grid-list__item ty-quick-view-button__wrapper"><div class="ty-grid-list__image"><a href="<?php echo htmlspecialchars(fn_url("products.department?department_id=".((string)$_smarty_tpl->tpl_vars['department']->value['department_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_ids'=>true,'images'=>$_smarty_tpl->tpl_vars['department']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'],'lazy_load'=>true), 0);?>
</a></div><div class="ty-grid-list__item-name"><bdi><a href="<?php echo htmlspecialchars(fn_url("products.department?department_id=".((string)$_smarty_tpl->tpl_vars['department']->value['department_id'])), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department']->value['department'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department']->value['department'], ENT_QUOTES, 'UTF-8');?>
</a></bdi><bdi><a href="<?php echo htmlspecialchars(fn_url("products.department?department_id=".((string)$_smarty_tpl->tpl_vars['department']->value['department_id'])), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department']->value['department'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(fn_get_username($_smarty_tpl->tpl_vars['department']->value['user_id']), ENT_QUOTES, 'UTF-8');?>
</a></bdi></div></div><?php }?></div><?php }
} ?>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
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
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/departments.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/departments.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['departments']->value) {?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

    
    <?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['show_empty']->value) {?>
        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['departments']->value,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"splitted_departments"),$_smarty_tpl);?>

    <?php } else { ?>
        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['departments']->value,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"splitted_departments",'skip_complete'=>true),$_smarty_tpl);?>

    <?php }?>

    <?php echo smarty_function_math(array('equation'=>"100 / x",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"cell_width"),$_smarty_tpl);?>


    
    <?php echo smarty_function_script(array('src'=>"js/tygh/product_image_gallery.js"),$_smarty_tpl);?>


    <div class="grid-list">
        <?php  $_smarty_tpl->tpl_vars["sdepartments"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sdepartments"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_departments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["sdepartments"]->key => $_smarty_tpl->tpl_vars["sdepartments"]->value) {
$_smarty_tpl->tpl_vars["sdepartments"]->_loop = true;
$_smarty_tpl->tpl_vars["department"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["department"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sdepartments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["department"]->key => $_smarty_tpl->tpl_vars["department"]->value) {
$_smarty_tpl->tpl_vars["department"]->_loop = true;
?><div class="ty-column<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['department']->value) {
$_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['department']->value['department_id'], null, 0);
$_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['department']->value['department_id']), null, 0);?><div class="ty-grid-list__item ty-quick-view-button__wrapper"><div class="ty-grid-list__image"><a href="<?php echo htmlspecialchars(fn_url("products.department?department_id=".((string)$_smarty_tpl->tpl_vars['department']->value['department_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_ids'=>true,'images'=>$_smarty_tpl->tpl_vars['department']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'],'lazy_load'=>true), 0);?>
</a></div><div class="ty-grid-list__item-name"><bdi><a href="<?php echo htmlspecialchars(fn_url("products.department?department_id=".((string)$_smarty_tpl->tpl_vars['department']->value['department_id'])), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department']->value['department'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department']->value['department'], ENT_QUOTES, 'UTF-8');?>
</a></bdi><bdi><a href="<?php echo htmlspecialchars(fn_url("products.department?department_id=".((string)$_smarty_tpl->tpl_vars['department']->value['department_id'])), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department']->value['department'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(fn_get_username($_smarty_tpl->tpl_vars['department']->value['user_id']), ENT_QUOTES, 'UTF-8');?>
</a></bdi></div></div><?php }?></div><?php }
} ?>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?><?php }} ?>
