<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/general.js"></script>
</head>

<body <?php body_class(); ?>>

<div id="header">

    <div>
        <img src="<?php print bloginfo( 'template_url' ) ?>/images/logo.jpg" alt="National Schools Symphony Orchestra" />
    </div>

</div>


<div id="main">

    <!-- The main nav -->
    <?php
    wp_nav_menu( array(
        'container_class' => 'menu',
        'menu_class'      => '',
    ) );
    ?>