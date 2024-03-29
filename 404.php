<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Emilie
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'emilie' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Why don&rsquo;t you try search for it:', 'emilie' ); ?></p>

					<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                            <div><label class="screen-reader-text" for="s">Search for:</label>
                            <div class="search">
                                <input type="search" class="search-field" placeholder="Search..." name="s" id="s" />
                                    <!-- <input type="submit" id="searchsubmit" value="Search" /> -->
                                    <button type="submit" class="searchButton" id="searchsubmit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <p><?php esc_html_e( 'If there&rsquo;s nothing there, why don&rsquo;t you try look at some of the categories or posts' , 'emilie' ); ?></p>
					<div class="widget widget_categories">
						<div class="404-projects">
                            <h2 class="widget-title"><?php esc_html_e( 'Projects', 'emilie' ); ?></h2>
                            <?php $loop = new WP_Query( array( 'post_type' => 'portfolio_projects', 'posts_per_page' => 10 ) ); ?>

                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <ul>
                                <?php the_title( '<li class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></li>' ); ?>
                            </ul> 
                            <?php endwhile; ?>
                        </div>
                        <div class="404-categories">
                            <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'emilie' ); ?></h2>
                            <ul>
                                <?php
                                wp_list_categories( array(
                                    'orderby'    => 'count',
                                    'order'      => 'DESC',
                                    'show_count' => 1,
                                    'title_li'   => '',
                                    'number'     => 10,
                                ) );
                                ?>
                            </ul>
                        </div>
                        <hr/>
                        <div class="404-recent">
                            <p>Or you can read one of these instead:</p>
                            <h2 class="widget-title"><?php esc_html_e('Recent Posts', 'emilie'); ?></h2>
                        
                            <ul>
                                <?php get_archives('postbypost', '17', 'custom', '<li>', '</li>'); ?>
                            </ul>
                        </div>
					</div><!-- .widget -->
                <hr/>
                    <p><?php esc_html_e( 'If that still didn&rsquo;t work, contact us and we&rsquo;ll see if we can help! ' , 'emilie' ); ?></p>
                
                </div><!-- .page-content -->
             
			</section><!-- .error-404 -->

        </main><!-- #main -->
       
	</div><!-- #primary -->
    <div id="error-sidebar" class="widget-area">
            <?php
                if(is_active_sidebar('error-sidebar')){
                dynamic_sidebar('error-sidebar');
                }
            ?>
    </div>
<?php
get_footer();
