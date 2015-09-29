<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package firstunderscores
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
<<<<<<< HEAD
            <?php get_sidebar("footer"); ?>
            
=======
            <?php get_sidebar("footer")?>
>>>>>>> develop
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'firstunderscores' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'firstunderscores' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'firstunderscores' ), 'firstunderscores', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
