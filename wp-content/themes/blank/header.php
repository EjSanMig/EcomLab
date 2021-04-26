<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">


</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blank' ); ?></a>
	<link rel="stylesheet" type="text/css" href="http://localhost/SanMiguelLab/wp-content/themes/blank/template/header.css">
	<header id="masthead" class="site-header">
	<div class="topnav">
		<img src="img/1.png" style="width: 60px; position: absolute;">
		<a href="">Home</a>
		<a href="">Contact us</a>
		<a href="">About us</a>
	</div>
	</header><!-- #masthead -->
