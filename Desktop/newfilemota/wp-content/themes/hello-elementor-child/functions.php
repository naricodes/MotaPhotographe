<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

 add_action( 'wp_enqueue_scripts', 'hello_elementor_child_style' , 'child_theme_scripts',);
  function hello_elementor_child_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',array('parent-style'));
	wp_enqueue_script('script', get_stylesheet_directory_uri()  . '/script.js');
	function my_plugin_scripts() {
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), null, true);
	}
	add_action('wp_enqueue_scripts', 'my_plugin_scripts');
	
}

/**
 * Your code goes below.
 */

