<?php
add_action('after_setup_theme', 'woocommerce_support');
function woocommerce_support(){
  add_theme_support('woocommerce');
}

add_action( 'init', 'prorifle_set_default_image' );
function prorifle_set_default_image() {
  add_filter('woocommerce_placeholder_img_src', 'prorifle_woocommerce_placeholder_img_src');
   
	function prorifle_woocommerce_placeholder_img_src( $src ) {
    if(get_field('default_product_image', 'option')){
      $src = get_field('default_product_image', 'option');
    }
    else{
      $src = get_stylesheet_directory_uri() . '/images/rifle-placeholder.png';
    }
    return $src;
	}
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
add_action('woocommerce_before_main_content', 'prorifle_wrapper_start', 10);
function prorifle_wrapper_start() {
  echo '<main id="main"><div class="container">';
}

remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_after_main_content', 'prorifle_wrapper_end', 10);
function prorifle_wrapper_end() {
  echo '</main></div><!-- .container -->';
}

//remove sidebar
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

//change shop page title
add_filter('woocommerce_page_title', 'prorifle_shop_page_title');
function prorifle_shop_page_title($page_title){
  if($page_title == 'Shop'){
    $shop_page = get_page_by_path('shop');
    $shop_page_id = $shop_page->ID;
    if(get_field('main_section_title', $shop_page_id)){
      return get_field('main_section_title', $shop_page_id);
    }
    else{
      return '';
    }
  }
}

//change shop loop product title
add_action('woocommerce_before_shop_loop_item_title', 'prorifle_product_details_container_open', 20);
function prorifle_product_details_container_open(){
  echo '<div class="product-details">';
}

remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', 'prorifle_template_loop_product_title', 10);
function prorifle_template_loop_product_title(){
  echo '<h3 class="woocommerce-loop-product__title">' . get_the_title() . '</h3>';
}

add_action('woocommerce_after_shop_loop_item_title', 'prorifle_after_shop_loop_item_title', 20);
function prorifle_after_shop_loop_item_title(){
  global $product;
  echo '<hr />';
  echo '<p>' . $product->get_short_description() . '</p>';
}

add_action('woocommerce_after_shop_loop_item', 'prorifle_product_details_container_close', 20);
function prorifle_product_details_container_close(){
  echo '</div><!-- .product-details -->';
}

//
//product page changes
//

//add main section title
add_action('woocommerce_before_main_content', 'prorifle_main_section_title', 25);
function prorifle_main_section_title(){
  if(!is_shop()){
    get_template_part('partials/main-section-title');
    echo '</div><!-- .container -->';
  }
}

//add category title (with the arrows on either side)
add_action('woocommerce_before_single_product_summary', 'prorifle_show_category_header', 15);
function prorifle_show_category_header(){
  global $product;

  $product_cat = '';
  $product_cat_ids = $product->get_category_ids();
  if($product_cat_ids && !is_wp_error($product_cat_ids)){
    foreach($product_cat_ids as $id){
      $children = get_categories(array('taxonomy' => 'product_cat', 'parent' => $id));
      if(count($children) == 0){
        $product_cat = get_cat_name($id);
      }
    }
  }

  echo '<div class="rifle-type"><div class="container">';
  echo '<h2 class="markers">' . $product_cat . '</h2>';
  echo '</div><!-- .container --></div><!-- .rifle-type -->';
}

//customize .summary .entry-summary
//removing all hooks from single product summary and putting them within either the variable or 
// or single template files
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

add_action('woocommerce_before_add_to_cart_button', 'woocommerce_template_single_title', 5);
add_action('woocommerce_before_add_to_cart_button', 'prorifle_template_single_product_description', 6);

add_action('prorifle_before_add_to_cart_button', 'woocommerce_template_single_rating', 10);
add_action('prorifle_before_add_to_cart_button', 'woocommerce_template_single_meta', 15);

remove_action('woocommerce_single_variation', 'woocommerce_single_variation', 10);
add_action('woocommerce_before_add_to_cart_button', 'prorifle_single_variation', 10);
function prorifle_single_variation(){
  echo '<div class="container">';
  do_action('prorifle_before_add_to_cart_button');
  echo '<div class="woocommerce-variation single_variation"></div></div>';
}

// show description under title on single product page
function prorifle_template_single_product_description(){
  wc_get_template('single-product/tabs/description.php');
}

// show price after qty field and before add to cart btn
// single-product/add-to-cart/variation-add-to-cart-button.php
add_action('woocommerce_after_add_to_cart_quantity', 'woocommerce_template_single_price', 10);

// remove description tab
add_filter('woocommerce_product_tabs', 'prorifle_remove_description_tab', 98);
function prorifle_remove_description_tab($tabs){
  unset($tabs['description']);

  // set review tab 1st
  $tabs['reviews']['priority'] = 5;

  global $product;
  if($product->has_attributes() || $product->has_dimensions() || $product->has_weight()){
    $tabs['additional_information']['priority'] = 10;
  }

  return $tabs;
}

// remove avatar from reviews lists
remove_action('woocommerce_review_before', 'woocommerce_review_display_gravatar', 10);

//
// Get product info for use outside the shop
// 
// @param int $product_id
// @return array:
//  category - child cat name
//  name - product title
//  image - html for featured image
//  permalink - link to product
function prorifle_get_product_info($product_id){
  $wc_product = wc_get_product($product_id);
  $product = array();
  
  $product_category_ids = $wc_product->get_category_ids();
  if($product_category_ids && !is_wp_error($product_category_ids)){
    foreach($product_category_ids as $id){
      $children = get_categories(array('taxonomy' => 'product_cat', 'parent' => $id));
      if(count($children) == 0){
        $product['category'] = get_cat_name($id);
      }
    }
  }
  
  $product['name'] = $wc_product->get_name();
  $product['image'] = $wc_product->get_image('shop_single', array('class' => 'img-responsive center-block', 'alt' => $wc_product->get_name()));
  $product['permalink'] = get_permalink($product_id);
  $product['short_description'] = $wc_product->get_short_description();

  return $product;
}