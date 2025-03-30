<?php

function firstFunction()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'firstFunction');

function my_theme_enqueue_assets()
{
    // Load CSS
    wp_enqueue_style('my-theme-style', get_stylesheet_uri());

    // Load JavaScript
    wp_enqueue_script('my-theme-script', get_template_directory_uri() . '/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');


// nav menus
register_nav_menus(array(
    'primary_menu' => __('Primary Menu'),
    'footer_menu' => __('Footer Menu')
));
