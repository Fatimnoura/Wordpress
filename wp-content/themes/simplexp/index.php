<?php
/**
 * Index Template (Main template file)
 *
 * This is the theme's main template, it is a required file along with style.css. Is used to 
 * display post lists when there isn't a more specific template for a query.
 * It's used to display search result, blog page, category and tag page and the archive page.
 *
 * @package simplexp
 */
get_header(); ?>

<div class="search-form__container">
  <?php echo get_search_form(); ?>
</div>

<main id="content" class="container">

  <?php if(is_search()): ?>
    <h1 class="text-center p-2"><?php echo esc_html_e('Result for:', 'simplexp'); ?> <?php echo esc_html($s); ?></h1>

  <?php elseif(is_home()): ?>
    <h1 class="text-center p-4"><?php echo get_bloginfo('name'); ?> <?php echo get_bloginfo('description'); ?></h1>

  <?php elseif(is_category() || is_tag()): ?>
    <h1 class="text-center p-4"><?php echo single_cat_title(); ?></h1>

  <?php elseif(is_date()): ?>
    <h1 class="text-center p-4"><?php single_month_title(' '); ?></h1>

  <?php elseif(is_archive()): ?>
    <h1 class="text-center p-4"><?php post_type_archive_title(); ?></h1>
  <?php endif; ?>

  <?php if (have_posts ()) :?><?php while(have_posts ()) : the_post (); ?>
  
  
  <!-- loop content -->
  <article id="post-<?php the_ID() ?>" <?php post_class('row mb-4') ?>>
    <?php if(has_post_thumbnail()): ?>
      <div class="col-40">

          <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('simplexp_thumbnail', array('class' => 'img-res', 'alt' => get_the_title())); ?>

          </a>
      </div>
      <div class="col-60 p-3">
    <?php else: ?>
      <div class="col-100 p-3">
    <?php endif; ?>
    
      <a href="<?php the_permalink(); ?>">
        <h3><?php the_title(); ?></h3>
      </a>
      <?php if(get_post_type() == "post"): ?>
        <p><strong><?php the_time(' j M, Y') ?></strong> - <?php the_category(',') ?></p>
      <?php endif; ?>
      <p><?php the_excerpt(); ?></p>
        
    </div>
  </article>
  
  <?php endwhile; ?>
  <div class="col-100">
    <p class="text-center"><?php previous_posts_link( 'Older posts' ); ?> - <?php next_posts_link( 'Newer posts' ); ?></p>
  </div>
  <?php else : ?>
    <div class="col-100">
      <p class="text-center"><?php esc_html_e('Sorry, no posts matched your criteria.', 'simplexp'); ?></p>
    </div>
  <?php endif; ?>

</main>
  
<?php get_footer(); ?>