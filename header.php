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

<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-99227980-31', 'auto');
  ga('send', 'pageview');

</script>
</head>
  <body>
    <?php
      $header_image = get_stylesheet_directory_uri() . '/images/shooting-target.jpg';
      $header_image_css = 'background-position:center center;';

      $shop_page = get_page_by_path('shop');
      $shop_page_id = $shop_page->ID;

      if(is_shop()){
        if(get_field('header_image', $shop_page_id)){
          $header_image = get_field('header_image', $shop_page_id);
          if(get_field('header_image_css', $shop_page_id)){
            $header_image_css = get_field('header_image_css', $shop_page_id);
          }
        }
      }
      elseif(get_field('header_image')){
        $header_image = get_field('header_image');
        if(get_field('header_image_css')){
          $header_image_css = get_field('header_image_css');
        }
      }
    ?>
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
          <?php } ?>
      </div>
    </nav>
    <?php if(is_front_page()): ?>
      <section id="hero" class="hp-hero" style="background-image:url(<?php echo $header_image; ?>); <?php echo $header_image_css; ?>">
        <div class="container-fluid">
          <div class="caption">
            <h2><?php echo get_field('header_caption') ? get_field('header_caption') : ''; ?></h2>
          </div>
          <?php if(have_rows('featured_categories')): ?>
            <div class="row">
              <?php while(have_rows('featured_categories')): the_row(); ?>
                <div class="col-sm-3">
                  <?php
                    $cat = get_sub_field('featured_category');
                    $cat_id = $cat->term_id;
                    $cat_image_id = get_woocommerce_term_meta($cat_id, 'thumbnail_id', true);
                    $cat_image = wp_get_attachment_url($cat_image_id);
                    //var_dump($cat_image);
                    if($cat_image == false){
                      $cat_image = get_field('default_product_image', 'option');
                    }
                    if(get_sub_field('featured_category_image')){
                      $cat_image = get_sub_field('featured_category_image');
                    }
                  ?>
                  <a href="<?php echo get_term_link($cat_id, 'product_cat'); ?>" class="category-link">
                    <img src="<?php echo $cat_image; ?>" class="img-responsive center-block" alt="" />
                    <div class="category-link-title">
                      <h3 class="small-marker"><?php echo $cat->name; ?></h3>
                    </div>
                  </a>
                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
        </div>
      </section>
    <?php else: ?>
      <section id="hero" style="background-image:url(<?php echo $header_image; ?>); <?php echo $header_image_css; ?>">
        <div class="caption-wrapper">
          <div class="caption">
            <h2>
              <?php 
                //echo get_field('header_caption') ? get_field('header_caption') : get_the_title(); 
                if(is_shop()){
                  if(get_field('header_caption', $shop_page_id)){
                    echo get_field('header_caption', $shop_page_id);
                  }
                  else{
                    echo 'Shop';
                  }
                }
                else{
                  if(get_field('header_caption')){
                    echo get_field('header_caption');
                  }
                  else{
                    echo get_the_title();
                  }
                }
              ?>
            </h2>
          </div>
        </div>
        <a href="#main" id="scrollDown" class="hidden-xs"></a>
      </section>
    <?php endif; ?>