<?php /* Smarty version Smarty-3.1.21, created on 2021-09-07 02:58:08
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\products\manage_departments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9440447746136ab10b84766-56905295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7100afb10f752728bb71e5f5772073b9ae252ac3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\products\\manage_departments.tpl',
      1 => 1630972045,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9440447746136ab10b84766-56905295',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'search' => 0,
    'departments' => 0,
    'has_permission' => 0,
    'banner_statuses' => 0,
    'c_url' => 0,
    'rev' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'department' => 0,
    'allow_save' => 0,
    'no_hide_input' => 0,
    'settings' => 0,
    'page_title' => 0,
    'select_languages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6136ab10c9ee74_78747386',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6136ab10c9ee74_78747386')) {function content_6136ab10c9ee74_78747386($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('logo','name','status','edit','delete','status','no_data','departments'));
?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" id="departments_form" name="departments_form" enctype="multipart/form-data">
        <input type="hidden" name="fake" value="1" />
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>"pagination_contents_departments"), 0);?>

        
        <?php $_smarty_tpl->tpl_vars['rev'] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents_departments" : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["rev"] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents_departments" : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['c_icon'] = new Smarty_variable("<i class=\"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."\"></i>", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['has_permission'] = new Smarty_variable(fn_check_permissions("departments","update_status","admin","POST"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['c_dummy'] = new Smarty_variable("<i class=\"icon-dummy\"></i>", null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['departments']->value) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("departments_table", null, null); ob_start(); ?>
                <div class="table-responsive-wrapper longtap-selection">
                    <table class="table table-middle table--relative table-responsive">
                    <thead>
                        <tr>
                            <th width="1%" class="left mobile-hide">
                                <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_check_disabled'=>!$_smarty_tpl->tpl_vars['has_permission']->value,'check_statuses'=>$_smarty_tpl->tpl_vars['has_permission']->value ? $_smarty_tpl->tpl_vars['banner_statuses']->value : ''), 0);?>

                            </th>
                            
                            <th>
                            <?php echo $_smarty_tpl->__("logo");?>
     
                            </th>

                            <th>
                            <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a>
                            </th>

                            <th width="6%" class="mobile-hide">&nbsp;</th>

                            <th width="10%" class="right">
                            <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a>
                            </th>

                        </tr>
                    </thead>
                    
                    <?php  $_smarty_tpl->tpl_vars['department'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['department']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['departments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['department']->key => $_smarty_tpl->tpl_vars['department']->value) {
$_smarty_tpl->tpl_vars['department']->_loop = true;
?>
                    <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['department']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 ">
                        <?php $_smarty_tpl->tpl_vars['allow_save'] = new Smarty_variable(true, null, 0);?>

                        <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                            <?php $_smarty_tpl->tpl_vars['no_hide_input'] = new Smarty_variable("cm-no-hide-input", null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['no_hide_input'] = new Smarty_variable('', null, 0);?>
                        <?php }?>

                        <td class="left mobile-hide">
                            <input type="checkbox" name="departments_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department']->value['department_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
" />
                        </td>

                     <td class="products-list__image">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image'=>$_smarty_tpl->tpl_vars['department']->value['main_pair']['icon'],'image_id'=>$_smarty_tpl->tpl_vars['department']->value['main_pair']['image_id'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_height'],'href'=>fn_url("profiles.update_department?department_id=".((string)$_smarty_tpl->tpl_vars['department']->value).".department_id"),'image_css_class'=>"products-list__image--img",'link_css_class'=>"products-list__image--link"), 0);?>

                        </td>
                        
                    
                        <td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
" data-th="name">
                            <a class="row-status" href="<?php echo htmlspecialchars(fn_url("products.update_department?department_id=".((string)$_smarty_tpl->tpl_vars['department']->value['department_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department']->value['department'], ENT_QUOTES, 'UTF-8');?>
</a>
                        </td>

                        <td width="6%" class="mobile-hide">
                            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"products.update_department?department_id=".((string)$_smarty_tpl->tpl_vars['department']->value['department_id'])));?>
</li>
                            <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("delete"),'href'=>"products.department_delete?department_id=".((string)$_smarty_tpl->tpl_vars['department']->value['department_id']),'method'=>"POST"));?>
</li>
                            <?php }?>
                            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                            <div class="hidden-tools">
                                <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                            </div>
                        </td>

                        <td width="9%" class="right nowrap" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/status_on_manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('popup_additional_class'=>"dropleft",'id'=>$_smarty_tpl->tpl_vars['department']->value['department_id'],'status'=>$_smarty_tpl->tpl_vars['department']->value['status'],'hidden'=>true,'object_id_name'=>"department_id",'table'=>"departments",'non_editable_status'=>!fn_check_permissions("tools","update_status","admin","POST",array("table"=>"departments"))), 0);?>

                    </td>
                    </tr>
                    <?php } ?>
                    </table>
                </div>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>"departments_form",'object'=>"departments",'items'=>Smarty::$_smarty_vars['capture']['departments_table'],'has_permissions'=>$_smarty_tpl->tpl_vars['has_permission']->value), 0);?>

        <?php } else { ?>
            <p class = "no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_contents_departments"), 0);?>


        <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <?php if ($_smarty_tpl->tpl_vars['departments']->value) {?>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[products.delete_departments]",'form'=>"departments_form"));?>
</li>
                <?php }?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'class'=>"mobile-hide"));?>

            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[products.update_departments]",'but_role'=>"action",'but_target_form'=>"departments_form",'but_meta'=>"cm-submit"), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"products.add_department",'prefix'=>"top",'hide_tools'=>"true",'title'=>"Добавить коллекцию",'icon'=>"icon-plus"), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"banners:manage_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"banners:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"manage_departments",'view_type'=>"departments"), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("addons/banners/views/banners/components/banners_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"manage_departments"), 0);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"banners:manage_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> 

        </form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>



<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"departments:manage_mainbox_params")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"departments:manage_mainbox_params"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php ob_start();?><?php echo $_smarty_tpl->__("departments");?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable($_tmp1, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['select_languages'] = new Smarty_variable(true, null, 0);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"departments:manage_mainbox_params"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['page_title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>$_smarty_tpl->tpl_vars['select_languages']->value), 0);?>


<?php }} ?>
