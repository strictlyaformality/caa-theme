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
    add_image_size('page-banner', 1024, 768);
}

add_action('after_setup_theme', 'init_features');

function register_post_types() {
    register_post_type('event', array(
        'show_in_rest' => true,
        'has_archive' => true,
        'public' => true,
        'supports' => array('thumbnail', 'title', 'editor', 'excerpt'),
        'rewrite' => array(
            'slug' => 'events'
        ),
        'labels' => array(
            'name' => 'Events',
            'all_items' => 'All Events',
            'add_new' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar-alt'
    ));

    register_post_type('program', array(
        'show_in_rest' => true,
        'has_archive' => true,
        'public' => true,
        'supports' => array('thumbnail', 'title', 'editor', 'excerpt'),
        'rewrite' => array(
            'slug' => 'programs'
        ),
        'labels' => array(
            'name' => 'Programs',
            'all_items' => 'All Programs',
            'add_new' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'singular_name' => 'Program'
        ),
        'menu_icon' => 'dashicons-book-alt'
    ));

    register_post_type('location', array(
        'show_in_rest' => true,
        'has_archive' => true,
        'public' => true,
        'supports' => array('title', 'editor'),
        'rewrite' => array(
            'slug' => 'locations'
        ),
        'labels' => array(
            'name' => 'Locations',
            'all_items' => 'All Locations',
            'add_new' => 'Add New Location',
            'edit_item' => 'Edit Location',
            'singular_name' => 'Location'
        ),
        'menu_icon' => 'dashicons-location-alt'
    ));

    register_post_type('staff', array(
        'show_in_rest' => true,
        'has_archive' => true,
        'public' => true,
        'supports' => array('thumbnail', 'title', 'editor'),
        'labels' => array(
            'name' => 'Staff',
            'all_items' => 'All Staff',
            'add_new' => 'Add New Staff Member',
            'edit_item' => 'Edit Staff Member',
            'singular_name' => 'Staff Member'
        ),
        'menu_icon' => 'dashicons-groups'
    ));
}

add_action('init', 'register_post_types');

function transform_page_query($query) {
    if (!is_admin() and $query->is_main_query()) {
        if (is_post_type_archive('event')) {
            $today = date('Ymd');            

            $query->set('order', 'ASC');

            $query->set('meta_query', array(
                'relation' => 'AND',
                'start_date' => array(
                    'key' => 'starts_on',
                    'compare' => '>=',
                    'value' => $today,
                    'type' => 'numeric'
                ),
                'start_time' => array(
                    'key' => 'starts_at'
                ),
                'end_time' => array(
                    'key' => 'ends_at'
                )
            ));

            $query->set('orderby', array(
                'start_date' => 'ASC',
                'start_time' => 'ASC',
                'end_time' => 'ASC'
            ));
        }
    }
}

add_action('pre_get_posts', 'transform_page_query');

function acf_save_point($path) {
    $path = get_stylesheet_directory() . '/acf-json';

    return $path;
}

add_filter('acf/settings/save_json', 'acf_save_point');