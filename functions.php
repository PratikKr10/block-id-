<?php
function wpb_adding_styles() {
wp_register_style('style', get_template_directory_uri().'/styles.css');
wp_enqueue_style('style');

wp_register_style('bootstrap.min', get_template_directory_uri().'/css/bootstrap.min.css');
wp_enqueue_style('bootstrap.min');

wp_register_style('owl.carousel.min', get_template_directory_uri().'/css/owl.carousel.min.css');
wp_enqueue_style('owl.carousel.min');

wp_register_style('responsive', get_template_directory_uri().'/css/responsive.css');
wp_enqueue_style('responsive');
}
add_action( 'wp_enqueue_scripts', 'wpb_adding_styles' );


function wpb_adding_scripts() {
 
wp_register_script('bootstrap.min', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'),'1.1', false);
wp_enqueue_script('bootstrap.min');
 
wp_register_script('html5', get_template_directory_uri().'/js/html5.js', array('jquery'),'1.1', false);
wp_enqueue_script('html5');

wp_register_script('jquery.min', get_template_directory_uri().'/js/jquery.min.js', array('jquery'),'1.1', false);
wp_enqueue_script('jquery.min');

wp_register_script('owl.carousel.min', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'),'1.1', false);
wp_enqueue_script('owl.carousel.min');

wp_register_script('respond', get_template_directory_uri().'/js/respond.js', array('jquery'),'1.1', false);
wp_enqueue_script('respond');
}
  
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );



?>