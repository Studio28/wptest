<?php
/**
 * Sidebar Template
 *
 * If a `primary` widget area is active and has widgets, display the sidebar.
 *
 * @package WooFramework
 * @subpackage Template
 */
$extra = '';
if (is_singular('page')) $extra = '<h2 class="print-only">'.__(get_the_title()).'</h2>';
else if (is_singular('dls-person')) $extra = '<h2 class="print-only">Attorneys</h2>';
else if (is_singular('dls-practice')) $extra = '<h2 class="print-only">Practice Areas</h2>';
else if (is_singular('post')) $extra = '<h2 class="print-only">News</h2>';

$settings = array(
				'layout' => 'two-col-left',
				'portfolio_layout' => 'one-col'
				);
$DLS_IMPORTANT = array(
	'q' => clone $GLOBALS['wp_query'],
	'p' => is_object($GLOBALS['post']) ? clone $GLOBALS['post'] : $GLOBALS['post'],
);
wp_reset_query();
$settings = woo_get_dynamic_values( $settings );

$layout = $settings['layout'];
$sidebar = 'primary';
if (is_singular('dls-person')) $sidebar = 'person-sidebar';
if (is_singular('dls-practice')) $sidebar = 'practice-sidebar';
if ((is_page_template('template-blog.php') || is_archive()) && woo_active_sidebar('news-widgets-left')) $sidebar = 'news-widgets-left';
if ((is_page_template('template-practice-list.php') || is_archive()) && woo_active_sidebar('practice-areas-widgets-left')) $sidebar = 'practice-areas-widgets-left';


// Cater for custom portfolio gallery layout option.
if ( is_tax( 'portfolio-gallery' ) || is_post_type_archive( 'portfolio' ) ) {
	if ( '' != $settings['portfolio_layout'] ) { $layout = $settings['portfolio_layout']; }
}
	if ( woo_active_sidebar( $sidebar ) ) {
		woo_sidebar_before();
?>
<?php echo $extra ?>
<aside id="sidebar" class="<?php echo esc_attr($sidebar.' '.$sidebar) ?>-sidebar <?php echo $sidebar == 'person-sidebar' ? 'not-mobile' : '' ?>"><div class="inner">
<?php
	woo_sidebar_inside_before();
	woo_sidebar( $sidebar );
	woo_sidebar_inside_after();
?>
</div></aside><!-- /#sidebar -->
<?php
		woo_sidebar_after();
	}

// cant believe i still have to do this
$GLOBALS['wp_query'] = $DLS_IMPORTANT['q'];
$GLOBALS['post'] = $DLS_IMPORTANT['p'];
setup_postdata($GLOBALS['post']);
