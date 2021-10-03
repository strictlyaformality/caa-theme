<ul class="nav fixed-bottom d-flex bg-light d-lg-none">
    <?php 
        get_template_part('template-parts/top-nav', 'item', array(
            'icon_class_list' => 'me-2 fa-hands-helping text-primary',
            'item_class_list' => 'bottom-nav-item d-none d-sm-flex fs-5',
            'link_class_list' => 'text-reset text-center flex-grow-1 py-3 px-1',
            'text' => 'Get Involved'
        ));
    ?>
    <?php 
        get_template_part('template-parts/top-nav', 'item', array(
            'icon_class_list' => 'me-2 fa-graduation-cap text-primary',
            'item_class_list' => 'bottom-nav-item d-flex fs-5',
            'link_class_list' => 'text-reset text-center flex-grow-1 py-3 px-1',
            'text' => 'Programs'
        ));
    ?>
    <?php 
        get_template_part('template-parts/top-nav', 'item', array(
            'icon_class_list' => 'me-2 fa-calendar-day text-primary',
            'item_class_list' => 'bottom-nav-item d-flex fs-5',
            'link_class_list' => 'text-reset text-center flex-grow-1 py-3 px-1',
            'text' => 'Events'
        ));
    ?>
</ul>