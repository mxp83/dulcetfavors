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
			<a class="cart-custom-link" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
		</div>


		<nav class="navbar navbar-toggleable-md  navbar-inverse bg-inverse">

			<div class="<?php echo esc_html( $container ); ?>">
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'social',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'socialNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'social-menu',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
 				 </button>

 				 <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-tagret="#socialNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Connect with Us">
 				 	<span class="fa fa-comment"></span>
 				 </button>
 -->
					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>
					<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
					   title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
						<?php bloginfo( 'name' ); ?>
					</a>
					
					<?php } else {
						the_custom_logo();
					} ?>
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
			<h1>Dulcet Favors</h1>
			<h2>They looks so pretty, you won't want to unwrap them!</h2>
		</div>		
	</div>
</div>
<div class="container">
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
