<?php
/**
 * Template Name: Calendar Template
 *
 * Description: Specifically for the Availability Calendar page.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>
	<section class="featuredImage">
		<?php echo do_shortcode( '[nivoslider slug="calendar-slides"]' ) ?>
	</section>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'calendar-page' ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>