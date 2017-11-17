<?php get_header(); ?>
<main id="main">
  <div class="container">
    <?php get_template_part('partials/main-section-title'); ?>
    <p class="text-center">
      <a href="<?php echo home_url('about'); ?>" class="btn-main">About Us</a>
    </p>
  </div>
</main>
<?php get_footer(); ?>