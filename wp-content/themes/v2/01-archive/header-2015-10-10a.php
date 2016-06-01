<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
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
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

<meta name="author" content="Haubt, R." />
<meta name="copyright" content="Copyright (c)2012
Haubt Robert. All Rights Reserved." />
<meta name="description" content="International Rock Art Database Archive and Repository" />
<meta name="keywords" content="rock art, petroglyph, painting, drawing, carving, beeswax, international, global, research, education, 3D, video, pictures, books, documentation" />

<title>
<?php
$type = get_post_type();
if ( 'cpt-00-01' == $type )
echo 'Resource:', the_field('RAE_0003'), '| Rock-Art Database';
elseif ( 'cpt-00-02' == $type )
echo 'Wikipedia: ', the_field('RAE_0003'), '| Rock-Art Database';
elseif ( 'cpt-00-03' == $type )
echo 'UNESCO: ', the_field('RAE_0003'), '| Rock-Art Database';
elseif ( 'cpt-01-01' == $type )
echo 'NEWS: ', the_field('RAE_0003'), '| Rock-Art Database';
elseif ( 'cpt-01-02' == $type )
echo 'Project: ', the_field('RAE_0003'), '| Rock-Art Database';
elseif ( 'cpt-01-03' == $type )
echo 'Place: ', the_field('RAE_0003'), '| Rock-Art Database';
elseif ( 'cpt-01-04' == $type )
echo 'Site: ', the_field('RAE_0003'), '| Rock-Art Database';
elseif ( 'cpt-01-05' == $type )
echo 'Item: ', the_field('RAE_0003'), '| Rock-Art Database';
elseif ( 'page' == $type )
echo the_title(), '| Rock-Art Database';
?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">