<?php

function load_stylesheets() {
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 5.11, 'all');
    wp_enqueue_style('stylesheet');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

wp_enqueue_script('script', get_template_directory_uri() . '/script.js', array(), true);

function load_javascript() {
    wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true);
    wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts', 'load_javascript');

// Add menu in admin panel
add_theme_support('menus');

// Add image
add_theme_support('post-thumbnails');

// Register menu
register_nav_menus(

    array(
        'top-menu' => 'Top Menu'
    )
);

add_filter( 'wp_nav_menu_objects', 'oenology_add_menu_parent_class' );

// add woocommerce support
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );