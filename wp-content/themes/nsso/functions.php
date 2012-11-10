<?php

add_action( 'init', 'register_nsso_menus' );

function register_nsso_menus()
{
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'nsso' ),
        'footer_left' => __( 'Quick Links Left', 'nsso' ),
        'footer_right' => __( 'Quick Links Right', 'nsso' ),
	) );
}

function is_subpage() {
	global $post;
    if ( $post->post_parent ) {      
       $parentID = $post->post_parent;
       return $parentID;
    } else {                                      
       return false;
    };
};
