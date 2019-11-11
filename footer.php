<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Emilie
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <hr/>
		<div class="container">
            <div id="footer-sidebar" class="secondary row">
                <div id="footer-sidebar1" class="col-sm-4">
                    <?php
                    if(is_active_sidebar('footer-sidebar-1')){
                    dynamic_sidebar('footer-sidebar-1');
                    }
                    ?>
                </div>
                <div id="footer-sidebar2" class="col-sm-4">
                    <?php
                    if(is_active_sidebar('footer-sidebar-2')){
                    dynamic_sidebar('footer-sidebar-2');
                    }
                    ?>
                </div>
                <div id="footer-sidebar3" class="col-sm-4">
                    <?php
                    if(is_active_sidebar('footer-sidebar-3')){
                    dynamic_sidebar('footer-sidebar-3');
                    }
                    ?>
                </div>
            </div>
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'emilie' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'emilie' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s', 'emilie' ), 'emilie', '<a href="https://sabinevidal.com">Sabine Vidal</a>' );
					?>
			</div><!-- .site-info -->
		</div><!--.container-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
