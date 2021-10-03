<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                background-image: url(<?php echo get_theme_file_uri('images/paper.png') ?>);
            }
        </style>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class('container-fluid px-0'); ?>>
        <header class="sticky-top">
            <?php get_template_part('template-parts/top-nav'); ?>
        </header>