<?php
/**
 * The Header template for our theme
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,200' rel='stylesheet' type='text/css'>
<link rel="icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.png" />
<link rel="icon" type="image/gif" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.gif" />
<meta name="description" content="ur unique, social venue in the heart of beautiful, downtown Columbus, MS provides you with all the linens, table wares, and an on-site caterer, making planning a breeze. ">
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<section class="header-navigation-container">
			<hgroup>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</hgroup>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'Main Menu', 'menu_class' => 'nav-menu', 'fallback_cb' => false ) ); ?>
			</nav><!-- #site-navigation -->
			<div class="clear"></div>
		</section>
		<div class="site-navigation-bottom-ornament"></div>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">