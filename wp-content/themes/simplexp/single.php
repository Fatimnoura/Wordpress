<?php
/**
 * Single Post Template
 *
 * This is the template used to display individual blog or news section articles.
 *
 * @package simplexp
 */
get_header(); ?>

<main id="content" class="container">

  <?php if(have_posts()):?><?php while(have_posts()): the_post(); ?>

  <?php
    $authorId = get_the_author_meta('ID'); // Author Id
    $tags = get_the_tags(); // Get post tags
    $categories = get_the_category();// Get post categories
  ?>
  
  
  <article id="post-<?php the_ID() ?>" <?php post_class('row') ?>>
    <div class="col-100">

    <div class="post-labels">
        <?php if($categories): ?>
          <ul class="post-categories">
            <?php foreach($categories as $cat): ?>
              <li title="Vai alla categoria"><a href="<?php echo esc_url(get_tag_link($cat->term_id))?>" rel="category tag"><?php echo esc_html($cat->name); ?></a></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
        <?php if($tags): ?>
          <ul class="post-tags">
            <?php foreach($tags as $tag): ?>
              <li title="Vai al tag"><a href="<?php echo esc_url(get_tag_link($tag->term_id))?>"><?php echo esc_html($tag->name); ?></a></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>

      <h1><?php the_title(); ?></h1>

      
      <div class="post-info pb-3">
          <?php echo get_avatar($authorId); ?>

          <p class="pl-2"><a href=""><b><?php the_author() ?></b></a><br>
          <small><strong><?php the_time('j M, Y'); ?></strong></small></p>
      </div>

      <?php the_post_thumbnail('simplexp_big', array('class' => 'img-res mb-2', 'alt' => get_the_title())); ?>

      <?php the_content(esc_html__('Read More...', 'simplexp')); ?>

      <?php wp_link_pages(array(
          'before'      => '<div class="page-links text-center">' . esc_html__( 'Pages:', 'simplexp' ),
          'after'       => '</div>',
          'link_before' => '<span class="page-number">',
          'link_after'  => '</span>',
      )); ?>

      <hr>

      <?php comments_template(); ?>
    </div>
  
  </article>

  
      <?php

        // Custom Loop
        $custom_loop = new WP_Query(array(
          'cat' => wp_get_post_categories(get_the_ID()),
          'post__not_in' => array(get_the_ID()),
          'post_per_page' => -1, // Show all the post of the category
          'orderby' => 'date',
        ));

      ?>

    <div class="related">
      <?php if($custom_loop->have_posts()): // Check for custom loop posts ?>
        <div class="related__title">
        <h3 class="text-center"><?php esc_html_e('Related Post', 'simplexp') ?></h3>
        </div>
        <div class="related__content">
          <?php while($custom_loop->have_posts()): $custom_loop->the_post(); ?>
            <div class="related__post p-2">
              <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail('medium', array('class' => '', 'alt' => get_the_title())) ?>
                <h3><?php the_title() ?></h3>
              </a>
              <p>
                <?php the_time('j M, Y') ?> - <?php the_category(' ') ?>
                <?php if(!empty(wp_get_post_tags($post->ID))): ?>
                  <?php the_tags('- ', ',  ', '');?>
                <?php endif; ?>
            </p>
            </div>
            <?php wp_reset_postdata();?>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  
  <?php endwhile; ?>

  <?php else : ?>
    <p> <?php esc_html_e('Sorry, no posts matched your criteria.', 'simplexp'); ?></p> 
  <?php endif; ?>
</main>
<?php get_footer(); ?>