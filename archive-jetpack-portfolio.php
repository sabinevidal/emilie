<?php
/**
 * The template for displaying the Portfolio archive page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package Emilie
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
			if ( have_posts() ) {
				get_template_part( 'content', 'portfolio-archive' );
			} else {
				get_template_part( 'content', 'none' );
			}
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>