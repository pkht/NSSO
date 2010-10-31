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

<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/general.js"></script>
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/ie6.css" />
<![endif]-->
<link rel="Shortcut Icon" href="<?php bloginfo( 'url' ) ?>/favicon.ico">
<?php if( strstr( $_SERVER["HTTP_HOST"], 'pkht' ) ): ?>
    <base href="http://pkht.local:8888/nsso/" />
<?php elseif( strstr( $_SERVER["HTTP_HOST"], 'stage' ) ): ?>
    <base href="http://stage.nsso.org/" />
<?php else: ?>
    <base href="http://www.nsso.org/" />
<?php endif; ?>
</head>

<body <?php body_class(); ?>>

<div id="header">

    <div id="logo">
        <img src="<?php print bloginfo( 'template_url' ) ?>/images/logo.jpg" alt="National Schools Symphony Orchestra" />
    </div>

    <div id="buttons">
        <a href="<?php print bloginfo('url')?>/contact-us/"><img src="<?php print bloginfo( 'template_url' )?>/images/contact_button.jpg" alt="Contact Us" /></a>
        <a href="#"><img src="<?php print bloginfo( 'template_url' )?>/images/donate_button.jpg" alt="Contact Us" /></a>
    </div>

    <div id="latest_tweet">
        <h1>
            <img src="<?php bloginfo( 'template_url' )?>/images/twitter_icon_small.jpg" alt="Twitter" />
            Latest Tweet
        </h1>
        <?php aktt_latest_tweet(); ?>
        <p><a href="#">Follow NSSO on Twitter</a></p>
    </div>

    <div style="clear:both;"></div>

</div>


<div id="main">

    <!-- The main nav -->
    <?php
    wp_nav_menu( array(
        'menu' => 'Primary Menu',
        'container_class' => 'menu',
        'menu_class'      => '',
    ) );
    ?>