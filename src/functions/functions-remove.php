<?php

remove_action('wp_head','print_emoji_detection_script',7);
remove_action('admin_print_scripts','print_emoji_detection_script');
remove_action('wp_print_styles','print_emoji_styles');
remove_action('admin_print_styles','print_emoji_styles');

/* Enlever xmlrpc */
function remove_xmlrpc_pingback_ping($methods){
	unset($methods['pingback.ping']);
	return $methods;
} ;
function remove_x_pingback($headers){
	unset($headers['X-Pingback']);
	return $headers;
}
add_filter('xmlrpc_methods','remove_xmlrpc_pingback_ping');
add_filter('wp_headers','remove_x_pingback');
add_filter('xmlrpc_enabled','__return_false');

remove_action('wp_head','rsd_link');				//	removes EditURI/RSD (Really Simple Discovery) link.
remove_action('wp_head','wlwmanifest_link');		//	removes wlwmanifest (Windows Live Writer) link.
remove_action('wp_head','wp_generator');			//	removes meta name generator.
remove_action('wp_head','wp_shortlink_wp_head');	//	removes shortlink.
remove_action('wp_head','feed_links',2);			//	removes feed links.
remove_action('wp_head','feed_links_extra',3);		//	removes comments feed.