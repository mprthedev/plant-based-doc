<?php

add_action( 'wp_enqueue_scripts', 'earth_theme_styles' );

function earth_theme_styles() {
	wp_enqueue_style( 
		'earth_theme_styles', 
		get_stylesheet_uri()
	);
}