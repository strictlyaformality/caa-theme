<?php 
    if (!$args['class_list']) {
        $args['class_list'] = '';
    }

    $logo = get_theme_mod('custom_logo');
    $img_src = wp_get_attachment_image_src($logo, 'full')[0];
?>
<img class="img-fluid <?php echo $args['class_list'] ?>" src="<?php echo get_theme_file_uri('images/caa-icon.png') ?>" />