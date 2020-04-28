<?php

add_action( 'after_setup_theme', 'theme_register_nav_menu');
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );



function theme_register_nav_menu() {
    register_nav_menu('top', 'Меню сайта');
}

function theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_directory_uri() . '/assets/styles/main.min.css' );
    wp_enqueue_script( 'vendor', get_template_directory_uri() . '/assets/scripts/vendors.bundle.js', array(), '1.0.0', true );
    wp_enqueue_script( 'works', get_template_directory_uri() . '/assets/scripts/works.bundle.js', array(), '1.0.0', true );
}


if( function_exists('acf_add_options_page')) {
    acf_add_options_page();
}