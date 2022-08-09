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
	// wp_enqueue_style('stylesheet',get_template_directory_uri().'/style.css');
	wp_enqueue_style( 'custom-style-css', get_stylesheet_directory_uri().'/custom-style.css', array() , filemtime(get_template_directory() .'/custom-style.css'),'all');
	wp_enqueue_script( 'custom-js', get_template_directory_uri().'/assets/custom-js.js', [] , filemtime(get_template_directory() .'/assets/custom-js.js'));

}
add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');


?>