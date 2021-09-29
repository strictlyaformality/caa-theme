<?php

function init_scripts() {
    wp_enqueue_style('bootstrap-css', get_theme_file_uri('dist/css/theme.css'));
    wp_enqueue_style('google-fonts-serif', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&family=Sanchez&display=swap', false);
    wp_enqueue_style('google-fonts-sans', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700', false);
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css');
    wp_enqueue_style('font-awesome-solid', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/solid.min.css');
    wp_enqueue_script('bootstrap-js', get_theme_file_uri('dist/js/index.js'));
}

add_action('wp_enqueue_scripts', 'init_scripts');

function init_features() {
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'init_features');