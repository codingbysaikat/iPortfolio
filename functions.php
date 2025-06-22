<?php
define("VERSION", time());
// Theme Basices Bootstriping
function port_theme_doc(){
	load_theme_textdomain('port');
	add_theme_support('title_tag');
	add_theme_support('html5', array('search-form','comment-list'));
	add_theme_support('post-formats',array('image','video'));
	add_theme_support('custom-logo');
	add_theme_support( 'menus' );
	add_theme_support('post-thumbnails'); 
}
add_action('after_setup_theme','port_theme_doc');
function port_scripts(){
    // Enqueue the Main CSS File
	wp_enqueue_style("main-css",get_theme_file_uri("assets/css/main.css"), null,VERSION);
}
add_action('wp_enqueue_scripts','port_scripts');