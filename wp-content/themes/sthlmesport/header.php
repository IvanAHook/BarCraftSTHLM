<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sthlmesport
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

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php bloginfo('template_directory');?>/img/top-logo.png" alt="<?php bloginfo( 'name' ); ?>">
			</a></h1>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'sthlmesport' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sthlmesport' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

			<div id="filter-area">
				<a class="filter-icon" id="dota-filter-icon" name="dota" href="?filter=dota">
					<img src="<?php bloginfo('template_directory');?>/img/icon/dota-icon-36.png">
				</a>
				<a class="filter-icon" id="lol-filter-icon" name="lol" href="?filter=lol">
					<img src="<?php bloginfo('template_directory');?>/img/icon/lol-icon-36.png">
				</a>
				<a class="filter-icon" id="starcraft-filter-icon" name="starcraft" href="?filter=starcraft">
					<img src="<?php bloginfo('template_directory');?>/img/icon/sc-icon-36.png">
				</a>
			</div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	
