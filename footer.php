<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package radian
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="bg-dark d-flex justify-content-center pb-5 pt-5 text-white">
		<div class="col-md-8 col-lg-6 p-md-0">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'radian' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'radian' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'radian' ), 'radian', '<a href="http://schoeyfield.com">Michael Schofield</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
