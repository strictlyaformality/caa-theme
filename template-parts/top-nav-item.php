<?php 
    if (!$args['item_class_list']) {
        $args['item_class_list'] = '';
    }

    if (!$args['link_class_list']) {
        $args['link_class_list'] = '';
    }

    if (!$args['href']) {
        $args['href'] = '#';
    }

    if (!$args['text']) {
        $args['text'] = '';
    }

    if (!$args['icon_class_list']) {
        $args['icon_class_list'] = '';
    }
?>

<li class="nav-item <?php echo $args['item_class_list']; ?>">
    <a class="nav-link <?php echo $args['link_class_list']; ?>" href="<? echo $args['href']; ?>">
        <i class="fas <?php echo $args['icon_class_list']; ?>"></i>
        <?php echo $args['text']; ?>
    </a>
</li>