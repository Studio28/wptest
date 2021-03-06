<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package popper
 */

?>

	</div><!-- #content -->



	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
				<p>We offer assistance to all persons regardless of the nature of their disability,
				</br> age, race, national origin, religion or sexual orientation.
Read the Consumer Rights & Responsibilities and Grievance Procedure.
				</br>
				27 Smith Street, Suite 200, Brooklyn, NY 11201 //  Phone: 718-998-3000  //  info@bcid.org</p>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'popper' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'popper' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'popper' ), 'popper', '<a href="http://mor10.com" rel="designer nofollow">Morten Rand-Hendriksen</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
