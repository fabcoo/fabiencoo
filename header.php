<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fabien_Coo
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
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#content"><?php esc_html_e( 'Skip to content', 'fabiencoo' ); ?></a>

        <header id="masthead" class="site-header">
            <?php if (is_front_page() == true): ?>
            <?php else: ?>
            <?php the_custom_logo() ?>
            <?php endif; ?>
            <nav id="site-navigation" class="main-navigation site-close">
                <i class="fas fa-bars fa-2x"></i>
                <i class="fas fa-times fa-2x"></i>
                <div class="toggle-site"></div>
                <?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'container_class'=> 'menu-container menu-menu-principal-container'
			) );
			?>
            </nav><!-- #site-navigation -->
            <nav id="formation-navigation" class="main-navigation formation-close">
                <i class="far fa-user-circle fa-2x"></i>
                <i class="fas fa-times fa-2x"></i>
                <div class="toggle-formation"></div>
                <?php
			wp_nav_menu ( array (
				'theme_location' => 'formation-menu',
				'menu_id'        => 'formation-menu',
				'container_class'=> 'menu-container menu-menu-formation-container'
			) ); ?>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->

        <div id="content" class="site-content">