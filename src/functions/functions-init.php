<?php

/* Support Logo */

function MB_theme_prefix_setup(){

    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support( 'comments' );
    add_theme_support( 'threaded_comments' );

}

add_action('after_setup_theme','MB_theme_prefix_setup');




function my_theme_archive_title( $title ) {

	if ( is_category() ) {

		$title = single_cat_title( '', false );

	} elseif ( is_tag() ) {

		$title = single_tag_title( '', false );

	} elseif ( is_post_type_archive() ) {

		$title = post_type_archive_title( '', false );

	} elseif ( is_tax() ) {

		$title = single_term_title( '', false );

	}
	return $title;
}

add_filter( 'get_the_archive_title', 'my_theme_archive_title');

/* Support Thumbnails */

//add_theme_support('post-thumbnails');


/* NON récupération des IP USER */
function disable_comment_ip_address($comment_author_IP) {
    return '';
}
add_filter('pre_comment_user_ip', 'disable_comment_ip_address');

/* MENU */

register_nav_menus(array('header-top'    => 'Menu Header Top'));

// register_nav_menus(array('footer-middle' => 'Menu Footer Middle' ));

register_nav_menus(array('footer-bottom' => 'Menu Footer Bottom'));

// register_nav_menus(array('footer-right'  => 'Menu Footer Right'  ));

// register_nav_menus(array('footer-top'    => 'Menu Footer Top'    ));



