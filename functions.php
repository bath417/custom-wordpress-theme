<?php
function custom_theme_assets() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'custom_theme_assets');
function custom_theme_menus() {
    register_nav_menus(array(
        'primary' => 'Primary Menu',
    ));
}
add_action('after_setup_theme', 'custom_theme_menus');

