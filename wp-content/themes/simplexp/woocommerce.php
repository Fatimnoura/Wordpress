<?php
/**
 * WooCommerce Template
 *
 * This is the main template used to display WooCommerce pages, including the cart, checkout,
 * individual products, and other store-related pages.
 *
 * @package simplexp
 */
get_header(); ?>

  <div class="row">
    <?php if(is_active_sidebar( 'shop' )): ?>
      <aside class="col-20">
        <div class="sticky-container">
          <?php dynamic_sidebar( 'shop' ) ?>
        </div>
      </aside>
      <div class="col-80">
    <?php else: ?>
      <div class="col-100">
    <?php endif; ?>
    
      <main id="content" role="main">
        <?php woocommerce_content(); ?>
      </main>
    </div>
  </div>


<?php get_footer(); ?>