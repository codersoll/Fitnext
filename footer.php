<?php
/**
 * The template for displaying the footer.
 * @package The WP Fitness
 */
?>
<?php if( get_theme_mod( 'the_wp_fitness_hide_scroll',true) != '' || get_theme_mod( 'the_wp_fitness_backtotop_responsive',true) != '') { ?>
  <?php $the_wp_fitness_scroll_align = get_theme_mod( 'the_wp_fitness_back_to_top','Right');
  if($the_wp_fitness_scroll_align == 'Left'){ ?>
    <a href="#content" class="back-to-top scroll-left text-center"><?php esc_html_e('Top', 'the-wp-fitness'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'the-wp-fitness'); ?></span></a>
  <?php }else if($the_wp_fitness_scroll_align == 'Center'){ ?>
    <a href="#content" class="back-to-top scroll-center text-center"><?php esc_html_e('Top', 'the-wp-fitness'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'the-wp-fitness'); ?></span></a>
  <?php }else{ ?>
    <a href="#content" class="back-to-top scroll-right text-center"><?php esc_html_e('Top', 'the-wp-fitness'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'the-wp-fitness'); ?></span></a>
  <?php }?>
<?php }?>
<footer role="contentinfo" id="footer" class="copyright-wrapper">
  <?php //Set widget areas classes based on user choice
    $the_wp_fitness_footer_columns = get_theme_mod('the_wp_fitness_footer_widget', '4');
    if ($the_wp_fitness_footer_columns == '3') {
      $cols = 'col-lg-4 col-md-4';
    } elseif ($the_wp_fitness_footer_columns == '4') {
      $cols = 'col-lg-3 col-md-3';
    } elseif ($the_wp_fitness_footer_columns == '2') {
      $cols = 'col-lg-6 col-md-6';
    } else {
      $cols = 'col-lg-12 col-md-12';
    }
  ?>
  <?php if (get_theme_mod('the_wp_fitness_footer_hide_show', true)){ ?>
    <div class="container">
      <div class="footerinner row">
        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
          <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-1'); ?>
          </div>
        <?php endif; ?> 
        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
          <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-2'); ?>
          </div>
        <?php endif; ?> 
        <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
          <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-3'); ?>
          </div>
        <?php endif; ?> 
        <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
          <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-4'); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  <?php } ?>  
  <?php if (get_theme_mod('the_wp_fitness_copyright_hide_show', true)) {?>
    <div class="inner">
      <div class="container">
        <p><?php the_wp_fitness_credit(); ?> <?php echo esc_html(get_theme_mod('the_wp_fitness_footer_text',__('By Themesglance','the-wp-fitness'))); ?></p>
        <div class="clearfix"></div>
      </div>
    </div>
  <?php }?>   
</footer>

<?php wp_footer(); ?>
</body>
</html>