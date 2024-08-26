<?php
/**
 * 404 Template
 *
 * This template shows 404 not found page.
 *
 * @package simplexp
 */

get_header(); ?>

<main id="content" class="container" role="main">

<article>

  <div class="text-center">

    <div class="search-form__container">
    <?php get_search_form(); ?>
    </div>

    <h1 class="mt-2"><?php esc_html_e( 'Oops! This page can&rsquo;t be found.', 'simplexp' ); ?></h1>
    <h2><?php esc_html_e( '404 Error', 'simplexp' ); ?></h2>

    <p><?php esc_html_e( 'The page you are trying to reach does not exist, or has been moved. Please use the menus or the search box to find what you are looking for.', 'simplexp' ); ?></p>

    

  </div>

</article>

</main>
  
<?php get_footer(); ?>