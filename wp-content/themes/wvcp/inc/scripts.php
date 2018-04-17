<?php

// Add scripts and stylesheets

// Superfish dropdown menu
function superfish_libs()
{
    // Register each script, setting appropriate dependencies
    wp_register_script('hoverintent', get_template_directory_uri() . '/js/hoverIntent.js');
    wp_register_script('bgiframe',    get_template_directory_uri() . '/js/jquery.bgiframe.min.js');
    wp_register_script('superfish',   get_template_directory_uri() . '/js/superfish.js', array( 'jquery', 'hoverintent', 'bgiframe' ));
    wp_register_script('supersubs',   get_template_directory_uri() . '/js/supersubs.js', array( 'superfish' ));
 
    // Enqueue supersubs, we don't need to enqueue any others in this case, as the dependencies take care of it for us
    wp_enqueue_script('supersubs');
 
    // Register each style, setting appropriate dependencies
    wp_register_style('superfishbase',   get_template_directory_uri() . '/css/superfish.css');
    wp_register_style('superfishvert',   get_template_directory_uri() . '/css/superfish-vertical.css', array( 'superfishbase' ));
    wp_register_style('superfishnavbar', get_template_directory_uri() . '/css/superfish-navbar.css', array( 'superfishvert' ));
 
    // Enqueue superfishnavbar, we don't need to enqueue any others in this case either, as the dependencies take care of it
    wp_enqueue_style('superfishnavbar');
}

add_action( 'wp_enqueue_scripts', 'superfish_libs' );


// Bootstrap 4 and custom styles
function wvcp_scripts() {

	// css
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '' );
	wp_enqueue_style( 'wvcp', get_template_directory_uri() . '/css/wvcp.css' );
	
	// js
	wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array( 'jquery' ), '3.3.1', true );
}

add_action( 'wp_enqueue_scripts', 'wvcp_scripts' );