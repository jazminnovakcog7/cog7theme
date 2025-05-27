<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cog7theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cog7theme' ); ?></a>

	<!-- Custom Top Bar -->
	<div class="top-bar">
		<div class="contact-info">
			<i class="fa fa-phone"></i> +1 (303) 452-7973   
			<i class="fa fa-envelope"></i> contact@cog7.org
		</div>
		<div class="social-icons">
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
		</div>
	</div>

	<!-- Custom Sticky Header -->
	<div class="main-header">
		<div class="w3-bar w3-card" id="myNavbar">
			<!-- Logo Left -->
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="w3-bar-item w3-button logo-container">
				<?php the_custom_logo(); ?>
			</a>

			<!-- Static Menu Items -->
			<div class="menu-container">
				<a href="#about" class="w3-bar-item w3-button w3-text-white">About Us <i class="fa fa-caret-down"></i></a>
				<a href="#news" class="w3-bar-item w3-button w3-text-white">News</a>
				<a href="#ministries" class="w3-bar-item w3-button w3-text-white">Ministries <i class="fa fa-caret-down"></i></a>
				<a href="#resources" class="w3-bar-item w3-button w3-text-white">Resources <i class="fa fa-caret-down"></i></a>
				<a href="#shop" class="w3-bar-item w3-button w3-text-white">Shop</a>
				<a href="#give" class="w3-bar-item w3-button w3-text-white">Give</a>
				<a href="#contact" class="w3-bar-item w3-button w3-white w3-round">CONTACT</a>
			</div>

			<!-- Mobile Toggle Button -->
			<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium w3-text-white" onclick="w3_open()">
				<i class="fa fa-bars"></i>
			</a>
		</div>
	</div>

	<!-- Mobile Sidebar Menu -->
	<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
		<a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
		<a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About Us</a>
		<a href="#news" onclick="w3_close()" class="w3-bar-item w3-button">News</a>
		<a href="#ministries" onclick="w3_close()" class="w3-bar-item w3-button">Ministries</a>
		<a href="#resources" onclick="w3_close()" class="w3-bar-item w3-button">Resources</a>
		<a href="#shop" onclick="w3_close()" class="w3-bar-item w3-button">Shop</a>
		<a href="#give" onclick="w3_close()" class="w3-bar-item w3-button">Give</a>
		<a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
	</nav>

	<!-- WordPress Header Branding (still included below) -->
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$cog7theme_description = get_bloginfo( 'description', 'display' );
			if ( $cog7theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $cog7theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cog7theme' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
