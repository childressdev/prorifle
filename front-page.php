<?php get_header(); ?>
<main id="main">
  <div class="container">
    <?php get_template_part('partials/main-section-title'); ?>
    <section id="rifleTypes">
      <?php 
        if(have_rows('featured_products')): while(have_rows('featured_products')): the_row(); 
          $product = prorifle_get_product_info(get_sub_field('product'));
      ?>
        <div class="rifle-type">
          <h2 class="markers"><?php echo $product['category']; ?></h2>
          <?php echo $product['image']; ?>
          <a href="<?php echo $product['permalink']; ?>" class="btn-main">Learn More</a>
        </div>
      <?php endwhile; endif; ?>
    </section>
  </div>
</main>
<?php get_footer(); ?>