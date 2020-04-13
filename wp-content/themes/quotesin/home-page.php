<?php
/**
 * Template Name: Home Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package QuotesIn
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

	<div class="demo-wrap">
		<div class="wrapper">
			<div class="masonry" id="scroll-wrapper">

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
					get_template_part( 'template-parts/content', 'home' );
					?>
					<?php endwhile; ?>

			</div>
			<div class="pagination">
				<?php
				// use Jetpack infinite scroll, fallback to default navigation
				if ( !class_exists( 'The_Neverending_Home_Page' ) ) {
					quotesin_pagination();
				} else {
					//echo '<div id="infinite-handle" class="visible"><span>' . __( 'Older posts', 'quotesin' ) . '</span></div>';
				}
				?>
			</div>
		</div>
	</div>
<?php else : ?>

	<?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>
<?php get_footer(); ?>