<?php 
/**
 * Header template.
 * 
 * @package Aquila

 */

// echo "<pre>";
// print_r(filemtime(get_template_directory() .'/custom-style.css'));
// wp_die();
 
function aquila_enqueue_scripts(){
	// custom style
	wp_register_style( 'style-css', get_template_directory_uri().'/assets/src/library/css/custom-style.css', array() , filemtime(get_template_directory() .'/assets/src/library/css/custom-style.css'),'all');

	// Bootstrap
	wp_register_style( 'bootstrap-style-css', get_template_directory_uri().'/assets/src/library/css/bootstrap.min.css');


	// custom js
	wp_enqueue_script( 'custom-js', get_template_directory_uri().'/assets/custom-js.js', [] , filemtime(get_template_directory() .'/assets/custom-js.js'));
	wp_register_script( 'bootstrap-js', get_template_directory_uri().'/assets/src/library/js/bootstrap.min.js',array('jquery'),Null,true);

	wp_enqueue_style('style-css');
	wp_enqueue_style('bootstrap-style-css');
	wp_enqueue_script('bootstrap-js');

}
add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');


?>