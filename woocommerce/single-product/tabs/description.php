<?php
/**
 * Description tab
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post;

?>

<?php the_content(); ?>
<div class="feature-lists">
  <?php if(have_rows('feature_lists', $post->ID)): ?>
    <div class="row">
      <?php $i=0; while(have_rows('feature_lists', $post->ID)): the_row(); ?>
        <?php if($i%2==0){ echo '<div class="clearfix"></div>'; } ?>
        <div class="col-sm-6">
          <h4><?php the_sub_field('feature_list_title'); ?></h4>
          <?php if(have_rows('feature_list_items')): ?>
            <ul>
              <?php while(have_rows('feature_list_items')): the_row(); ?>
                <li><?php the_sub_field('feature_list_item'); ?></li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
        </div>
      <?php $i++; endwhile; ?>
    </div><!-- .row -->
  <?php endif; ?>
</div><!-- .featured-lists -->
</section><!-- #rifleDetails -->
</div><!-- .container -->