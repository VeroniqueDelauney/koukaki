<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
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

<body <?php body_class( 'my-body-class' ); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">

            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title"><?php bloginfo( 'name' ); ?></a>
            <!-- onclick="myFunction()" -->
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="line" id="Line1"></span>
                <span class="line" id="Line2"></span>
                <span class="line" id="Line3"></span>
            </button>
            
            <div id="showMenu">
                <div id="menuContent">                    
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/logo.png'; ?> ">
                    <ul>
                        <li class="orchid"><a href="#story" class="animationDown">Histoire</a></li>
                        <li class="purple_cat"><a href="#characters" class="animationDown">Personnages</a></li>                
                        <li class="black_cat"><a href="#place" class="animationDown">Lieu</a></li>
                        <li class="red_flower"><a href="#studio" class="animationDown">Studio Koukaki</a></li>
                    </ul>

                    <div class="name">STUDIO KOUKAKI</div>
                </div>
            </div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

    <!-- data-0="bottom: 100%;" 
            data-50="bottom: 50%;" 
            data-100="bottom: 0%" -->