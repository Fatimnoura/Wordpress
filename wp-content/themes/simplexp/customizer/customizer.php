<?php

  /* ! Header Section */
  $wp_customize->add_section( 'simplexp_header_section', array(
    'title'    => __( 'Header Setup', 'simplexp' ),
    'priority' => 20,
  ) );

  // Header Menu Position
  $wp_customize->add_setting( 'simplexp_menu_position', array(
      'default' => 'right',
      'transport' => 'refresh',
      'sanitize_callback' => 'simplexp_sanitize_menu_position',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'simplexp_menu_position', array(
      'label'    => __( 'Menu & Logo Position', 'simplexp' ),
      'section'  => 'simplexp_header_section',
      'setings' => 'simplexp_menu_position',
      'description' => __('It\'s possible to move the menu to the left or right, by selecting center both the menu and the logo will be centered on different lines', 'simplexp'),
      'type'     => 'select',
      'choices'  => array(
          'left'    => __( 'Sinistra', 'simplexp' ),
          'center'  => __( 'Centro', 'simplexp' ),
          'right'   => __( 'Destra', 'simplexp' ),
      ),
  )));

  // Header Banner text
  $wp_customize->add_setting( 'simplexp_header_banner_text', array(
    'default' => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'simplexp_header_banner_text', array(
    'label' => __('Banner text (empty = no banner)', 'simplexp'),
    'section' => 'simplexp_header_section',
    'settings' => 'simplexp_header_banner_text',
    'type' => 'text',
    'input_attrs' => array(
      'placeholder' => __('E.g. Black Friday -40%', 'simplexp'),
    ),
  )));

  // Header Banner Link
  $wp_customize->add_setting( 'simplexp_header_banner_url', array(
    'default' => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'esc_url',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'simplexp_header_banner_url', array(
    'label'    => __('Banner URL (empty = no URL)', 'simplexp'),
    'section'  => 'simplexp_header_section',
    'settings'  => 'simplexp_header_banner_url',
    'type'     => 'text',
    'active_callback' => function ($control) {
      return $control->manager->get_setting('simplexp_header_banner_text')->value() !== '';
    },
  )));

  // Header Search Bar
  $wp_customize->add_setting( 'simplexp_header_search', array(
    'default' => false,
    'transport' => 'refresh',
    'sanitize_callback' => 'simplexp_sanitize_checkbox',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'simplexp_header_search', array(
    'label' => __('Show Search bar', 'simplexp' ),
    'section' => 'simplexp_header_section',
    'settings' => 'simplexp_header_search',
    'type' => 'checkbox',
  )));

  //Header search only products
  if(class_exists( 'WooCommerce' )) {

    $wp_customize->add_setting( 'simplexp_header_search_product', array(
      'default' => false,
      'sanitize_callback' => 'simplexp_sanitize_checkbox',
    ));
  
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'simplexp_header_search_product', array(
      'label' => __('Search Only Products', 'simplexp' ),
      'section' => 'simplexp_header_section',
      'settings' => 'simplexp_header_search_product',
      'type' => 'checkbox',
      'active_callback' => function ($control) {
        return $control->manager->get_setting('simplexp_header_search')->value() === '1';
      },
    )));

  }

  // Header Border
  $wp_customize->add_setting( 'simplexp_header_border', array(
    'default' => false,
    'sanitize_callback' => 'simplexp_sanitize_checkbox'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'simplexp_header_border', array(
    'label' => __('Show Border', 'simplexp'),
    'section' => 'simplexp_header_section',
    'settings' => 'simplexp_header_border',
    'type' => 'checkbox',
  )));

  // Header Shadow
  $wp_customize->add_setting( 'simplexp_header_shadow', array(
    'default' => false,
    'sanitize_callback' => 'simplexp_sanitize_checkbox'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'simplexp_header_shadow', array(
    'label' => __('Show Shadow', 'simplexp'),
    'section' => 'simplexp_header_section',
    'settings' => 'simplexp_header_shadow',
    'type' => 'checkbox',
  )));



  /* ! Colors Section */
  // Header Backgound Color
  $wp_customize->add_setting( 'simplexp_header_background_color' , array(
    'default' => '#eee',
    'transport' => 'refresh',
    'sanitize_callback' => 'simplexp_sanitize_color_hex_rgba',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'simplexp_header_background_color' , array(
    'label' => __( 'Header Background', 'simplexp' ),
    'section' => 'colors',
    'settings' => 'simplexp_header_background_color',
    'type'     => 'text',
    'description' => __('It\'s possible to insert a hex value of 3, 6, 8 digits or an rgba value. To make the header transparent enter an rgba value or an 8-digit hex value.', 'simplexp'),
  )));

  // Header Color
  $wp_customize->add_setting( 'simplexp_header_color' , array(
    'default' => '#000',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'simplexp_header_color' , array(
    'label' => __('Header Text Color', 'simplexp' ),
    'section' => 'colors',
    'settings' => 'simplexp_header_color',
  )));

  // Link color
	$wp_customize->add_setting( 'simplexp_link_color' , array(
    'default'   => '#f88379',
    'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'simplexp_link_color_control', array(
		'label'      => __( 'Link Color', 'simplexp' ),
		'section'    => 'colors',
		'settings'   => 'simplexp_link_color',
	)));

  // Link color Hover
	$wp_customize->add_setting( 'simplexp_link_color_hover' , array(
    'default'   => '#4ee46b',
    'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'simplexp_link_color_hover_control', array(
		'label'      => __( 'Link Color Hover', 'simplexp' ),
		'section'    => 'colors',
		'settings'   => 'simplexp_link_color_hover',
	)));

  // Button Background color
  $wp_customize->add_setting( 'simplexp_button_bg' , array(
    'default' => '#FA7F08',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'simplexp_button_bg', array(
    'label' => __( 'Button Background', 'simplexp' ),
    'section' => 'colors',
    'settings' => 'simplexp_button_bg',
  )));

  // Button Hover Background color
  $wp_customize->add_setting( 'simplexp_button_bg_hover' , array(
    'default' => '#DB5F42',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'simplexp_button_bg_hover', array(
    'label' => __( 'Button bg hover', 'simplexp' ),
    'section' => 'colors',
    'settings' => 'simplexp_button_bg_hover',
  )));

  // Button font color
  $wp_customize->add_setting( 'simplexp_button_font_color', array(
    'default' => '#ffffff',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'simplexp_button_font_color', array(
    'label' => __( 'Button text color' , 'simplexp' ),
    'section' => 'colors',
    'settings' => 'simplexp_button_font_color',
  )));

  // Footer Background color
  $wp_customize->add_setting( 'simplexp_footer_bg_color', array(
    'default' => '#eeeeee',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'simplexp_footer_bg_color', array(
    'label' => __( 'Footer Background Color' , 'simplexp' ),
    'section' => 'colors',
    'settings' => 'simplexp_footer_bg_color',
  )));

  // Footer Text color
  $wp_customize->add_setting( 'simplexp_footer_color', array(
    'default' => '#000000',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'simplexp_footer_color', array(
    'label' => __( 'Footer Text Color' , 'simplexp' ),
    'section' => 'colors',
    'settings' => 'simplexp_footer_color',
  )));




  /* ! Font Section */
  $wp_customize->add_section( 'simplexp_font_typography_section', array(
    'title'    => __( 'Font', 'simplexp' ),
    'priority' => 30,
  ));

  // Google font
  $wp_customize->add_setting( 'simplexp_google_font', array(
    'default' => 'Montserrat',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'simplexp_google_font', array(
    'label'    => __( 'Font name', 'simplexp' ),
    'section'  => 'simplexp_font_typography_section',
    'settings' => 'simplexp_google_font',
    'description' => __('Enter a font name among those available on Google Fonts', 'simplexp'),
    'type'     => 'text',
  )));



  /* Custom Sanitize Functions */

  // Sanitization function for simplexp_menu_position
  function simplexp_sanitize_menu_position( $simplexp_input ) {
    $valid_options = array( 'left', 'center', 'right' );

    // Checks whether the option entered by the user is valid
    if( in_array( $simplexp_input, $valid_options ) ) {
        return sanitize_text_field($simplexp_input); // return if valid
    } else {
        return 'right'; // return default value if not valid
    }
  }

  // Sanitize color function for hex and rgba
  function simplexp_sanitize_color_hex_rgba( $simplexp_color ) {
    // Check value for valid hex or rgba 
    if(preg_match( '/^rgba\((\d+),\s*(\d+),\s*(\d+),\s*(\d*\.?\d+)\)$/', $simplexp_color, $matches )) {
      // Return rgba value
      return sanitize_text_field("rgba($matches[1], $matches[2], $matches[3], $matches[4])");
    } elseif(preg_match( '/^#([a-fA-F0-9]{6}|[a-fA-F0-9]{8}|[a-fA-F0-9]{3})$/', $simplexp_color )) {
      // return three, six or eight digits hex value
      return sanitize_text_field($simplexp_color);
    }

    // Return empty if value is not a valid hex or rgba
    return '';
  }

  function simplexp_sanitize_checkbox($input){
    return (isset($input) && true == $input ? true : false);
  }
  
