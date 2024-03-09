<?php

function MB_css_js_import(){

	wp_enqueue_script('jquery');
	wp_enqueue_script('MB-js',get_template_directory_uri().'/assets/js/script.js', array(), '1.0', true);
	wp_enqueue_style('MB-init',get_template_directory_uri().'/assets/css/style.css');
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css' );
}
add_action('wp_enqueue_scripts','MB_css_js_import');


function MB_admin_css_js_import(){

	wp_enqueue_script('jquery');
	wp_enqueue_script('wp-color-picker');
	wp_enqueue_script('MB-js',get_template_directory_uri().'/assets/js/script-fz6fz52z.js');
	wp_enqueue_style('MB-init',get_template_directory_uri().'/assets/css/admin-style.css');
	wp_enqueue_style('wp-color-picker');

}
add_action('admin_print_styles','MB_admin_css_js_import');


