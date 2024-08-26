<?php
/**
 * Footer Template
 *
 * This template close the container class and add the footer element.
 *
 * @package simplexp
 */
?>
</div>
  <footer class="footer mt-3">
    <div class="row pb-4">
      <div class="col-100">
        <hr>
      </div>
    </div>
    
    <div class="row">
      <div class="col-33">
        <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        ?>
        <?php if(has_custom_logo()): ?>
          <a class="logo" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url( $logo[0] ); ?>" alt="<?php echo esc_url( get_bloginfo( 'name' )); ?>"></a>
        <?php else: ?>
          <a href="<?php echo esc_url(home_url()); ?>" class="logo">
            <?php bloginfo('title');?>
          </a>
        <?php endif; ?>
        <p class="pt-2"><a href="<?php echo esc_url(get_privacy_policy_url()); ?>">Privacy Policy</a></p>
      </div>

      <?php if(!function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'footer' )): ?>
      <?php endif; ?>

      <div class="col-100 text-center pt-10">
        <p>&copy; Copyright <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
      </div>
      <div class="top">
        <a href="#top" title="<?php  esc_attr__('Go to Top', 'simplexp'); ?>"><span class="icon-chevron-up"></span></a>
      </div>
    </div>
  </footer>


<?php wp_footer(); ?>

</body>
</html>