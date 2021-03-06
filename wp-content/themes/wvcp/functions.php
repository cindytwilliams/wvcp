<?php

// styles and scripts
require_once( __DIR__ . '/inc/scripts.php');

// fonts
require_once( __DIR__ . '/inc/fonts.php');

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


// enable navigation menu
if( function_exists('register_nav_menus')) {
	register_nav_menus( array('main_nav' => 'Main Navigation Menu' ) );
}

// add thumbnail support
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 100, 100, true ); // normal post thumbnails
add_image_size( 'single-post-thumbnail', 170, 170, TRUE );
add_image_size( 'portfolio-item-small', 300, 250, TRUE );


// add menus to sidebar and footer
if (function_exists('register_sidebar')) {
	register_sidebar(
        array (
            'name'          => 'Sidebar Links',
            'id'            => 'sidebar-1',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title' => '<h2>',
            'after_title'  => '</h2>'
        )
	);
    register_nav_menus(
        array(
            'footer-menu' => __( 'Footer Links' )
        )
    );
}
