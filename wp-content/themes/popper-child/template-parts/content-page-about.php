<?php
/**
 * Template part for displaying page content on the about page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package popper
 */

?>
<div id="about-content">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php 
		if ( has_post_thumbnail() ) { ?>
			<figure class="featured-image">
				<?php the_post_thumbnail('popper-featured-image'); ?>
			</figure>
		<?php }
		?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

				<?php the_content(); ?>
				<?php get_sidebar('left'); ?>
				
								<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'popper' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'popper' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
</div>

