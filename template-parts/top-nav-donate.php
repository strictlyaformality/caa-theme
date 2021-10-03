<?php 
    if (!$args['form_class_list']) {
        $args['form_class_list'] = '';
    }

    if (!$args['button_class_list']) {
        $args['button_class_list'] = '';
    }

    if (!$args['icon_class_list']) {
        $args['icon_class_list'] = '';
    }

    if (!$args['button_text_class_list']) {
        $args['button_text_class_list'] = '';
    }
?>

<form class="<?php echo $args['form_class_list']; ?>">
    <button type="button" class="btn btn-primary <?php echo $args['button_class_list']; ?>">
        <i class="fas fa-donate <?php echo $args['icon_class_list']; ?>"></i>    
        <span class="<?php echo $args['button_text_class_list'] ?>">
            Donate
        </span>
    </button>
</form>