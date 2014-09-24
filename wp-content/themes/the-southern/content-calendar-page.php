<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<div class="entry-content">
			<section class="calendarLegend">
				<div class="legendItem">
					<div class="available"></div><div class="legendLabel">Available</div>
				</div>
				<div class="legendItem">
					<div class="booked"></div><div class="legendLabel">Booked</div>
				</div>
			</section>
			<?php the_content(); ?>
			<footer class="entry-meta">
				<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-meta -->
		</div><!-- .entry-content -->
	</article><!-- #post -->