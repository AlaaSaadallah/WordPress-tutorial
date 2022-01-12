<?php

/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>
<div class="top-header-holder">
	<div class="container">
		<div class="row align-items-end">
			<div class="col-md-4">
				<a href="/" class="logo-holder">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="" class="logo" width="275">
				</a>
			</div>
			<div class="col-md-6">
				<div class="reservation-holder">
					<div class="contact-holder">
						<a class="phone" href="#">
							<i class="fa fa-phone"></i>
							12345678</a>
						<a class="address" href="#">
							<i class="fa fa-map"></i>
							st. 55 Alexandria</a>
						<div class="social-media-holder-tablet">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>

						</div>
						<button class="navbar-toggler md-view" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
							<div class="menu-title">
								Menu
							</div>
							<div>
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="bar"></div>
							</div>
						</button>
					</div>
					<a href="#" class="reservation-btn">Make a reservation</a>
				</div>
			</div>
			<div class="col-2">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="menu-title">
						Menu
					</div>
				</button>
				<div class="social-media-holder">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
				</div>
			</div>

		</div>
	</div>
</div>
<nav id="main-nav" class="navbar navbar-expand-md" aria-labelledby="main-nav-label">

	<h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e('Main Navigation', 'understrap'); ?>
	</h2>


	<div class="<?php echo esc_attr($container); ?>">




		<!-- The WordPress Menu goes here -->
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav ',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		);
		?>

	</div><!-- .container(-fluid) -->

</nav><!-- .site-navigation -->
<div class="container">
	<div class="mobile-logo-holder">
		<div>
			<a href="/">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="" class="logo" width="275">
			</a>
		</div>
		<div>
			<a href="#" class="reservation-btn mobile">Make a reservation</a>
		</div>
	</div>
</div>