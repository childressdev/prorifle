<?php
add_action( 'init', 'prorifle_set_default_image' );
function prorifle_set_default_image() {
  add_filter('woocommerce_placeholder_img_src', 'prorifle_woocommerce_placeholder_img_src');
   
	function prorifle_woocommerce_placeholder_img_src( $src ) {
    $src = get_stylesheet_directory_uri() . '/rifle_placeholder.png';
    return $src;
	}
}