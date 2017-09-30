<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'fxp-style', get_stylesheet_directory_uri() . '/assets/css/fxp-style.css', array(), strtotime(date("Y-m-d h:i:s")), "all" );
    wp_enqueue_style( 'fxp-style-mobile-768', get_stylesheet_directory_uri() . '/assets/css/fxp-style-mobile.css', array(), strtotime(date("Y-m-d h:i:s")), "all" );
    //wp_enqueue_script( 'fxp-appjs', get_stylesheet_directory_uri() . '/app.js', array('jquery'), '1.0.52', true );
    
}

add_filter( 'script_loader_src', '_remove_script_version', 15, 1 ); 
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );
function _remove_script_version( $src ){ 
	$parts = explode( '?', $src ); 
	return $parts[0]; 
} 

