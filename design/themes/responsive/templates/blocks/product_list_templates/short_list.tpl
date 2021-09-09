{** template-description:compact_list **}

{include file="blocks/list_templates/compact_list.tpl"
    show_name=true
    show_sku=true
    show_price=false
    show_old_price=false
    show_clean_price=false
    show_add_to_cart=$show_add_to_cart|default:false
    but_role={__("staff_in_depart")}
    hide_form=true
    hide_qty_label=false
    show_product_labels=false
    show_discount_label=false
    show_shipping_label=false
}