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
				<?php query_posts('posts_per_page=3&post_type=portfolio_projects'); ?>
				<?php while ( have_posts() ) : the_post(); 
                    $image_1 = get_field("image_1");
                    $image_1 = get_field("image_2");
                    $image_1 = get_field("image_3");
                    $image_1 = get_field("image_4");
                    $image_1 = get_field("image_5");
                    $image_1 = get_field("image_6");
                    $image_1 = get_field("image_7");
                    $image_1 = get_field("image_8");
                    $image_1 = get_field("image_9");
                    $link = get_field('link');
                    $size = "full";
                    
				?>
				<div class="project-images">
                        <div class="container">
                            <div class="card-columns">
                                <?php if ($image_1 = get_field('image_1')) { ?>
                                    <div class="card project-info">
                                    <a href="<?php get_field('link') ?>" target="_blank"><?php if($image_1) {
                                                echo wp_get_attachment_image( $image_1, $size );
                                        } ?> 
                                    </a>
                                    </div>
                                <?php } ?>
                                <?php if ($image_2 = get_field('image_2')) { ?>
                                    <div class="card">
                                        <?php if($image_2) {
                                                echo wp_get_attachment_image( $image_2, $size );
                                        } ?> 
                                    </div>
                                <?php } ?>
                                <?php if ($image_3 = get_field('image_3')) { ?>
                                    <div class="card">
                                        <?php if($image_3) {
                                                echo wp_get_attachment_image( $image_3, $size );
                                        } ?> 
                                    </div>
                                <?php } ?>
                                <?php if ($image_4 = get_field('image_4')) { ?>
                                    <div class="card">
                                        <?php if($image_4) {
                                                echo wp_get_attachment_image( $image_4, $size );
                                        } ?> 
                                    </div>
                                <?php } ?>
                                <?php if ($image_5 = get_field('image_5')) { ?>
                                    <div class="card">
                                        <?php if($image_5) {
                                                echo wp_get_attachment_image( $image_5, $size );
                                        } ?> 
                                    </div>
                                <?php } ?>
                                <?php if ($image_6 = get_field('image_6')) { ?>
                                    <div class="card">
                                        <?php if($image_6) {
                                                echo wp_get_attachment_image( $image_6, $size );
                                        } ?> 
                                    </div>
                                <?php } ?>
                                <?php if ($image_7 = get_field('image_7')) { ?>
                                    <div class="card">
                                        <?php if($image_7) {
                                                echo wp_get_attachment_image( $image_7, $size );
                                        } ?> 
                                    </div>
                                <?php } ?>
                                <?php if ($image_8 = get_field('image_8')) { ?>
                                    <div class="card">
                                        <?php if($image_8) {
                                                echo wp_get_attachment_image( $image_8, $size );
                                        } ?> 
                                    </div>
                                <?php } ?>
                                <?php if ($image_9 = get_field('image_9')) { ?>
                                    <div class="card">
                                        <?php if($image_9) { 
                                                echo wp_get_attachment_image( $image_9, $size );
                                        } ?>
                                    </div>
                                <?php } ?>
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
