<?php
/**
 * Functions File
 *
 * This file contains all the functions to initialize and setup simplexp theme.
 *
 * @package simplexp
 */

/* ! Theme Setup */
if(!function_exists("simplexp_setup")) {

  function simplexp_setup() {

    // Custom bg color
    add_theme_support( 'custom-background', array( 'default-color' => '#fffdfa' ) );
  
    // Enable Custom Logo
    add_theme_support( 'custom-logo' );
  
    // Enable title in header
    add_theme_support( 'title-tag' );

    // Enable automatic feed links
		add_theme_support( 'automatic-feed-links' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Embed css responsive classes
		add_theme_support( "responsive-embeds" );

		// Html5
		add_theme_support( 'html5', array( 'comment-list', 'search-form', 'script', 'comment-form', 'caption', 'gallery', 'style' ) );

    // Enable Gutenber styles
    add_theme_support('wp-block-styles');
  
    // Enable featured image
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'align-wide' );

    // Enable support editor styles.
		add_theme_support( 'editor-styles' );

    // WooCommerce Support
    add_theme_support( 'woocommerce' );

    // WooCommerce Product Thumbnails
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    // Theme Languages
    load_theme_textdomain('simplexp', get_template_directory() . '/languages');

    // Enable Custom logo
    $simplexp_logo_defaults = array(
      'height'               => 100,
      'width'                => 200,
      'flex-height'          => true,
      'flex-width'           => true,
      'header-text'          => array( 'site-title', 'site-description' ),
      'unlink-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $simplexp_logo_defaults );

    // Thumbnail
    add_image_size( 'simplexp_thumbnail', 400, 260, true );
    add_image_size( 'simplexp_single', 800, 493, true );
    add_image_size( 'simplexp_big', 1400, 928, true );

    
    // Custom menus
		register_nav_menus(array(
			'header' => esc_html__( 'Header', 'simplexp' ),
      'headeraddons' => esc_html__( 'Header Addons', 'simplexp' )
		));

    // Code style
    register_block_style(
      'core/code',
      array(
          'name'  => 'italic-code',
          'label' => __( 'Italic Code', 'simplexp' ),
          'inline_style' => '.wp-block-code.is-style-italic-code { font-style: italic; }',
      )
    );

    /* Patterns */
    require_once( get_template_directory() . '/customizer/patterns.php' );


  }


}
add_action( 'after_setup_theme', 'simplexp_setup' );


/* ! Register Custom editor Styles */
function simplexp_custom_editor_styles() {
  add_editor_style( get_template_directory_uri() . '/custom-editor-style.css' );

}
add_action( 'admin-init', 'simplexp_custom_editor_styles' );


/* ! Backend Custom Css */
function simplexp_customize_css_iframe_editor() {

  if(is_admin()) {

    wp_enqueue_style( 'simplexp-custom-editor-style', get_template_directory_uri() . '/custom-editor-style.css');
    
    $simplexp_font = esc_attr(get_theme_mod( 'simplexp_google_font', 'Montserrat'));

    //ADD HERE

    $simplexp_font_url = 'https://fonts.googleapis.com/css?family='.urlencode( $simplexp_font ).':300,400,500,700';
  
    wp_register_style( 'simplexp-backend-google-font', $simplexp_font_url );
    wp_enqueue_style( 'simplexp-backend-google-font' );


    $simplexp_link_color = esc_attr(get_theme_mod( 'simplexp_link_color', '#f88379'));
    $simplexp_button_bg = esc_attr(get_theme_mod( 'simplexp_button_bg', '#FA7F08' ));
    $simplexp_button_bg_hover = esc_attr(get_theme_mod( 'simplexp_button_bg_hover', '#DB5F42' ));
    $simplexp_bg_color = 'fff';
    $simplexp_custom_css = "
      .editor-styles-wrapper .wp-block-post-title,
      .editor-styles-wrapper .wp-block-heading,
      .editor-styles-wrapper .wp-block {
        font-family: {$simplexp_font};
      }

      .editor-styles-wrapper .wp-block-heading,
      .editor-styles-wrapper .wp-block-post-title,
      .editor-styles-wrapper .gb-headline:not(p){ font-family: {$simplexp_font}; }
      .editor-styles-wrapper{background: #{$simplexp_bg_color} ;}
      .edit-post-visual-editor .editor-styles-wrapper .wp-block-button__link,
      body.editor-styles-wrapper .wp-block-button__link{background-color: {$simplexp_button_bg} }
      .edit-post-visual-editor:hover .editor-styles-wrapper:hover .wp-block-button__link:hover,
      body.editor-styles-wrapper:hover .wp-block-button__link:hover{background-color: {$simplexp_button_bg_hover} }
      .card{box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); border-radius:15px;}
      .text-center{text-align:center};
    ";
    wp_add_inline_style( 'simplexp-custom-editor-style', $simplexp_custom_css );
  }

}
add_action( 'enqueue_block_assets', 'simplexp_customize_css_iframe_editor' );



/* ! Widgets setup */
if(!function_exists( 'simplexp_register_sidebars' )) {
  
  function simplexp_register_sidebars() {
    register_sidebar( array(
      'name'          => esc_html__( 'Footer', 'simplexp' ),
      'id'            => 'footer',
      'description'   => esc_html__( 'Widget area for the footer.', 'simplexp' ),
      'before_widget' => '<div id="%1$s" class="col-33 %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
    ));

    if(class_exists( 'WooCommerce' )) {
      register_sidebar( array(
        'name'          => esc_html__( 'Shop Sidebar', 'simplexp' ),
        'id'            => 'shop',
        'description'   => esc_html__( 'Widget area for the Shop.', 'simplexp' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
      ));
    }

  }
}
add_action('widgets_init', 'simplexp_register_sidebars');


if(class_exists( 'WooCommerce' )) {

  function simplexp_account_menu_item( $items, $args ) {

    if( $args->theme_location == 'header' ) {
      if(is_user_logged_in()) {
        $current_user = wp_get_current_user();
        $user_display_name = $current_user->display_name;
        $items .= '<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children current-menu-item current_page_item"><a href="#">' . esc_html( $user_display_name ) . '</a>';
        $items .= ' <ul class="sub-menu">';
        $items .= '   <li class="menu-item"><a href="'.esc_url(wc_get_page_permalink( 'myaccount' )).'">'.esc_html__( 'Account', 'simplexp' ).'</a></li>';
        $items .= '   <li class="menu-item"><a href="'.esc_url(wc_get_cart_url()).'">'.esc_html__( 'Cart', 'simplexp' ).'</a></li>';
        $items .= '   <li class="menu-item"><a href="'.esc_url(wc_get_account_endpoint_url( 'customer-logout' )).'">'.esc_html__( 'Exit', 'simplexp' ).'</a></li>';
        $items .= ' </ul>';
        $items .= '</li>';
      }else {
        $items .= '<li><a href="'.esc_url(wc_get_page_permalink( 'myaccount' )).'">'.esc_html__( 'Login', 'simplexp' ).'</a></li>';
      }
    }
    return $items;
  }
  add_filter( 'wp_nav_menu_items', 'simplexp_account_menu_item', 10, 2 );

}



/* ! Enqueue css */
if (!function_exists( 'simplexp_styles' )) {
  function simplexp_styles() {

    $simplexp_font = esc_attr(get_theme_mod( 'simplexp_google_font', 'Montserrat' ));
    $simplexp_font_url = 'https://fonts.googleapis.com/css?family='.urlencode( $simplexp_font ).':300,400,500,700';
  
    wp_enqueue_style( 'simplexp-google-font', $simplexp_font_url, array(), null );

    wp_enqueue_style( 'simplexp-style', get_template_directory_uri(). '/style.css');

  }
}
add_action( 'wp_enqueue_scripts', 'simplexp_styles' );

/* ! Enqueue JS */
if( ! function_exists( 'simplexp_scripts' ) ) {
  function simplexp_scripts() {
    // General Scripts
    wp_enqueue_script( 'simplexp_script', get_template_directory_uri().'/js/script.js', [], '', true );

    if ( is_singular() && comments_open() && get_option('thread_comments') ) {
      // Comment reply script
      wp_enqueue_script( 'comment-reply' );
    }
  }
}
add_action( 'wp_enqueue_scripts', 'simplexp_scripts' );


/* ! simplexp Customizer */
function simplexp_customizer( $wp_customize ) {
  /* Require Customizer */
  require_once( get_template_directory() . '/customizer/customizer.php' );
}
add_action( 'customize_register', 'simplexp_customizer' );


/* ! Customizer CSS Code for Front End */
function simplexp_customize_css() {
  echo '<style type="text/css">';

  // Footer Colors
  $simplexp_footer_bg = esc_attr(get_theme_mod( 'simplexp_footer_bg_color' , '#eeeeee' ));
  $simplexp_footer_color = esc_attr(get_theme_mod( 'simplexp_footer_color' , '#000000' ));
  

  echo ':root{
    --link-color:'.esc_attr(get_theme_mod( 'simplexp_link_color', '#f88379')).';
    --link-color-hov:'.esc_attr(get_theme_mod( 'simplexp_link_color_hover', '#4ee46b')).';
    --header-bg:'.esc_attr(get_theme_mod( 'simplexp_header_background_color', '#eee')).';
    --header-color:'.esc_attr(get_theme_mod( 'simplexp_header_color', '#000')).';
    --button-bg:'.esc_attr(get_theme_mod( 'simplexp_button_bg', '#FA7F08')).';
    --button-bg-hov:'.esc_attr(get_theme_mod( 'simplexp_button_bg_hover', '#DB5F42')).';
    --button-color: '.esc_attr(get_theme_mod( 'simplexp_button_font_color', '#ffffff' )).';
    --footer-bg:'.$simplexp_footer_bg.';
    --footer-color:'.$simplexp_footer_color.';
  }';

  // Get font from customizer
  $simplexp_font = esc_attr(get_theme_mod( 'simplexp_google_font', 'Montserrat' ));
  if($simplexp_font != 'Montserrat') {
    echo 'body{font-family: '.$simplexp_font.';}';
  }

  // Not show spacer in the homepage
  if(is_front_page()) {
    echo '.spacer{display:none;}';
  }

  /* Header */
  $simplexp_spacer_height = 110;
  $simplexp_menu_position = esc_attr(get_theme_mod( 'simplexp_menu_position', 'right' ));

  if(esc_attr(get_theme_mod( 'simplexp_header_search', false ))) {
    $simplexp_spacer_height += 30;
  }

  if($simplexp_menu_position === 'left'){
    echo '.navbar{justify-content:start;}';
  }

  /* Menu and logo position */
  if($simplexp_menu_position === 'center') {
    $simplexp_spacer_height += 40;

    echo '.header__content{position:relative; justify-content:center; width:fit-content;}';
    echo '.header__logo{position:absolute; top:20px; left:0; width:100%; justify-content:center; }';
    echo '.header__search, .header__addons, .navbar, .hamburger-icon{margin-top:50px; width:fit-content;}';

  }

  if(esc_attr(get_theme_mod( 'simplexp_header_banner_text', '' )) !== '') {
    $simplexp_spacer_height += 40;
  }

  // Spacer
  if($simplexp_spacer_height > 110){
    echo '.spacer{height: '.$simplexp_spacer_height.'px;}';
  }
  
  if((bool) esc_attr(get_theme_mod( 'simplexp_header_border', false ))) {
    echo '.header__content{border-bottom: 1px solid black;}';
  }

  if((bool) esc_attr(get_theme_mod( 'simplexp_header_shadow', false ))) {
    echo '.header{box-shadow: 0 2px 10px rgba(0,0,0,0.2);}';
  }

  echo '</style>';
}
add_action( 'wp_head', 'simplexp_customize_css' );

/* Cart Icon */
if(class_exists( 'WooCommerce' )) {

  // Returns the main menu cart link
  function simplexp_cart_icon() {
    $cart_count = absint(WC()->cart->cart_contents_count);
    $cart_total = WC()->cart->get_cart_total();
    $url = wc_get_cart_url();
    $icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="currentColor">
              <path d="M1 2V4H3L6.6 11.59 5.25 14.03C4.52 15.37 5.48 17 7 17H19V15H7L8.1 13H15.5512C16.3012 13 16.9613 12.5907 17.3013 11.9707L20.8814 5.48047C20.9908 5.28528 20.8159 3.491 19.1401 4.45408 19.1413 4.45413 19.1414 4.45419 19.1426 4.45424L15.5509 11H8.52934L6.16409 6.00781C6.16206 6.00776 6.15867 6.00268 6.15628 6.00172L6.15525 6.00078L6.15526 6.00079L4.27051 2ZM7 18C5.90003 18 5.00977 18.9 5.00977 20 5.00977 21.1 5.90003 22 7 22 8.09997 22 9.00977 21.1 9.00977 20 9.00977 18.9 8.09997 18 7 18ZM17 18C15.90003 18 15.00977 18.9 15.00977 20 15.00977 21.1 15.90003 22 17 22 18.09997 22 19.00977 21.1 19.00977 20 19.00977 18.9 18.09997 18 17 18Z"/>
              <text x="12" y="9" text-anchor="middle" font-size="12" fill="currentColor">'.wp_kses_post($cart_count).'</text>
            </svg>
    ';
    $output = sprintf('<a href="%s" class="menu-cart">%s</a>', esc_url($url), $icon);
    return $output;
  }

  // Update cart link with AJAX
  function simplexp_cart_icon_fragments($fragments) {
    $fragments['.menu-cart'] = simplexp_cart_icon();
    return $fragments;
  }
  add_filter('add_to_cart_fragments', 'simplexp_cart_icon_fragments');
}

?>