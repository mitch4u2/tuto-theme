<?php

function tuto_script_enqueue() {
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/tuto.css', array(), '1.0.0', 'all' );
	wp_enqueue_script('customsjs', get_template_directory_uri() . '/jss/tuto.js', array(), '1.0.0', true );

}

add_action('wp_enqueue_scripts', 'tuto_script_enqueue');

function tuto_theme_setup(){
add_theme_support('menus');
register_nav_menu('primary','Primary header navigation');
register_nav_menu('secondary','Primary footer navigation');

}

add_action('init', 'tuto_theme_setup');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside','image','video'));
