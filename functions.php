<?php
 
wp_register_style('main', get_template_directory_uri() . '/resources/css/main.css');

// add_action('wp_enqueue_scripts', 'AndyDev_resources');

// function AndyDev_resources(){
//   // wp_enqueue_style('style', get_stylesheet_uri());
// 	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css',false,'1.1','all');
// }

wp_enqueue_style( 'main', get_stylesheet_uri() );

// Navigation menus
// register_nav_menus(array(
//   'primary' => __( 'Primary Menu' ),
//   'footer' => __('Footer Menu'),
// ));

// Roles

// $user = wp_get_current_user();
//
// if ( !in_array( 'admin', (array) $user->roles ) ) {
//   add_filter('show_admin_bar', '__return_false');
// }

