    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/metal-bar.jpg" class="metal-bar" alt="" />
    <section id="shopNow">
      <div class="container">
        <?php if(get_field('shop_now_section_title', 'option')): ?>
          <h2><?php the_field('shop_now_section_title', 'option'); ?></h2>
        <?php endif; ?>
        <p><?php the_field('shop_now_section_content', 'option'); ?></p>
        <a href="<?php echo home_url('shop'); ?>" class="btn-main btn-large">Shop Now</a>
      </div>
    </section>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/metal-bar.jpg" class="metal-bar" alt="" />
    <footer>
      <div class="container-fluid">
        <div id="footerNavbar">
          <a href="<?php echo home_url(); ?>" class="footer-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pro-rifles-logo-135.png" class="img-responsive" alt="Pro Rifles Logo" /></a>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo home_url('rifles'); ?>">Rifles</a></li>
            <li><a href="<?php echo home_url('about'); ?>">About</a></li>
            <li><a href="<?php echo home_url('shop'); ?>">Shop</a></li>
            <li><a href="<?php echo home_url('build-your-own'); ?>">Build Your Own</a></li>
            <li><a href="<?php echo home_url('contact'); ?>">Contact</a></li>
            <li class="list-phone"><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></li>
            <li class="list-social">
              <?php if(get_field('twitter', 'option')): ?>
                <a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
              <?php endif; 
              if(get_field('facebook', 'option')): ?>
                <a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><i class="fa fa-facebook-square"></i></a>
              <?php endif; 
              if(get_field('instagram', 'option')): ?>
                <a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
              <?php endif; ?>
            </li>
          </ul>
        </div>
        <div class="clearfix"></div>
        <div class="copyright">
          <p>&copy;<?php echo date('Y'); ?> PRO Rifles</p>
          <p>website created by <a href="https://childressagency.com">The Childress Agency</a></p>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>