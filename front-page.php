<?php get_header(); ?>
<main id="main">
  <div class="container">
    <?php if(get_field('main_section_title')): ?>
      <h1><?php the_field('main_section_title'); ?></h1>
    <?php else: ?>
      <h1>WE CRAFT THE MOST PRECISE BENCH REST, PRECISION, AND TACTICAL RIFLES ON THE MARKET</h1>
    <?php endif; ?>
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