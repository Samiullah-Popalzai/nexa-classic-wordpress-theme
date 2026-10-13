
<?php

function nexa_classic_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
}

add_action('after_setup_theme', 'nexa_classic_setup');


function nexa_classic_enqueue_styles()
{
    wp_enqueue_style(
        'nexa-classic-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}

add_action('wp_enqueue_scripts', 'nexa_classic_enqueue_styles');
