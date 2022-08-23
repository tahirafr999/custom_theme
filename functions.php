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
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/assets/src/library/js/bootstrap.min.js',array('jquery'));

	wp_enqueue_style('style-css');
	wp_enqueue_style('bootstrap-style-css');
	// // wp_enqueue_script('bootstrap-js');
	// wp_enqueue_script('bootstrap-script-js');
}
add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');


function theme_setup(){
	add_theme_support( 'title-tag' );

	add_theme_support('custom-logo',[
		'header-text'=>['array-title','site-description'],
		'height' => 100,
		'width'	 => 400,
		'flex-height' =>true,
		'flex-width' =>true,
	]);

	add_theme_support('custom-background',[
		'default-color' => '#fff',
		'default-image' =>  '',
		'default-repeat' => 'no-repeat'
	]);

	add_theme_support('post-thumbnails');

	add_theme_support( 'align-wide' );

	add_theme_support('customize-selective-refresh-widgets');

	add_theme_support('automatic-feed-links');

	add_theme_support('html5',
		[
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',

		]
	);

	add_editor_style();

	add_theme_support('wp-block-styles');

	// add_theme_support('align-wide');
}

add_action('after_setup_theme','theme_setup');




?>