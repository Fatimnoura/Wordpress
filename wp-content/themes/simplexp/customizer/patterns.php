<?php

// Hero
register_block_pattern(
  'simplexp/simplexp-cover-section',
  array(
    'title'       => __( 'simplexp - Cover Section Fullwidth', 'simplexp' ),
    'description' => __( 'Cover section with background image and text and call to action.', 'simplexp' ),
    'content'     => '<!-- wp:cover {"url":"https://picsum.photos/id/411/1200/800","id":9,"dimRatio":30,"className":"fullwidth","layout":{"type":"constrained"}} -->
    <div class="wp-block-cover fullwidth"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-9" alt="" src="https://picsum.photos/id/411/1200/800" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"250px"} -->
    <div style="height:250px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:heading {"textAlign":"center","level":1,"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|80","right":"var:preset|spacing|80"}}}} -->
    <h1 class="wp-block-heading alignfull has-text-align-center" style="padding-top:0;padding-right:var(--wp--preset--spacing--80);padding-bottom:0;padding-left:var(--wp--preset--spacing--80)">Welcome to simplexp</h1>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} -->
    <p class="has-text-align-center" style="padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore<br>et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud<br>exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"4px"}}} -->
    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:4px">CALL TO ACTION</a></div>
    <!-- /wp:button -->
    
    <!-- wp:button {"style":{"border":{"width":"2px","radius":"4px"},"color":{"background":"#ffffff00"}}} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" href="#" style="border-width:2px;border-radius:4px;background-color:#ffffff00">BUTTON 2</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->
    
    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"33.34%"} -->
    <div class="wp-block-column" style="flex-basis:33.34%"></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"33.34%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"className":"text-center"} -->
    <div class="wp-block-column text-center" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);flex-basis:33.34%"><!-- wp:html -->
    <span class="icon-chevron-down"></span>
    <!-- /wp:html --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"33.33%"} -->
    <div class="wp-block-column" style="flex-basis:33.33%"></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:spacer -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div></div>
    <!-- /wp:cover -->',
  )
);

// Banner
register_block_pattern(
  'simplexp/simplexp-banner',
  array(
    'title'       => __( 'simplexp - Banner Fullwidth', 'simplexp' ),
    'description' => __( 'Fullwidth banner with a title and a description.', 'simplexp' ),
    'content'     => '<!-- wp:columns {"style":{"color":{"background":"#f28a2e"}},"className":"banner"} -->
    <div class="wp-block-columns banner has-background" style="background-color:#f28a2e"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"textColor":"white"} -->
    <h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">Personalized Banner</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
    <p class="has-text-align-center has-white-color has-text-color has-link-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->',
  )
);



// Services
register_block_pattern(
  'simplexp/simplexp-services',
  array(
      'title'       => __('simplexp - Services', 'simplexp'),
      'description' => __('A simple service section with title, description and one card for each service.', 'simplexp'),
      'content'     => '<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
      <div class="wp-block-group alignwide"><!-- wp:spacer -->
      <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
      <!-- /wp:spacer -->
      
      <!-- wp:heading {"textAlign":"center"} -->
      <h2 class="wp-block-heading has-text-align-center">Services</h2>
      <!-- /wp:heading -->
      
      <!-- wp:paragraph {"align":"center"} -->
      <p class="has-text-align-center">Some of our Products</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:spacer -->
      <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
      <!-- /wp:spacer -->
      
      <!-- wp:columns {"align":"full"} -->
      <div class="wp-block-columns alignfull"><!-- wp:column -->
      <div class="wp-block-column"><!-- wp:cover {"url":"https://picsum.photos/id/1060/500/334","id":340,"dimRatio":40,"layout":{"type":"constrained"}} -->
      <div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-340" alt="" src="https://picsum.photos/id/1060/500/334" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
      <h3 class="wp-block-heading has-text-align-center has-medium-font-size">Service   One</h3>
      <!-- /wp:heading -->
      
      <!-- wp:paragraph {"align":"center"} -->
      <p class="has-text-align-center">Lorem ipsum dolor sit amet</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
      <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"4px"}}} -->
      <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:4px">More Info</a></div>
      <!-- /wp:button --></div>
      <!-- /wp:buttons --></div></div>
      <!-- /wp:cover --></div>
      <!-- /wp:column -->
      
      <!-- wp:column -->
      <div class="wp-block-column"><!-- wp:cover {"url":"https://picsum.photos/id/785/500/334","id":341,"dimRatio":40,"layout":{"type":"constrained"}} -->
      <div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-341" alt="" src="https://picsum.photos/id/785/500/334" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
      <h3 class="wp-block-heading has-text-align-center has-medium-font-size">Service  Two</h3>
      <!-- /wp:heading -->
      
      <!-- wp:paragraph {"align":"center"} -->
      <p class="has-text-align-center">Mollit anim id est laborum.</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
      <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"4px"}}} -->
      <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:4px">More Info</a></div>
      <!-- /wp:button --></div>
      <!-- /wp:buttons --></div></div>
      <!-- /wp:cover --></div>
      <!-- /wp:column -->
      
      <!-- wp:column -->
      <div class="wp-block-column"><!-- wp:cover {"url":"https://picsum.photos/id/998/500/334","id":342,"dimRatio":40,"layout":{"type":"constrained"}} -->
      <div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-342" alt="" src="https://picsum.photos/id/998/500/334" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
      <h3 class="wp-block-heading has-text-align-center has-medium-font-size">Service Three</h3>
      <!-- /wp:heading -->
      
      <!-- wp:paragraph {"align":"center"} -->
      <p class="has-text-align-center">Lorem ipsum dolor sit amet.</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
      <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"4px"}}} -->
      <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:4px">More Info</a></div>
      <!-- /wp:button --></div>
      <!-- /wp:buttons --></div></div>
      <!-- /wp:cover --></div>
      <!-- /wp:column --></div>
      <!-- /wp:columns -->
      
      <!-- wp:spacer {"height":"60px"} -->
      <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
      <!-- /wp:spacer --></div>
      <!-- /wp:group -->',
  )
);

// Buttons
register_block_pattern(
  'simplexp/simplexp-button',
  array(
    'title' => __('simplexp - Buttons', 'simplexp'),
    'description' => __('Two buttons, one filled the other outlined', 'simplexp'),
    'content' => '<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:button {"style":{"border":{"radius":"4px"}}} -->
    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:4px">Prova</a></div>
    <!-- /wp:button -->
    
    <!-- wp:button {"textColor":"black","style":{"border":{"radius":"4px","width":"2px"},"color":{"background":"#ffffff00"},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"borderColor":"black"} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-black-color has-text-color has-background has-link-color has-border-color has-black-border-color wp-element-button" style="border-width:2px;border-radius:4px;background-color:#ffffff00">Lorem Ipsum</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->',
  )
);

// Hero fullwidth
register_block_pattern(
  'simplexp/simplexp-hero-fullwidth',
  array(
    'title' => __('simplexp - Hero Fullwidth', 'simplexp'),
    'description' => __('A fullwidth hero with an image a title, description and call to action.', 'simplexp'),
    'content' => '<!-- wp:media-text {"mediaPosition":"right","mediaId":303,"mediaLink":"http://simplexp.local/home/img-bg/","mediaType":"image","mediaWidth":44,"verticalAlignment":"center","imageFill":true,"className":"fullwidth"} -->
    <div class="wp-block-media-text has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center is-image-fill fullwidth" style="grid-template-columns:auto 44%"><div class="wp-block-media-text__content"><!-- wp:spacer -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:heading {"textAlign":"left"} -->
    <h2 class="wp-block-heading has-text-align-left">Lorem Ipsum dolor sit amet text text text</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"left"} -->
    <p class="has-text-align-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:button {"style":{"border":{"radius":"4px"}}} -->
    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:4px">Prova</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->
    
    <!-- wp:spacer -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div><figure class="wp-block-media-text__media" style="background-image:url(https://picsum.photos/id/1024/824/908);background-position:50% 50%"><img src="https://picsum.photos/id/1024/824/908" alt="" class="wp-image-303 size-full"/></figure></div>
    <!-- /wp:media-text -->',
  )
);

// Hero
register_block_pattern(
  'simplexp/simplexp-hero',
  array(
    'title' => __('simplexp - Hero', 'simplexp'),
    'description' => __('A hero with an image a title, description and a call to action.', 'simplexp'),
    'content' => '<!-- wp:media-text {"mediaId":421,"mediaLink":"http://simplexp.local/home/cover2/","mediaType":"image","mediaWidth":58,"verticalAlignment":"center","imageFill":false} -->
    <div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center" style="grid-template-columns:58% auto"><figure class="wp-block-media-text__media"><img src="https://picsum.photos/id/955/1152/1152" alt="" class="wp-image-421 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:spacer {"height":"140px"} -->
    <div style="height:140px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:heading {"textAlign":"left"} -->
    <h2 class="wp-block-heading has-text-align-left">Lorem Ipsum dolor sit amet text text text</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"left"} -->
    <p class="has-text-align-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:button {"style":{"border":{"radius":"4px"}}} -->
    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:4px">Prova</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->
    
    <!-- wp:spacer {"height":"131px"} -->
    <div style="height:131px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div></div>
    <!-- /wp:media-text -->',
  )
);

// Contacts
register_block_pattern(
  'simplexp/simplexp-contacts',
  array(
    'title' => __('simplexp - Contacts Section', 'simplexp'),
    'description' => __('Contact section with cards and icons for telephone, email and address', 'simplexp'),
    'content' => '<!-- wp:group {"className":"contacts","layout":{"type":"constrained"}} -->
    <div class="wp-block-group contacts"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:spacer {"height":"80px"} -->
    <div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:heading {"textAlign":"center"} -->
    <h2 class="wp-block-heading has-text-align-center">Contacts</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Lorem ipsum dolor sit amet</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"60px"} -->
    <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:columns {"align":"full"} -->
    <div class="wp-block-columns alignfull"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"className":"card text-center"} -->
    <div class="wp-block-column card text-center" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"center","level":3} -->
    <h3 class="wp-block-heading has-text-align-center">Phone</h3>
    <!-- /wp:heading -->
    
    <!-- wp:html -->
    <span class="icon-phone"></span>
    <!-- /wp:html -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><a href="tel:123 45678 90">123 45678 90</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"className":"card text-center"} -->
    <div class="wp-block-column card text-center" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"center","level":3} -->
    <h3 class="wp-block-heading has-text-align-center">Email</h3>
    <!-- /wp:heading -->
    
    <!-- wp:html -->
    <span class="icon-envelope"></span>
    <!-- /wp:html -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><a href="mailto:info@test.com">info@test.com</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"className":"card text-center"} -->
    <div class="wp-block-column is-vertically-aligned-center card text-center" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"center","level":3} -->
    <h3 class="wp-block-heading has-text-align-center">Address</h3>
    <!-- /wp:heading -->
    
    <!-- wp:html -->
    <span class="icon-map"></span>
    <!-- /wp:html -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><a href="https://www.google.com/maps/place/Via+Cesare+Beccaria,+00196+Roma+RM/">Rome, via Beccaria 10.</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:spacer {"height":"60px"} -->
    <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->',
  )
);

// Final CTA
register_block_pattern(
  'simplexp/simplexp-final-cta',
  array(
    'title' => __('simplexp - Final CTA', 'simplexp'),
    'description' => __('Last CTA block with title description and CTA button', 'simplexp'),
    'content' => '<!-- wp:cover {"customOverlayColor":"#f28a2e","isDark":false,"className":"fullwidth","layout":{"type":"constrained"}} -->
    <div class="wp-block-cover is-light fullwidth"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#f28a2e"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"large"} -->
    <h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color has-large-font-size">Ready to take the next step?<br>Make your vision a reality.</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
    <p class="has-text-align-center has-white-color has-text-color has-link-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br>eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","style":{"border":{"radius":"4px","width":"2px"},"color":{"background":"#ffffff00"}},"borderColor":"white","className":"is-style-fill"} -->
    <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background has-border-color has-white-border-color has-text-align-center wp-element-button" style="border-width:2px;border-radius:4px;background-color:#ffffff00">LAST CTA</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div></div>
    <!-- /wp:cover -->',
  )
);

// FAQ
register_block_pattern(
  'simplexp/simplexp-faq',
  array(
    'title' => __('simplexp - FAQ section', 'simplexp'),
    'description' => __('Frequentlly asked questions section.', 'simplexp'),
    'content' => '<!-- wp:group {"className":"faq","layout":{"type":"constrained"}} -->
    <div class="wp-block-group faq"><!-- wp:spacer {"height":"70px"} -->
    <div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:heading {"textAlign":"center"} -->
    <h2 class="wp-block-heading has-text-align-center">Frequently Asked Questions</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:columns {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-columns" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:columns {"verticalAlignment":"center","className":"faq-title"} -->
    <div class="wp-block-columns are-vertically-aligned-center faq-title"><!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0"}}}} -->
    <h3 class="wp-block-heading" style="margin-top:0"><a href="#">What payment methods are accepted?</a></h3>
    <!-- /wp:heading --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"10%","className":"icon"} -->
    <div class="wp-block-column is-vertically-aligned-center icon" style="flex-basis:10%"></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:paragraph -->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph -->
    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"20px"} -->
    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->
    
    <!-- wp:columns {"verticalAlignment":"center","className":"faq-title"} -->
    <div class="wp-block-columns are-vertically-aligned-center faq-title"><!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0"}}}} -->
    <h3 class="wp-block-heading" style="margin-top:0"><a href="#">What are the delivery times?</a></h3>
    <!-- /wp:heading --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"10%","className":"icon"} -->
    <div class="wp-block-column is-vertically-aligned-center icon" style="flex-basis:10%"></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:paragraph -->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph -->
    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"20px"} -->
    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->
    
    <!-- wp:columns {"verticalAlignment":"center","className":"faq-title"} -->
    <div class="wp-block-columns are-vertically-aligned-center faq-title"><!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0"}}}} -->
    <h3 class="wp-block-heading" style="margin-top:0"><a href="#">What are the opening hours?</a></h3>
    <!-- /wp:heading --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"10%","className":"icon"} -->
    <div class="wp-block-column is-vertically-aligned-center icon" style="flex-basis:10%"></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:paragraph -->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"20px"} -->
    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->
    
    <!-- wp:columns {"verticalAlignment":"center","className":"faq-title"} -->
    <div class="wp-block-columns are-vertically-aligned-center faq-title"><!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0"}}}} -->
    <h3 class="wp-block-heading" style="margin-top:0"><a href="#">How can I reset my password?</a></h3>
    <!-- /wp:heading --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"10%","className":"icon"} -->
    <div class="wp-block-column is-vertically-aligned-center icon" style="flex-basis:10%"></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:paragraph -->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"10px"} -->
    <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
  )
);

// Testimonials
register_block_pattern(
  'simplexp/simplexp-testimonials',
  array(
    'title' => __('simplexp - Testimonials section', 'simplexp'),
    'description' => __('Testimonials section with cards rounded image title and description.', 'simplexp'),
    'content' => '<!-- wp:group {"className":"testimonials","layout":{"type":"constrained"}} -->
    <div class="wp-block-group testimonials"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:spacer {"height":"80px"} -->
    <div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:heading {"textAlign":"center"} -->
    <h2 class="wp-block-heading has-text-align-center">Testimonials</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"70px"} -->
    <div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
    <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|80","right":"var:preset|spacing|80"}}},"className":"card","layout":{"type":"constrained"}} -->
    <div class="wp-block-group card" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--80)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:image {"align":"right","id":392,"width":"90px","height":"90px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
    <figure class="wp-block-image alignright size-full is-resized is-style-rounded"><img src="https://picsum.photos/id/64/163/137" alt="" class="wp-image-392" style="object-fit:cover;width:90px;height:90px"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"66.66%"} -->
    <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
    <h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--60)">Testimonial One</h3>
    <!-- /wp:heading --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:paragraph -->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|80","right":"var:preset|spacing|80"}}},"className":"card","layout":{"type":"constrained"}} -->
    <div class="wp-block-group card" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--80)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:image {"align":"right","id":406,"width":"90px","height":"90px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
    <figure class="wp-block-image alignright size-full is-resized is-style-rounded"><img src="https://picsum.photos/id/338/163/137" alt="" class="wp-image-406" style="object-fit:cover;width:90px;height:90px"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"66.66%"} -->
    <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
    <h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--60)">Lorem Ipsum</h3>
    <!-- /wp:heading --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:paragraph -->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
    <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|80","right":"var:preset|spacing|80"}}},"className":"card","layout":{"type":"constrained"}} -->
    <div class="wp-block-group card" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--80)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:image {"align":"right","id":405,"width":"90px","height":"90px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
    <figure class="wp-block-image alignright size-full is-resized is-style-rounded"><img src="https://picsum.photos/id/447/163/137" alt="" class="wp-image-405" style="object-fit:cover;width:90px;height:90px"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"66.66%"} -->
    <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
    <h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--60)">Testimonial Two</h3>
    <!-- /wp:heading --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:paragraph -->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|80","right":"var:preset|spacing|80"}}},"className":"card","layout":{"type":"constrained"}} -->
    <div class="wp-block-group card" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--80)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:image {"align":"right","id":407,"width":"90px","height":"90px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
    <figure class="wp-block-image alignright size-full is-resized is-style-rounded"><img src="https://picsum.photos/id/550/163/137" alt="" class="wp-image-407" style="object-fit:cover;width:90px;height:90px"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"66.66%"} -->
    <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
    <h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--60)">Sit Amet</h3>
    <!-- /wp:heading --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:paragraph -->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
  )
);

// Aboutus
register_block_pattern(
  'simplexp/simplexp-aboutus',
  array(
    'title' => __('simplexp - About Us section', 'simplexp'),
    'description' => __('About us with title description and cards with icons.', 'simplexp'),
    'content' => '<!-- wp:group {"className":"aboutus","layout":{"type":"constrained"}} -->
    <div class="wp-block-group aboutus"><!-- wp:spacer {"height":"80px"} -->
    <div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:heading {"textAlign":"center"} -->
    <h2 class="wp-block-heading has-text-align-center">Who We Are</h2>
    <!-- /wp:heading -->
    
    <!-- wp:separator -->
    <hr class="wp-block-separator has-alpha-channel-opacity"/>
    <!-- /wp:separator -->
    
    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
    <p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--40)">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat<br>cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"10px"} -->
    <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"className":"card"} -->
    <div class="wp-block-column card" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:html -->
    <span class="icon-wrench"></span>
    <!-- /wp:html --></div>
    <!-- /wp:group -->
    
    <!-- wp:heading {"textAlign":"center","level":3} -->
    <h3 class="wp-block-heading has-text-align-center">Lorem Ipsum</h3>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"className":"card"} -->
    <div class="wp-block-column card" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:html -->
    <span class="icon-chart"></span>
    <!-- /wp:html --></div>
    <!-- /wp:group -->
    
    <!-- wp:heading {"textAlign":"center","level":3} -->
    <h3 class="wp-block-heading has-text-align-center">Duis aute irure</h3>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"className":"card"} -->
    <div class="wp-block-column card" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:html -->
    <span class="icon-briefcase"></span>
    <!-- /wp:html --></div>
    <!-- /wp:group -->
    
    <!-- wp:heading {"textAlign":"center","level":3} -->
    <h3 class="wp-block-heading has-text-align-center">Excepteur sint</h3>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"className":"card"} -->
    <div class="wp-block-column card" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:html -->
    <span class="icon-shield"></span>
    <!-- /wp:html --></div>
    <!-- /wp:group -->
    
    <!-- wp:heading {"level":3} -->
    <h3 class="wp-block-heading">Ulamco Laboris</h3>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:spacer {"height":"60px"} -->
    <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->',
  )
);
