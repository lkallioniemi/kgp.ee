<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

</div><!-- #page -->
<!-- <footer id="colophon" role="contentinfo">
		<?php
			/* A sidebar in the footer? Yep. You can can customize
			 * your footer with three columns of widgets.
			 */
			if ( ! is_404() )
				get_sidebar( 'footer' );
		?>
		<div id="site-generator">
			<?php do_action( 'twentyeleven_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>
		</div>
</footer><!-- #colophon -->
<footer id="footer" role="navigation" >
	<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
</footer>
<?php // wp_footer(); ?>

</body>
</html>