<?php

/**
 * Main template file.
 * 
 * @package Aquila 
 */

get_header();
?>

<?php 
if(function_exists('wp_body_open')){
    wp_body_open();
}
?>


<h1>hello</h1>

<?php get_footer(); ?>