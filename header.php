<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package CreateDenton
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'createdenton' ); ?></a>

	<div class="prism">
		<div class="prism-row">
			<div class="prism-column col-1">
			</div>
			<div class="prism-column col-2">
			</div>
			<div class="prism-column col-3">
			</div>
			<div class="prism-column col-4">
			</div>
			<div class="prism-column col-5">
			</div>
		</div>
	</div>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title">Create <strong>Denton</strong></h1>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
