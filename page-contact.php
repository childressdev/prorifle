<?php get_header(); ?>
<main id="main">
  <div class="container">
    <?php get_template_part('partials/main-section-title'); ?>
    <div class="row">
      <div class="col-sm-6">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
      <div class="col-sm-6">
        <div class="contact-method container-sm-height">
          <div class="row row-sm-height">
            <div class="col-sm-6 col-sm-height">
              <a href="tel:<?php the_field('phone_number', 'option'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone-icon.png" class="img-responsive center-block" alt="Phone Icon" /></a>
            </div>
            <div class="col-sm-6 col-sm-height">
              <p><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></p>
            </div>
          </div>
        </div>
        <div class="contact-method container-sm-height">
          <div class="row row-sm-height">
            <div class="col-sm-6 col-sm-height">
              <a href="mailto:<?php the_field('email', 'option'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/email-icon.png" class="img-responsive center-block" alt="Mail Icon" /></a>
            </div>
            <div class="col-sm-6 col-sm-height">
              <p><a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></p>
            </div>
          </div>
        </div>
        <div class="contact-method container-sm-height">
          <div class="row row-sm-height">
            <div class="col-sm-6 col-sm-height">
              <a href="<?php the_field('directions_link', 'option'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/location-icon.png" class="img-responsive center-block" alt="" /></a>
            </div>
            <div class="col-sm-6 col-sm-height">
              <p><a href="<?php the_field('directions_link'); ?>"><?php the_field('street_address', 'option'); ?><br /><?php the_field('city_state_zip', 'option'); ?></a></p>
            </div>
          </div>
        </div>
        <div class="contact-method container-sm-height">
          <div class="row row-sm-height">
            <div class="col-sm-6 col-sm-height">
              <a href="<?php the_field('facebook', 'option'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/share-icon.png" class="img-responsive center-block" alt="" /></a>
            </div>
            <div class="col-sm-6 col-sm-height">
              <p><a href="<?php the_field('facebook', 'option'); ?>">Facebook <i class="fa fa-facebook-square"></i></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php get_template_part('partials/quote'); ?>
  </div>
</main>
<?php get_footer(); ?>