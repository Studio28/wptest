<?php

/*
 * Template Name: Left Sidebar
 * Description: Page template to include a left sidebar
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package popper
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php get_sidebar('left'); ?>
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
