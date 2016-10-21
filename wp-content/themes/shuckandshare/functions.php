<?php

function home_queue(){
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/home.css', array());
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/scripts.js', array());
}
add_action('wp_enqueue_scripts', 'home_queue');

function register_my_menu() {
  register_nav_menu('new-menu',__( 'Custom Menu'));
}
add_action( 'init', 'register_my_menu' );


function theme_prefix_setup() {

	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );
}
add_filter( 'get_custom_logo', 'change_logo_class' );


function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'img-responsive', $html );
    $html = str_replace( 'custom-logo-link', 'your-custom-class', $html );

    return $html;
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

 ?>
