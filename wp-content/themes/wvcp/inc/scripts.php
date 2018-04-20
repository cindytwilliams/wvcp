<?php

// Add scripts and stylesheets

function wvcp_scripts() {

	// css
	wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
	wp_enqueue_style( 'wvcp', get_template_directory_uri() . '/css/wvcp.min.css' );
	
	// js
  wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), true);
}

add_action( 'wp_enqueue_scripts', 'wvcp_scripts' );