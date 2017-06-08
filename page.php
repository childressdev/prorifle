<?php get_header(); ?>
<main id="main">
  <div class="container">
    <?php get_template_part('partials/main-section-title'); ?>
    <section id="mainContent">
      <?php if(get_field('featured_image')): ?>
        <img src="<?php the_field('featured_image'); ?>" class="img-responsive center-block" alt="" />
      <?php endif; ?>
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h3><?php the_title(); ?></h3>
        <hr />
        <?php the_content(); ?>
      <?php endwhile; else: ?>
        <p>Sorry, the content you were looking for could not be found.</p>
      <?php endif; ?>
    </section>
  </div>
</main>
<?php get_footer(); ?>