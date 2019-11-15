<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Emilie
 */

get_header();
?>

<div id="primary" class="content-area no-sidebar">
	<main id="main" class="site-main">

        <div class="bio">
			<?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>
        </div>
    
        <section class="portfolio-work">
			<div class="homepage-portfolio-work">
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="project-images">
                        <div class="container">
                            <div class="card-columns">
                                    <div class="card project-info">
                                     <?php echo do_shortcode('[gallery option1="value1"]'); ?>   
                                    </div>
                            </div>
                        </div>
                </div>

				<?php endwhile; ?>
					<?php wp_reset_query(); ?>  
			</ul>
		</div>
	</section>
		<?php
		while ( have_posts() ) :
			the_post();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	

	</main><!-- #main -->
</div><!-- #primary -->
	

<?php
get_footer(); ?>
