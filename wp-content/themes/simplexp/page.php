<?php
/**
 * Page Template (Display all pages)
 *
 * This is the template used to display all pages by default. If a static home page is set
 * it is displayed through this template and the title (Home) is not shown, use
 * front-page.php to customize the static home page.
 *
 * @package simplexp
 */
get_header(); ?>

<main id="content" class="">

  <?php if (have_posts ()) :?><?php while(have_posts ()) : the_post (); ?>
  
  
  <!-- loop content -->

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if(!is_front_page()): ?>
      <h1><?php the_title(); ?></h1>
    <?php endif; ?>

    <?php if(has_post_thumbnail()): ?>
      <?php the_post_thumbnail('simplexp_single', array('class' => '', 'alt' => get_the_title())); ?>
    <?php endif; ?>

    <?php the_content(esc_html__('Read More...', 'simplexp')); ?>
  
  </article>
  
  <?php endwhile; ?>

  <?php else : ?>
    <p> <?php esc_html_e('Sorry, no posts matched your criteria.', 'simplexp'); ?></p> 
  <?php endif; ?>
</main>
<?php get_footer(); ?>