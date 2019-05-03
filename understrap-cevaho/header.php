<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>

	<link rel="stylesheet" href="http://localhost/blog/wordpress/wp-content/themes/understrap/css/ced.css" type="text/css" media="all">
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<!-- Your site title as branding in the menu -->
		<?php //if ( ! has_custom_logo() ) { ?>

			<?php if ( is_front_page() && is_home() ) : ?>
				<div class="row">
								<div class="col-12">
										<h1 class="navbar-brand mb-0">
										<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
								</div>
				</div>

				<div class="header-social-wrap">
					<!--a href="https://www.thefarmersdog.com/" target="_blank"><span class="rt-post-icon"></span></a-->

					<div class="social-link-info header-social-inner">
							<a class="color-facebook" href="https://www.facebook.com/thefarmersdog" target="_blank" original-title="Facebook"><i class="fa fa-facebook"></i></a>
							<a class="color-twitter" href="https://twitter.com/farmersdog" target="_blank" original-title="Twitter"><i class="fa fa-twitter"></i></a>
							<a class="color-instagram" href="https://www.instagram.com/thefarmersdog/" target="_blank" original-title="Instagram"><i class="fa fa-instagram"></i></a>
				 	</div><!--#social icon-->

				 	<div class="banner-search-wrap">
							<a href="#" id="ruby-banner-search" data-mfp-src="#ruby-banner-search-form" data-effect="mpf-ruby-effect" title="search" class="banner-search-icon">
							<i class="fa fa-search"></i>
						   </a><!--#banner search button-->
					</div><!--#banner search wrap -->
	 			</div><!-- fin header social wrap -->

				<nav class="navbar navbar-expand-md navbar-light bong">

					<button class="navbar-toggler" type="button" data-toggle="collapse" 
						data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" 
						aria-expanded="false" 
						aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
						<span class="navbar-toggler-icon"></span>
					</button>

					<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
								array(
									'theme_location'  => 'primary',
									'container_class' => 'collapse navbar-collapse',
									'container_id'    => 'navbarNavDropdown',
									'menu_class'      => 'navbar-nav nav ml-auto',
									'fallback_cb'     => '',
									'menu_id'         => 'main-menu',
									'depth'           => 2,
									'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
								)
							); ?>

				</nav><!-- .site-navigation -->


			<?php else : ?>

					<h1 class="navbar-brand nothome">
						<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
					</h1>

					<div class="header-social-wrap">
						<div class="banner-search-wrap">
							<a href="#" id="ruby-banner-search" data-mfp-src="#ruby-banner-search-form" data-effect="mpf-ruby-effect" title="search" class="banner-search-icon">
							<i class="fa fa-search"></i>
						   </a><!--#banner search button-->
					</div><!--#banner search wrap -->
	 			</div><!-- fin header social wrap -->

				<div class="pos-f-t">
				<nav class="navbar navbar-light bg-white">
				    <button class="navbar-toggler" type="button" data-toggle="collapse" 
					data-target="#navbarToggleExternalContent" 
					aria-controls="navbarToggleExternalContent" 
					aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
				  </nav>

  				<div class="collapse" id="navbarToggleExternalContent">
				    

				      <!-- The WordPress Menu goes here -->
					
					<?php wp_nav_menu(
								array(
									'theme_location'  => 'primary',
									'container_class' => '',
									'container_id'    => 'navbarNavDropdown',
									'menu_class'      => 'navbar-nav nav ml-auto',
									'fallback_cb'     => '',
									'menu_id'         => 'main-menu',
									'depth'           => 2,
									'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
								)
							); ?>
  				</div>
			</div><!-- fin pos-f-t-->

			<?php endif; ?>


		<?php //} else {the_custom_logo();} ?><!-- end custom logo -->



		<?php include(TEMPLATEPATH . '/searchor.php'); ?>



	</div><!-- #wrapper-navbar end -->
