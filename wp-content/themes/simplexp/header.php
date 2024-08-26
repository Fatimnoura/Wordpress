<?php
/**
 * Header File
 *
 * This file contains the <head> of the website,
 * and the <header> including logo, navigation 
 * menu and additionals code.
 *
 * @package simplexp
 */
?><!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <a href="#content" class="skip-link screen-reader-text"><?php _e('Skip to Content', 'simplexp') ?></a>

  <header class="header">
    <?php
      $banner_link = esc_url(get_theme_mod( 'simplexp_header_banner_url', '' ));
    ?>
    <?php if(esc_attr(get_theme_mod( 'simplexp_header_banner_text', '' ))): ?>
      <div class="header__banner">
        <?php if( $banner_link === '' ): ?>
          <p><?php echo esc_html(get_theme_mod( 'simplexp_header_banner_text', '' )); ?></p>
        <?php else: ?>
          <a href="<?php echo $banner_link; ?>"><?php echo esc_html(get_theme_mod( 'simplexp_header_banner_text', '' )); ?></a>
        <?php endif; ?>
      </div>
    <?php endif; ?>
    
    <div class="header__content">

      <div class="header__logo">
        <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        ?>
        <?php if((bool) has_custom_logo()): ?>
          <a class="logo" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url( $logo[0] ); ?>" alt="<?php echo esc_url( get_bloginfo( 'name' )); ?>"></a>
        <?php else: ?>
          <a href="<?php echo esc_url(home_url()); ?>" class="logo">
            <?php bloginfo('title');?>
          </a>
        <?php endif; ?>
      </div>

      <?php if(esc_attr(get_theme_mod( 'simplexp_header_search', false ))): ?>
        <?php get_search_form() ?>
      <?php endif; ?>

      <nav class="navbar">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'header',
            'container' => false,
            'items_wrap' => '<ul class="menu">%3$s</ul>'
          ));

        ?>
      </nav>




      <div class="header__addons">
        <?php
          if(has_nav_menu( 'headeraddons' )) {
            wp_nav_menu(array(
              'theme_location' => 'headeraddons',
              'container' => false,
              'items_wrap' => '<ul class="menu">%3$s</ul>'
            ));
          }
        ?>
        <?php if(class_exists( 'WooCommerce' )): ?>
          <?php if(is_woocommerce() || is_account_page()): ?>
            <ul class="menu">
              <?php echo simplexp_cart_icon(); ?>
            </ul>
          <?php endif; ?>
        <?php endif; ?>
      </div>

      <div class="hamburger-icon">
        <button>
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>


    </div>
  </header>
  
  <div class="container fade">
    <div class="spacer"></div>



