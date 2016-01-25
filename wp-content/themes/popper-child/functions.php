<?php
function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the sidebar. */
    register_sidebar(
        array(
			'id'            => 'sidebar-left',
			'name'          => __( 'Left', 'text_domain' ),
			'description'   => __( '', 'text_domain' ),
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
        ));
}