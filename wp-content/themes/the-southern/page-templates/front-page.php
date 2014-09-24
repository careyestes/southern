<?php
/**
 * Template Name: Front Page Template
 *
 * Description: Super awesome front page template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<section class="homepage-slider">
				<?php echo do_shortcode( '[nivoslider slug="homepage-slideshow"]' ) ?>
			</section>

			<?php while ( have_posts() ) : the_post(); ?>
				<hr class="dottedDivider">
				<section class="entry-title-container">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</section>
				<section class="entry-content">
					<?php the_content(); ?>
				</section><!-- .entry-content -->
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>