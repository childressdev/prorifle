<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">

    <meta http-equiv="cache-control" content="public">
    <meta http-equiv="cache-control" content="private">
    <title>PRO Rifles</title>

    <?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav id="navClear" class="navbar hidden-xs">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pro-rifles-logo.png" class="img-responsive" alt="PRO Rifles Logo" /></a>
        </div>
        <div class="header-phone-social">
          <a href="tel:<?php the_field('phone_number', 'option'); ?>" class="phone"><?php the_field('phone_number', 'option'); ?></a>
          <?php if(get_field('twitter')): ?>
            <a href="<?php the_field('twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
          <?php endif;
          if(get_field('facebook')): ?>
            <a href="<?php the_field('facebook'); ?>" target="_blank"><i class="fa fa-facebook-square"></i></a>
          <?php endif; 
          if(get_field('instagram')): ?>
            <a href="<?php the_field('instagram'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
          <?php endif; ?>
        </div>
        <?php
          $nav_defaults = array(
            'theme_location' => 'clear-nav',
            'menu' => '',
            'container' => 'div',
            'container_class' => '',
            'container_id' => 'navbarClear',
            'menu_class' => 'nav navbar-nav navbar-right',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'prorifles_clear_fallback_menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 2,
            'walker' => new wp_bootstrap_navwalker()
          );
          wp_nav_menu($nav_defaults);

          function prorifles_clear_fallback_menu(){ ?>
            <div id="navbarClear">
              <ul class="nav navbar-nav navbar-right">
                <li<?php if(is_page('rifles')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('rifles'); ?>">Rifles</a></li>
                <li<?php if(is_page('about')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('about'); ?>">About</a></li>
                <li<?php if(is_page('shop')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('shop'); ?>">Shop</a></li>
                <li<?php if(is_page('build-your-own')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('build-your-own'); ?>">Build Your Own</a></li>
                <li<?php if(is_page('blog')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('blog'); ?>">Blog</a></li>
                <li<?php if(is_page('contact')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('contact'); ?>">Contact</a></li>
              </ul>
            </div>
        <?php } ?>
      </div>
    </nav>
    <?php
      $header_image = get_stylesheet_directory_uri() . '/images/shooting-target.jpg';
      $header_image_css = 'background-position:center center;';
      if(get_field('header_image')){
        $header_image = get_field('header_image');
        if(get_field('header_image_css')){
          $header_image_css = get_field('header_image_css');
        }
      }
    ?>
    <section id="hero"<?php if(is_front_page()){ ' class="hp-hero"'; } ?> style="background-image:url(<?php echo $header_image; ?>); <?php echo $header_image_css; ?>">
      <div class="caption-wrapper">
        <div class="caption">
          <h2><?php echo get_field('header_caption') ? get_field('header_caption') : get_the_title(); ?></h2>
        </div>
      </div>
      <a href="#main" id="scrollDown" class="hidden-xs"></a>
    </section>
    <nav id="navRed" class="navbar hp-nav">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarRed" aria-expanded="expanded" aria-controls="navbar">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php echo home_url(); ?>" class="mini-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pro-rifles-logo-small.png" class="img-responsive" alt="PRO Rifles Logo" /></a>
        </div>
        <?php
          $additional_menu_items = '<li class="list-phone"><a href="'. get_field('phone_number', 'option') . '">' . get_field('phone_number', 'option') . '</a></li>';
          $additional_menu_items .= '<li class="list-social">';
          if(get_field('twitter', 'option')){
            $additional_menu_items .= '<a href="' . get_field('twitter', 'option') . '" target="_blank"><i class="fa fa-twitter"></i></a>';
          }
          if(get_field('facebook', 'option')){
            $additional_menu_items .= '<a href="' . get_field('facebook', 'option') . '" target="_blank"><i class="fa fa-facebook-square"></i></a>';
          }
          if(get_field('instagram', 'option')){
            $additional_menu_items .= '<a href="' . get_field('instagram', 'option') . '" target="_blank"><i class="fa fa-instagram"></i></a>';
          }
          $additional_menu_items .= '</li>';

          $navRed_args = array(
            'theme_location' => 'red-nav',
            'menu' => '',
            'container' => 'div',
            'container_class' => 'navbar-collapse collapse',
            'container_id' => 'navbarRed',
            'menu_class' => 'nav navbar-nav navbar-right',
            'menu_id' => 'navbarRed',
            'echo' => true,
            'fallback_cb' => 'prorifles_red_fallback_menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s' . $additional_menu_items . '</ul>'
          );
          wp_nav_menu($navRed_args);

          function prorifles_red_fallback_menu(){ ?>
            <div id="navbarRed" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li<?php if(is_page('rifles')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('rifles'); ?>">Rifles</a></li>
                <li<?php if(is_page('about')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('about'); ?>">About</a></li>
                <li<?php if(is_page('shop')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('shop'); ?>">Shop</a></li>
                <li<?php if(is_page('build-your-own')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('build-your-own'); ?>">Build Your Own</a></li>
                <li<?php if(is_page('blog')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('blog'); ?>">Blog</a></li>
                <li<?php if(is_page('contact')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('contact'); ?>">Contact</a></li>
                <li class="list-phone"><a href="tel:555.555.5555">555.555.5555</a></li>
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
          <?php } ?>
      </div>
    </nav>
