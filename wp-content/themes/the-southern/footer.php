<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer class="site-footer" role="contentinfo">
		<section class="site-address">
			<?php echo get_option( 'ut-site-info-address'); ?>
		</section><!-- .site-info -->
		<section class="colophon">
			&copy; <?php echo date('Y'); ?> Designed + Developed: Carey Estes
		</section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>