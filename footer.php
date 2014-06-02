<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package CreateDenton
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://vill.ag', 'createdenton' ) ); ?>"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/villag.png" alt="Villag logo"> <?php _e( 'A Villag Project', 'createdenton' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
