<?php
//
// example getting product image
//
$product = wc_get_product($product_id);
$product_featured_image = $product->get_image($image_size, $attr); 
// $image_size = shop_thumbnail, shop_catalog, shop_single
//$attr = array('class' => 'img-responsive')
echo $product_featured_image; //outputs html img


//
// var_dump of wc_get_product($product_id);
//

object(WC_Product_Simple)#1680 (12) {
  ["object_type":protected]=> string(7) "product" 
  ["post_type":protected]=> string(7) "product" 
  ["cache_group":protected]=> string(8) "products" 
  ["data":protected]=> array(48) { 
    ["name"]=> string(5) "Shirt" 
    ["slug"]=> string(5) "shirt" 
    ["date_created"]=> object(WC_DateTime)#1681 (4) { 
      ["utc_offset":protected]=> int(0) 
      ["date"]=> string(26) "2017-06-02 20:33:02.000000" 
      ["timezone_type"]=> int(1) 
      ["timezone"]=> string(6) "+00:00" 
    } 
    ["date_modified"]=> object(WC_DateTime)#1684 (4) { 
      ["utc_offset":protected]=> int(0) 
      ["date"]=> string(26) "2017-06-02 20:33:02.000000" 
      ["timezone_type"]=> int(1) 
      ["timezone"]=> string(6) "+00:00" 
    } 
    ["status"]=> string(7) "publish" 
    ["featured"]=> bool(false) 
    ["catalog_visibility"]=> string(7) "visible" 
    ["description"]=> string(24) "Description of the shirt" 
    ["short_description"]=> string(30) "Short description of the shirt" 
    ["sku"]=> string(0) "" 
    ["price"]=> string(4) "1.00" 
    ["regular_price"]=> string(4) "1.00" 
    ["sale_price"]=> string(0) "" 
    ["date_on_sale_from"]=> NULL 
    ["date_on_sale_to"]=> NULL 
    ["total_sales"]=> int(0) 
    ["tax_status"]=> string(7) "taxable" 
    ["tax_class"]=> string(0) "" 
    ["manage_stock"]=> bool(false) 
    ["stock_quantity"]=> NULL 
    ["stock_status"]=> string(7) "instock" 
    ["backorders"]=> string(2) "no" 
    ["sold_individually"]=> bool(false) 
    ["weight"]=> string(0) "" 
    ["length"]=> string(0) "" 
    ["width"]=> string(0) "" 
    ["height"]=> string(0) "" 
    ["upsell_ids"]=> array(0) { } 
    ["cross_sell_ids"]=> array(0) { } 
    ["parent_id"]=> int(0) 
    ["reviews_allowed"]=> bool(true) 
    ["purchase_note"]=> string(0) "" 
    ["attributes"]=> array(0) { } 
    ["default_attributes"]=> array(0) { } 
    ["menu_order"]=> int(0) 
    ["virtual"]=> bool(false) 
    ["downloadable"]=> bool(false) 
    ["category_ids"]=> array(0) { } 
    ["tag_ids"]=> array(0) { } 
    ["shipping_class_id"]=> int(0) 
    ["downloads"]=> array(0) { } 
    ["image_id"]=> string(0) "" 
    ["gallery_image_ids"]=> array(0) { } 
    ["download_limit"]=> int(-1) 
    ["download_expiry"]=> int(-1) 
    ["rating_counts"]=> array(2) { 
      [3]=> int(1) [4]=> int(1) 
    } 
    ["average_rating"]=> string(4) "3.50" 
    ["review_count"]=> int(2) 
  } 
  ["supports":protected]=> array(1) { 
    [0]=> string(16) "ajax_add_to_cart" 
  } 
  ["id":protected]=> int(31) 
  ["changes":protected]=> array(0) { } 
  ["object_read":protected]=> bool(true) 
  ["extra_data":protected]=> array(0) { } 
  ["default_data":protected]=> array(48) { 
    ["name"]=> string(0) "" 
    ["slug"]=> string(0) "" 
    ["date_created"]=> NULL 
    ["date_modified"]=> NULL 
    ["status"]=> bool(false) 
    ["featured"]=> bool(false) 
    ["catalog_visibility"]=> string(7) "visible" 
    ["description"]=> string(0) "" 
    ["short_description"]=> string(0) "" 
    ["sku"]=> string(0) "" 
    ["price"]=> string(0) "" 
    ["regular_price"]=> string(0) "" 
    ["sale_price"]=> string(0) "" 
    ["date_on_sale_from"]=> NULL 
    ["date_on_sale_to"]=> NULL 
    ["total_sales"]=> string(1) "0" 
    ["tax_status"]=> string(7) "taxable" 
    ["tax_class"]=> string(0) "" 
    ["manage_stock"]=> bool(false) 
    ["stock_quantity"]=> NULL 
    ["stock_status"]=> string(7) "instock" 
    ["backorders"]=> string(2) "no" 
    ["sold_individually"]=> bool(false) 
    ["weight"]=> string(0) "" 
    ["length"]=> string(0) "" 
    ["width"]=> string(0) "" 
    ["height"]=> string(0) "" 
    ["upsell_ids"]=> array(0) { } 
    ["cross_sell_ids"]=> array(0) { } 
    ["parent_id"]=> int(0) 
    ["reviews_allowed"]=> bool(true) 
    ["purchase_note"]=> string(0) "" 
    ["attributes"]=> array(0) { } 
    ["default_attributes"]=> array(0) { } 
    ["menu_order"]=> int(0) 
    ["virtual"]=> bool(false) 
    ["downloadable"]=> bool(false) 
    ["category_ids"]=> array(0) { } 
    ["tag_ids"]=> array(0) { } 
    ["shipping_class_id"]=> int(0) 
    ["downloads"]=> array(0) { } 
    ["image_id"]=> string(0) "" 
    ["gallery_image_ids"]=> array(0) { } 
    ["download_limit"]=> int(-1) 
    ["download_expiry"]=> int(-1) 
    ["rating_counts"]=> array(0) { } 
    ["average_rating"]=> int(0) 
    ["review_count"]=> int(0) 
  } 
  ["data_store":protected]=> object(WC_Data_Store)#1674 (4) { 
    ["instance":"WC_Data_Store":private]=> object(WC_Product_Data_Store_CPT)#1638 (5) { 
      ["internal_meta_keys":protected]=> array(39) { 
        [0]=> string(11) "_visibility" 
        [1]=> string(4) "_sku" 
        [2]=> string(6) "_price" 
        [3]=> string(14) "_regular_price" 
        [4]=> string(11) "_sale_price" 
        [5]=> string(22) "_sale_price_dates_from" 
        [6]=> string(20) "_sale_price_dates_to" 
        [7]=> string(11) "total_sales" 
        [8]=> string(11) "_tax_status" 
        [9]=> string(10) "_tax_class" 
        [10]=> string(13) "_manage_stock" 
        [11]=> string(6) "_stock" 
        [12]=> string(13) "_stock_status" 
        [13]=> string(11) "_backorders" 
        [14]=> string(18) "_sold_individually" 
        [15]=> string(7) "_weight" 
        [16]=> string(7) "_length" 
        [17]=> string(6) "_width" 
        [18]=> string(7) "_height" 
        [19]=> string(11) "_upsell_ids" 
        [20]=> string(14) "_crosssell_ids" 
        [21]=> string(14) "_purchase_note" 
        [22]=> string(19) "_default_attributes" 
        [23]=> string(19) "_product_attributes" 
        [24]=> string(8) "_virtual" 
        [25]=> string(13) "_downloadable" 
        [26]=> string(9) "_featured" 
        [27]=> string(19) "_downloadable_files" 
        [28]=> string(16) "_wc_rating_count" 
        [29]=> string(18) "_wc_average_rating" 
        [30]=> string(16) "_wc_review_count" 
        [31]=> string(22) "_variation_description" 
        [32]=> string(13) "_thumbnail_id" 
        [33]=> string(11) "_file_paths" 
        [34]=> string(22) "_product_image_gallery" 
        [35]=> string(16) "_product_version" 
        [36]=> string(12) "_wp_old_slug" 
        [37]=> string(10) "_edit_last" 
        [38]=> string(10) "_edit_lock" 
      } 
      ["extra_data_saved":protected]=> bool(false) 
      ["updated_props":protected]=> array(0) { } 
      ["meta_type":protected]=> string(4) "post" 
      ["object_id_field_for_meta":protected]=> string(0) "" 
    } 
    ["stores":"WC_Data_Store":private]=> array(18) { 
      ["coupon"]=> string(24) "WC_Coupon_Data_Store_CPT" 
      ["customer"]=> string(22) "WC_Customer_Data_Store" 
      ["customer-download"]=> string(31) "WC_Customer_Download_Data_Store" 
      ["customer-session"]=> string(30) "WC_Customer_Data_Store_Session" 
      ["order"]=> string(23) "WC_Order_Data_Store_CPT" 
      ["order-refund"]=> string(30) "WC_Order_Refund_Data_Store_CPT" 
      ["order-item"]=> string(24) "WC_Order_Item_Data_Store" 
      ["order-item-coupon"]=> string(31) "WC_Order_Item_Coupon_Data_Store" 
      ["order-item-fee"]=> string(28) "WC_Order_Item_Fee_Data_Store" 
      ["order-item-product"]=> string(32) "WC_Order_Item_Product_Data_Store" 
      ["order-item-shipping"]=> string(33) "WC_Order_Item_Shipping_Data_Store" 
      ["order-item-tax"]=> string(28) "WC_Order_Item_Tax_Data_Store" 
      ["payment-token"]=> string(27) "WC_Payment_Token_Data_Store" 
      ["product"]=> string(25) "WC_Product_Data_Store_CPT" 
      ["product-grouped"]=> string(33) "WC_Product_Grouped_Data_Store_CPT" 
      ["product-variable"]=> string(34) "WC_Product_Variable_Data_Store_CPT" 
      ["product-variation"]=> string(35) "WC_Product_Variation_Data_Store_CPT" 
      ["shipping-zone"]=> string(27) "WC_Shipping_Zone_Data_Store" 
    } 
    ["current_class_name":"WC_Data_Store":private]=> string(25) "WC_Product_Data_Store_CPT" 
    ["object_type":"WC_Data_Store":private]=> string(14) "product-simple" 
  } 
  ["meta_data":protected]=> NULL 
}