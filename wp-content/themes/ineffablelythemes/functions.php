<?php

function theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('menus');
}

add_action('after_setup_theme', 'theme_setup');

function add_theme_scripts()
{
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all');

    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0', 'all');

    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), '5.1.3', true);
    wp_enqueue_script('fontawesome', get_stylesheet_directory_uri() . '/assets/js/fontawesome.js', array(), '6.1.1', true);
    wp_enqueue_script('scrips', get_template_directory_uri() . '/assets/js/scripts.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');
