<div id="product_features_{$block.block_id}">
<div class="ty-feature">
    {if $department_data.main_pair}
    <div class="ty-feature__image">
        {include file="common/image.tpl" images=$department_data.main_pair}
    </div>
    {/if}
</div>

<div class="ty-feature__description ty-wysiwyg-content">
    {__("description_department_in_department")} : {$department_data.description nofilter}
</div>

<p>{__('manager_department')} : {fn_get_username($department_data.user_id)}</p>

<p>{__('staffs_of_department')}:</p>

<p class="ty-no-items">
    {foreach $department_data.employeers_ids as $staff_id}
        {fn_get_username_staff($staff_id)}<br>
    {/foreach} 
</p>

</div>
{capture name="mainbox_title"}{$department_data.department}{/capture}