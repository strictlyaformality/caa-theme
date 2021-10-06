<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                background-image: linear-gradient(0deg, rgb(210 44 69 / 5%), rgb(210 44 69 / 5%)), url(<?php echo get_theme_file_uri('images/paper.png') ?>);
            }
        </style>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class('container-fluid px-0'); ?>>
        <header class="header sticky-top">
            <?php get_template_part('template-parts/top-nav'); ?>
        </header>