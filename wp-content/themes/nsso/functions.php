<?php

add_action( 'init', 'register_nsso_menus' );

function register_nsso_menus()
{
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'nsso' ),
	) );
}