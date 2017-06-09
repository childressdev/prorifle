<?php get_header(); ?>
<main id="main">
  <div class="container">
    <?php get_template_part('partials/main-section-title'); ?>
  </div>
  <section id="imageContentRows">
    <?php if(have_rows('text_image_section')): $i=1; while(have_rows('text_image_section')): the_row(); ?>
      <div class="container-fluid container-sm-height">
        <div class="row row-sm-height">
          <div class="col-sm-6 col-sm-height<?php if($i%2==0){ echo ' col-sm-push-6'; } ?>">
            <h2><?php the_field('section_title'); ?></h2>
            <hr />
            <?php the_field('section_content'); ?>
          </div>
          <div class="col-sm-6 col-sm-height image-side<?php if($i%2==0){ echo ' col-sm-pull-6'; { ?>" style="background-image:url(<?php the_field('section_image'); ?>); <?php the_field('section_image_css'); ?>">
          </div>
        </div>
      </div>
    <?php $i++; endwhile; endif; ?>
  </section>
  <div class="container">
    <?php get_template_part('partials/quote.php'); ?>
  </div>
</main>
<?php get_footer(); ?>