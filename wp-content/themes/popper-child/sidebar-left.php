<?php
/**
 * The sidebar for a left side widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package popper
 */

if ( ! is_active_sidebar( 'sidebar-left' ) ) {
	return;
}
?>

<div class="left-sidebar">
    <?php dynamic_sidebar( 'sidebar-left' ); ?>
</div>
