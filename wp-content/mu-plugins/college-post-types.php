<?php

/** post types */
add_action('init', 'college_post_types'); 
function college_post_types(){
	register_post_type('event', array(
		'supports'=>array('title', 'editor', 'excerpt'),
		'rewrite'=>array(
			'slug'=>'events' /** print in events */
		),
		'has_archive'=>true,
		'public'=> true, 
		'menu_icon'=>'dashicons-calendar', /** search for "wordpress dashicons" */
		'labels'=>array(
			'name'=>'Events', 
			'add_new_item'=>'Add New Events', 
			'edit_item'=>'Edit Event', 
			'all_items'=>'All Events', 
			'singular_name'=>'Event'
		)
	)); 
}
