<div id="nav-list" class="offcanvas offcanvas-end">
    <div class="offcanvas-header">
        <?php get_template_part('template-parts/top-nav', 'logo', array('title_markup' => '<h3>Children Across America</h3>')); ?>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column flex-xxl-row">
        <ul class="navbar-nav align-items-center ms-xxl-auto mb-2 mb-lg-0">
            <?php 
                get_template_part('template-parts/top-nav', 'item', array(
                    'item_class_list' => 'fs-5 px-2 py-3 py-xxl-0',
                    'text' => 'About Us'
                ));
            ?>
            <?php 
                get_template_part('template-parts/top-nav', 'item', array(
                    'item_class_list' => 'fs-5 px-2 py-3 py-xxl-0',
                    'text' => 'Get Involved'
                ));
            ?>
            <?php 
                get_template_part('template-parts/top-nav', 'item', array(
                    'item_class_list' => 'fs-5 px-2 py-3 py-xxl-0',
                    'text' => 'Programs'
                ));
            ?>
            <?php 
                get_template_part('template-parts/top-nav', 'item', array(
                    'item_class_list' => 'fs-5 px-2 py-3 py-xxl-0',
                    'text' => 'Events'
                ));
            ?>
        </ul>
        <?php 
            get_template_part('template-parts/top-nav', 'donate', array(
                'form_class_list' => 'd-flex flex-column mt-auto mt-lg-4 mt-xxl-0 flex-xxl-row justify-content-between ms-xxl-3',
                'button_class_list' => 'fs-4',
                'icon_class_list' => 'me-2'
            )); 
        ?>
    </div>
</div>