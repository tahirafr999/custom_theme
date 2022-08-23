<?php

/**
 * Header template
 * 
 * @package Aquila 
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('helo-class');?> >
<?php 
if(function_exists('wp_body_open')){
    wp_body_open();
}
?>

<div id="page" class="site">
   <header id="masthead" class="site-header" role="banner">
    <?php get_template_part('template-parts/nav'); ?>
   </header>
   <div id="content" class="site-content">


