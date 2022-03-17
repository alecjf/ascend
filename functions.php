<?php

function register_my_sidebars()
{
    register_sidebar([
        'name' => 'Footer',
        'id' => 'footer',
        'class' => 'footer',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ]);

    register_sidebar([
        'name' => 'Navigation',
        'id' => 'navigation',
        'class' => 'navigation',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ]);
}

function load_styles()
{
    wp_enqueue_style("main_style", get_stylesheet_uri());
    wp_enqueue_style(
        "header_big_style",
        get_theme_file_uri("css/header-big.css")
    );
    wp_enqueue_style(
        "header_small_style",
        get_theme_file_uri("css/header-small.css")
    );
    wp_enqueue_script(
        "main_script",
        get_theme_file_uri("scripts.js"),
        [],
        "0.1",
        true
    );
}

add_action('widgets_init', 'register_my_sidebars');

add_action("wp_enqueue_scripts", "load_styles");
