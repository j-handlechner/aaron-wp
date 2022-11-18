<?php

function add_theme_scripts_and_styles() {
	wp_enqueue_style("style", get_stylesheet_uri());
	// wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js');
	// wp_enqueue_script( 'main-nav', get_template_directory_uri() . '/js/main-nav.js');
}

add_action('wp_enqueue_scripts', 'add_theme_scripts_and_styles');