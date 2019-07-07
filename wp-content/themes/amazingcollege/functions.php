<?php 

/* Bellow function leads JavaScript and CSS */
add_action('wp_enqueue_scripts', 'amazing_college_files');

/* Below functino loads theme featuers */
add_action('after_setup_theme', 'college_features'); 

function amazing_college_files() {
	wp_enqueue_script('main-amazingcollege-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true); 
	wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i'); 
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
	wp_enqueue_style('college_main_styles', get_stylesheet_uri(), NULL, microtime());
	/* microtime() disable the cach of CSS/JS on the browser while developing. But on live use the verison instead. like: 2.0 */
} 

function college_features() {
	register_nav_menu('headerMenuLocation', 'Header Menu Location'); //register the menu in appearance->menu 
	register_nav_menu('footerLocation1', 'Fotoer Location 1'); /* Register menu 1 in footer area */
	register_nav_menu('footerLocation2', 'Fotoer Location 2'); /* Register menu 2 in footer area */
	add_theme_support('title-tag'); 
} 

