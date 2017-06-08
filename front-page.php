<?php get_header(); ?>
<main id="main">
  <div class="container">
    <?php get_template_part('partials/main-section-title'); ?>
    <section id="rifleTypes">
      <?php 
        if(have_rows('featured_products')): while(have_rows('featured_products')): the_row(); 
          $product_id = get_sub_field('product');
          $product = wc_get_product($product_id);
      ?>
        <div class="rifle-type">
          <h2 class="markers"><?php echo $product->get_name(); ?></h2>
          <?php echo $product->get_image('shop_single', array('class' => 'img-responsive center-block', 'alt' => $product->get_name())); ?>
          <a href="<?php echo get_permalink($product_id); ?>" class="btn-main">Learn More</a>
        </div>
      <?php endwhile; endif; ?>
    </section>
  </div>
</main>
<?php get_footer(); ?>