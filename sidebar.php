<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Emilie
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
            <div><label class="screen-reader-text" for="s">Search for:</label>
            <div class="search">
                <input type="search" class="search-field" placeholder="Search" name="s" id="s" />
                    <!-- <input type="submit" id="searchsubmit" value="Search" /> -->
                    <button type="submit" class="searchButton" id="searchsubmit"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
