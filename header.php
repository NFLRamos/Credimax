<?php

/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package mxu
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('mxu_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php mxu_body_attributes(); ?>>
	<?php do_action('wp_body_open'); ?>
	<div class="site" id="page">

		<!-- ******************* The Navbar Area ******************* -->
		<div id="wrapper-navbar" class="position-absolute w-100 stickyheader">

			<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'mxu'); ?></a>

			<nav id="main-nav" class="navbar navbar-expand-lg navbar-dark" aria-labelledby="main-nav-label">

				<h2 id="main-nav-label" class="sr-only">
					<?php esc_html_e('Main Navigation', 'mxu'); ?>
				</h2>

				<?php if ('container' === $container) : ?>
					<div class="container container-xxl mega-menu-show">
					<?php endif; ?>

					<?php the_custom_logo(); ?>
					<!-- end custom logo -->

					<button class="navbar-toggler x ToogleX openX" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'mxu'); ?>">
						<small style="font-size:7px; color:#fff;">MENU</small>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- The WordPress Menu goes here -->

					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 3,
							'walker'          => new mxu_WP_Bootstrap_Navwalker(),
						)
					);
					?>
					<div class="col-auto ml-auto d-none d-lg-block">
					<button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModal">Login</button>						
						<a href="<?php bloginfo('url'); ?>/simuladores/" class="btn btn-light ml-3 ">Ver simuladores</a>
					</div>
					<?php if ('container' === $container) : ?>
					</div><!-- .container -->
				<?php endif; ?>

			</nav><!-- .site-navigation -->


		</div><!-- #wrapper-navbar end -->

