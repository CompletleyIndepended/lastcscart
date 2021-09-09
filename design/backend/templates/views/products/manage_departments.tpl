{** departments section **}

{capture name="mainbox"}
    <form action="{""|fn_url}" method="post" id="departments_form" name="departments_form" enctype="multipart/form-data">
        <input type="hidden" name="fake" value="1" />
        {include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id="pagination_contents_departments"}
        
        {$rev=$smarty.request.content_id|default:"pagination_contents_departments"}
        {$c_url=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
        {assign var="c_url" value=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
        {assign var="rev" value=$smarty.request.content_id|default:"pagination_contents_departments"}
        {$c_icon="<i class=\"icon-`$search.sort_order_rev`\"></i>"}
        {$has_permission = fn_check_permissions("departments", "update_status", "admin", "POST")}
        {$c_dummy="<i class=\"icon-dummy\"></i>"}

        {if $departments}
            {capture name="departments_table"}
                <div class="table-responsive-wrapper longtap-selection">
                    <table class="table table-middle table--relative table-responsive">
                        <thead>
                            <tr>
                                <th width="1%" class="left mobile-hide">
                                    {include file="common/check_items.tpl" is_check_disabled=!$has_permission check_statuses=($has_permission) ? $banner_statuses : '' }
                                </th>
                                
                                <th>
                                    {__("logo")}     
                                </th>

                                <th>
                                    <a class="cm-ajax" href="{"`$c_url`&sort_by=name&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>
                                        {__("name")}    
                                        {if $search.sort_by == "name"}  
                                            {$c_icon nofilter}  
                                        {else}    
                                            {$c_dummy nofilter} 
                                        {/if}
                                    </a>
                                </th>

                                <th width="6%" class="mobile-hide">&nbsp;</th>

                                <th width="10%" class="right">
                                    <a class="cm-ajax" href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("status")}{if $search.sort_by == "status"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a>
                                </th>
                            </tr>
                        </thead>
                    
                        {foreach from=$departments item=department}
                            <tr class="cm-row-status-{$department.status|lower} ">
                                {$allow_save= true}

                                {if $allow_save}
                                    {$no_hide_input="cm-no-hide-input"}
                                {else}
                                    {$no_hide_input=""}
                                {/if}

                                <td class="left mobile-hide">
                                    <input type="checkbox" name="departments_ids[]" value="{$department.department_id}" class="cm-item {$no_hide_input}" />
                                </td>

                                <td class="products-list__image">
                                    {include
                                    file="common/image.tpl"
                                    image=$department.main_pair.icon
                                    image_id=$department.main_pair.image_id
                                    image_width=$settings.Thumbnails.product_admin_mini_icon_width
                                    image_height=$settings.Thumbnails.product_admin_mini_icon_height
                                    href="profiles.update_department?department_id=$department.department_id"|fn_url
                                    image_css_class="products-list__image--img"
                                    link_css_class="products-list__image--link"}
                                </td>
                                    
                                <td class="{$no_hide_input}" data-th="name">
                                    <a class="row-status" href="{"products.update_department?department_id=`$department.department_id`"|fn_url}">{$department.department}</a>
                                </td>

                                <td width="6%" class="mobile-hide">
                                    {capture name="tools_list"}
                                        <li>{btn type="list" text=__("edit") href="products.update_department?department_id=`$department.department_id`"}</li>
                                        {if $allow_save}
                                            <li>{btn type="list" class="cm-confirm" text=__("delete") href="products.department_delete?department_id=`$department.department_id`" method="POST"}</li>
                                        {/if}
                                    {/capture}
                                    <div class="hidden-tools">
                                        {dropdown content=$smarty.capture.tools_list}
                                    </div>
                                </td>

                                <td width="9%" class="right nowrap" data-th="{__("status")}">
                                    {include file="views/products/components/status_on_manage.tpl"
                                        popup_additional_class="dropleft"
                                        id=$department.department_id
                                        status=$department.status
                                        hidden=true
                                        object_id_name="department_id"
                                        table="departments"
                                        non_editable_status=!fn_check_permissions("tools", "update_status", "admin", "POST", ["table" => "departments"])
                                    }
                                </td>
                            </tr>
                        {/foreach}
                    </table>
                </div>
            {/capture}
            {include file="common/context_menu_wrapper.tpl"
                form="departments_form"
                object="departments"
                items=$smarty.capture.departments_table
                has_permissions=$has_permission}
        {else}
            <p class = "no-items">{__("no_data")}</p>
        {/if}

        {include file="common/pagination.tpl" div_id="pagination_contents_departments"}

        {capture name="buttons"}
            {capture name="tools_list"}
                {if $departments}
                    <li>{btn type="delete_selected" dispatch="dispatch[products.delete_departments]" form="departments_form"}</li>
                {/if}
            {/capture}
            {dropdown content=$smarty.capture.tools_list class="mobile-hide"}
            {include file="buttons/save.tpl" but_name="dispatch[products.update_departments]" but_role="action" but_target_form="departments_form" but_meta="cm-submit"}
        {/capture}

        {capture name="adv_buttons"}
            {include file="common/tools.tpl" tool_href="products.add_department" prefix="top" hide_tools="true" title="Добавить коллекцию" icon="icon-plus"}
        {/capture}

        {capture name="sidebar"}
            {hook name="banners:manage_sidebar"}
                {include file="common/saved_search.tpl" dispatch="manage_departments" view_type="departments"}
                {include file="addons/banners/views/banners/components/banners_search_form.tpl" dispatch="manage_departments"}
            {/hook}
        {/capture} 
        </form>
{/capture}



{hook name="departments:manage_mainbox_params"}
    {$page_title = {__("departments")}}
    {$select_languages = true}
{/hook}

{include 
    file="common/mainbox.tpl" 
    title=$page_title 
    content=$smarty.capture.mainbox
    buttons=$smarty.capture.buttons 
    adv_buttons=$smarty.capture.adv_buttons 
    select_languages=$select_languages}

{** ad section **}