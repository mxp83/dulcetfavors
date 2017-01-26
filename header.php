<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content',
		'understrap' ); ?></a>
		
		<div class="cart-box">
			<a class="cart-custom-link" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php echo sprintf ( _n( '(%d)', '(%d)', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></a>
		</div>


		<nav class="navbar navbar-toggleable-md">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="fa fa-bars"></span>
 				 </button>
 				 
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'social',
						'container_class' => 'social-container',
						'container_id'    => 'socialNavMenu',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>

				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>

			</div><!-- .container -->

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->

<div class="jumbotron jumbotron-fluid">
	
	<div class="container">
		<div class="col-sm-12">
			<img class="logo" src="<?php bloginfo('template_url') ?>/img/logo.svg">
		</div>		
	</div>
	<div class="jumbo-overlay"></div>
</div>
<div class="container" id="desktop-nav">
	<?php wp_nav_menu(
		array(
			'theme_location'  => 'primary',
			'container_class' => 'desktop-navbar',
			'container_id'    => 'desktopNav',
			'menu_class'	  => 'navbar-nav',
			'fallback_cb'	  => '',
			'menu_id'		  => 'desktop-main-menu',
			'walker'		  => new WP_Bootstrap_Navwalker(),
		)
	); ?>
</div>
