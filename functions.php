<?php
// Thiết lập cơ bản cho theme
function meelo_long_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'primary' => __('Primary Menu', 'meelo-long'),
    ]);
}
add_action('after_setup_theme', 'meelo_long_setup');

// Load CSS / JS
function meelo_long_assets() {
    // Google Fonts
    wp_enqueue_style(
        'meelo-google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap',
        [],
        null
    );

    // CSS chính
    wp_enqueue_style(
        'meelo-main',
        get_template_directory_uri() . '/assets/css/main.css',
        ['meelo-google-fonts'],
        '1.1'
    );

    // JS cho menu mobile
    wp_enqueue_script(
        'meelo-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'meelo_long_assets');
