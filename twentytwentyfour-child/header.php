<?php
/**
 * The header for the theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="header" role="banner">
    <div id="headerimg">
        <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
            <?php the_custom_logo(); ?>
        <?php else : ?>
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        <?php endif; ?>
        <div class="description"><?php bloginfo( 'description' ); ?></div>
    </div>
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'header-menu',
                'menu_id'        => 'header-menu',
            ) );
            ?>
        </nav>
    </div>
<div id="content" class="site-content">
