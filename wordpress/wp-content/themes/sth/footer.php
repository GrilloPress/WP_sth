<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sth
 */

?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
      <div class="site-info container">
        <div class="row">
          <div class="col-md-12">
            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sth' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'sth' ), 'WordPress' ); ?></a>
            <span class="sep"> | </span>
            <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'sth' ), 'sth', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
          </div>
        </div>
      </div><!-- .site-info -->
    </footer><!-- #colophon -->
  </div><!-- #page -->

  <?php wp_footer(); ?>

  </body>
</html>