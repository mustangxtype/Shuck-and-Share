<?php

function home_queue(){
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/home.css', array());
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/scripts.js', array());
}
add_action('wp_enqueue_scripts', 'home_queue');

function register_my_menu() {
  register_nav_menu('new-menu',__( 'Custom Menu'));
  register_nav_menu('footer-menu',__( 'footer Menu'));
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

function widget_setup(){
  register_sidebar(
  array(
      'name' =>'sidebar',
      'id' => 'sidebar-1',
      'class' => 'custom',
      'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside><br><br>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
    )
    );
}
add_action('widgets_init','widget_setup');

 ?>
