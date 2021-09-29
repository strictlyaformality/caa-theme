<?php 
    $logo = get_theme_mod('custom_logo');
    $img_src = wp_get_attachment_image_src($logo, 'full')[0];
?>
<img class="nav__logo" src="<?php echo $img_src; ?>" />