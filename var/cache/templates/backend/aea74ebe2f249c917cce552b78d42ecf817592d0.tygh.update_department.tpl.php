<?php /* Smarty version Smarty-3.1.21, created on 2021-09-07 02:58:20
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\products\update_department.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18842830206136ab1c125234-72818887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aea74ebe2f249c917cce552b78d42ecf817592d0' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\products\\update_department.tpl',
      1 => 1630972045,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18842830206136ab1c125234-72818887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'department_data' => 0,
    'id' => 0,
    'settings' => 0,
    'u_info' => 0,
    'hide_first_button' => 0,
    'hide_second_button' => 0,
    'title_start' => 0,
    'title_end' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6136ab1c212451_37130290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6136ab1c212451_37130290')) {function content_6136ab1c212451_37130290($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','image','description','creation_date','managers','add_manager_from_users','tt_addons_newsletters_views_newsletters_update_users','employeers','add_employeers','delete'));
?>
<?php if ($_smarty_tpl->tpl_vars['department_data']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['department_data']->value['department_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit" name="department_form1" enctype="multipart/form-data">
    <input type="hidden" class="cm-no-hide-input" name="fake" value="1" />
    <input type="hidden" class="cm-no-hide-input" name="department_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

    <div id="content_general">
        <div class="control-group">
            <label for="elm_department_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
            <div class="controls">
                <input type="text" name="department_data[department]" id="elm_department_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department_data']->value['department'], ENT_QUOTES, 'UTF-8');?>
" size="25" class="input-large" />
            </div>
        </div>

        <div class="control-group" id="banner_graphic">
            <label class="control-label"><?php echo $_smarty_tpl->__("image");?>
</label>
            <div class="controls">
                <?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"department",'image_object_type'=>"department",'image_pair'=>$_smarty_tpl->tpl_vars['department_data']->value['main_pair'],'image_object_id'=>$_smarty_tpl->tpl_vars['id']->value,'no_detailed'=>true,'hide_titles'=>false), 0);?>

            </div>
        </div>

        <div class="control-group" id="department_text">
            <label class="control-label" for="elm_department_description"><?php echo $_smarty_tpl->__("description");?>
:</label>
            <div class="controls">
                <textarea id="elm_department_description" name="department_data[description]" cols="35" rows="8" class="cm-wysiwyg input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department_data']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="elm_department_timestamp_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("creation_date");?>
</label>
            <div class="controls">
                <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_department_timestamp_".((string)$_smarty_tpl->tpl_vars['id']->value),'date_name'=>"department_data[timestamp]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['department_data']->value['timestamp'])===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

            </div>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"department_data[status]",'id'=>"elm_department_status",'obj_id'=>$_smarty_tpl->tpl_vars['id']->value,'obj'=>$_smarty_tpl->tpl_vars['department_data']->value,'hidden'=>false), 0);?>

    
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("managers");?>
</label>
            <div class="controls">
                <?php ob_start();?><?php echo $_smarty_tpl->__("add_manager_from_users");?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("pickers/users/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_tmp1,'data_id'=>"return_users",'but_meta'=>"btn",'input_name'=>"department_data[user_id]",'item_ids'=>$_smarty_tpl->tpl_vars['department_data']->value['user_id'],'placement'=>"right",'display'=>"radio",'view_mode'=>"single_button",'user_info'=>$_smarty_tpl->tpl_vars['u_info']->value), 0);?>

                <p class="muted description">
                    <?php echo $_smarty_tpl->__("tt_addons_newsletters_views_newsletters_update_users");?>

                </p>
            </div>
        </div>
        
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_contents_departments"), 0);?>


         <div>
            <label class="control-label"><?php echo $_smarty_tpl->__("employeers");?>
</label>
            <div class="controls">
                <?php ob_start();?><?php echo $_smarty_tpl->__("add_employeers");?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("pickers/users/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_tmp2,'input_name'=>"department_data[employeers_ids][]",'item_ids'=>$_smarty_tpl->tpl_vars['department_data']->value['employeers_ids'],'but_meta'=>"btn"), 0);?>

            </div>
        </div>
    </div>   

    </div>

    

    <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
        <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_target_form'=>"department_form1",'but_name'=>"dispatch[products.update_department]"), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[products.update_department]",'but_role'=>"department-link",'but_target_form'=>"department_form1",'hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'hide_second_button'=>$_smarty_tpl->tpl_vars['hide_second_button']->value,'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>


            

            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"products.delete_department?department_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'method'=>"POST"));?>
</li>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        <?php }?>
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

<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
    <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable("Добавить новый отдел", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['title_start'] = new Smarty_variable("Изменить", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['title_end'] = new Smarty_variable($_smarty_tpl->tpl_vars['department_data']->value['department'], null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title_start'=>$_smarty_tpl->tpl_vars['title_start']->value,'title_end'=>$_smarty_tpl->tpl_vars['title_end']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'select_languages'=>true), 0);?>


<?php }} ?>
