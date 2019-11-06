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

	<div id="primary" class="content-area">
	    <main id="main" class="site-main">

                <?php
                while ( have_posts() ) :
                        the_post();
                
                $materials = get_field('materials');
                $image_1 = get_field('image_1');
                $info_1 = get_field('info_1');
                $image_2 = get_field('image_2');
                $info_2 = get_field('info_2');
                $image_3 = get_field('image_3');
                $info_3 = get_field('info_3');
                $image_4 = get_field('image_4');
                $info_4 = get_field('info_4');
                $image_5 = get_field('image_5');
                $info_5 = get_field('info_5');
                $image_6 = get_field('image_6');
                $info_6 = get_field('info_6');
                $image_7 = get_field('image_7');
                $info_7 = get_field('info_7');
                $link = get_field('link');
                $size = "full";
                ?>
                
                <article class="project">
                                <h2><?php the_title(); ?></h2>
                    <div class="project-images">
                        <div class="container">
                            <div class="card-columns">
                                <div class="card project-info">
                                    <p>Materials: <?php echo $materials; ?></p>
                                    <?php the_content(); ?>
                                </div>
                                <?php if ($image_1 = get_field('image_1')) { ?>
                                    <div class="card">
                                        <?php if($image_1) {
                                                echo wp_get_attachment_image( $image_1, $size );
                                        } ?> 
                                        <div class="card-body">
                                            <p class="card-text"><?php if($info_1) { echo $info_1; } ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if ($image_2 = get_field('image_2')) { ?>
                                    <div class="card">
                                        <?php if($image_2) {
                                                echo wp_get_attachment_image( $image_2, $size);
                                        } ?> 
                                        <div class="card-body">
                                            <p class="card-text"><?php if($info_2) { echo $info_2; } ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if ($image_3 = get_field('image_3')) { ?>
                                    <div class="card">
                                        <?php if($image_3) {
                                                echo wp_get_attachment_image( $image_3, $size );
                                        } ?> 
                                        <div class="card-body">
                                            <p class="card-text"><?php if($info_3) { echo $info_3; } ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if ($image_4 = get_field('image_4')) { ?>
                                    <div class="card">
                                        <?php if($image_4) {
                                                echo wp_get_attachment_image( $image_4, $size );
                                        } ?> 
                                        <div class="card-body">
                                            <p class="card-text"><?php if($info_4) { echo $info_4; } ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if ($image_5 = get_field('image_5')) { ?>
                                    <div class="card">
                                        <?php if($image_5) {
                                                echo wp_get_attachment_image( $image_5, $size );
                                        } ?> 
                                        <div class="card-body">
                                            <p class="card-text"><?php if($info_5) { echo $info_5; } ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if ($image_6 = get_field('image_6')) { ?>
                                    <div class="card">
                                        <?php if($image_6) {
                                                echo wp_get_attachment_image( $image_6, $size );
                                        } ?> 
                                        <div class="card-body">
                                            <p class="card-text"><?php if($info_6) { echo $info_6; } ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if ($image_7 = get_field('image_7')) { ?>
                                    <div class="card">
                                        <?php if($image_7) {
                                                echo wp_get_attachment_image( $image_7, $size );
                                        } ?> 
                                        <div class="card-body">
                                            <p class="card-text"><?php if($info_7) { echo $info_7; } ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if ($image_8 = get_field('image_8')) { ?>
                                    <div class="card">
                                        <?php if($image_8) {
                                                echo wp_get_attachment_image( $image_8, $size );
                                        } ?> 
                                        <div class="card-body">
                                            <p class="card-text"><?php if($info_8) { echo $info_8; } ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if ($image_9 = get_field('image_9')) { ?>
                                    <div class="card">
                                        <?php if($image_9) { 
                                                echo wp_get_attachment_image( $image_9, $size );
                                        } ?>
                                        <div class="card-body">
                                            <p class="card-text"><?php if($info_9) { echo $info_9; } ?></p>
                                        </div> 
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                </article> <!--project-->

                <?php endwhile; // End of the loop. ?> 

            </main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?> 
