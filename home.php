<?php get_header(); ?>
<main id="main">
  <div class="container">
    <?php get_template_part('partials/main-section-title'); ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <div class="loop-item">
        <div class="row">
          <div class="col-sm-4">
            <img src="<?php echo get_field('featured_image') ? get_field('featured_image') : get_stylesheet_directory_uri() . '/images/blog-placeholder.jpg'; ?>" class="img-responsive center-block" alt="" />
          </div>
          <div class="col-sm-8">
            <div class="loop-item-group">
              <div class="loop-item-header">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <h4><?php echo get_the_date('F j, Y'); ?></h4>
              </div>
              <hr />
              <div class="loop-item-content">
                <?php the_excerpt(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; wp_pagenavi(); endif; ?>
    <?php get_template_part('partials/quote.php'); ?>
  </div>
</main>
<?php get_footer(); ?>