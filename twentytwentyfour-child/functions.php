<?php
add_action( 'wp_enqueue_scripts', 'tt4_child_enqueue_styles' );
function tt4_child_enqueue_styles() {
    // Load parent theme stylesheet
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // Load child theme stylesheet
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style'),
        filemtime( get_stylesheet_directory() . '/style.css' )
    );
    // Enqueue smooth scroll script
    wp_enqueue_script(
        'tt4-child-smooth-scroll',
        get_stylesheet_directory_uri() . '/js/smooth-scroll.js',
        array(),
        filemtime( get_stylesheet_directory() . '/js/smooth-scroll.js' ),
        true
    );
}
    // Register Header Menu
    function twentytwentyfour_child_register_menus() {
        register_nav_menus( array(
            'header-menu' => __( 'Header Menu', 'twentytwentyfour-child' ),
        ) );
    }
    add_action( 'after_setup_theme', 'twentytwentyfour_child_register_menus' );
    
