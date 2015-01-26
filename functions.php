<?php
 if ( function_exists('register_sidebar') )
   register_sidebar();
   
function my_init_method() {
    wp_enqueue_script( 'jquery' );
	
	wp_enqueue_style('thickbox');
	wp_enqueue_script( 'thickbox' );
	
/*	
	wp_register_script('cycle', get_bloginfo('template_directory') . '/scripts/jquery.cycle.min.js', array('jquery'));
	wp_enqueue_script('cycle');

	wp_register_script('cufon', get_bloginfo('template_directory') . '/scripts/cufon-yui.js', array('jquery'));
	wp_enqueue_script('cufon');
	
	*/
	
	wp_register_script('misc', get_bloginfo('template_directory') . '/scripts/misc.js', array('jquery'));
	wp_enqueue_script('misc');
}    
 
add_action('init', 'my_init_method');   
?>