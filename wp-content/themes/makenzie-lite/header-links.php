<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Makenzie_Blog
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php $makenzie_wide_boxed = makenzie_lite_get_theme_mod( 'wide_boxed', 'boxed' );

if ( $makenzie_wide_boxed == 'wide' ) : ?>
	<div id="page" class="site">
<?php else : ?>
	<div id="page" class="boxed site">
<?php endif; ?>

<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'makenzie-lite' ); ?></a>

<?php if ( has_header_image() ) : ?>
	<header style="background-image: url(<?php header_image(); ?>);" id="masthead" class="site-header">
<?php else : ?>
	<header id="masthead" class="site-header-link">
<?php endif; ?>

	<?php
		// Header Style
		get_template_part( 'template-parts/header/headers/header-2-links' );
	?>
</header>

	<div id="content" class="site-content">
		<div class="grid-container fluid">
			<div class="grid-x grid-margin-x grid-padding-x">
