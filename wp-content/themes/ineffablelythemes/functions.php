<?php

function theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'theme_setup');

function add_theme_scripts()
{
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all');

    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0', 'all');

    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), '5.1.3', true);
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/6da01f0ed9.js', array(), '6.1.1', true);
    wp_enqueue_script('scrips', get_template_directory_uri() . '/assets/js/scripts.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

function meks_time_ago()
{
    return sprintf(esc_html__('%s ago', 'textdomain'), human_time_diff(get_the_time('U'), current_time('timestamp')));
}
add_filter('the_time', 'my_post_time_ago_function');
