<?php 

/* Bellow function leads JavaScript and CSS */
add_action('wp_enqueue_scripts', 'amazing_college_files');
function amazing_college_files() {
	wp_enqueue_script('main-amazingcollege-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true); 
	wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i'); 
	wp_enqueue_style('font-awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
									//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
									//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
	wp_enqueue_style('college_main_styles', get_stylesheet_uri(), NULL, microtime());
	/* microtime() disable the cach of CSS/JS on the browser while developing. But on live use the verison instead. like: 2.0 */
} 

/* Below functino loads theme featuers */
add_action('after_setup_theme', 'college_features'); 
function college_features() {
	register_nav_menu('headerMenuLocation', 'Header Menu Location'); //register the menu in appearance->menu 
	register_nav_menu('footerLocation1', 'Fotoer Location 1'); /* Register menu 1 in footer area */
	register_nav_menu('footerLocation2', 'Fotoer Location 2'); /* Register menu 2 in footer area */
	add_theme_support('title-tag'); 
} 

/** event */
function univeristy_adjust_query($query) {
	// $query->set('posts_per_page', '1'); //to univerisal, afect all pags. 
	/**
	 * $query->is_main_query() : check if its the url query not custom query
	 * is_post_type_archive('event') : only for event type of posts.
	 * !is_admin() : if it is not admin side. 
	 */
	if(!is_admin() && is_post_type_archive('event') && $query->is_main_query()){
		$today=date('Ymd'); 
		$query->set('meta_key', 'event_date');
		$query->set('orderby', 'meta_value_num'); 
		$query->set('order', 'ASC');
		$query->set('meta_query', array( 
			array(
			  'key'=>'event_date',  // event_date field 
			  'compare'=>'>=', //if date is >=
			  'value'=> $today,  // then today 
			  'type'=>'numeric' //change the date to numebr that can be compared. 
			)
		)); 
	}
}
add_action('pre_get_posts', 'univeristy_adjust_query');