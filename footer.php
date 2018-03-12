<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fit_Teme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	<nav id="site-navigation" class="footer-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'secondary',
				'menu_id'        => 'footer-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'fittheme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'fittheme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'fittheme' ), 'fittheme', '<a href="https://github.com/kuraibu">Clive Tshuma</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
