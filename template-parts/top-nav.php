<nav class="navbar navbar-expand-xxl navbar-light bg-light border-bottom border-primary border-4 py-0 py-sm-2">
    <div class="container-fluid">
        <?php get_template_part('template-parts/top-nav', 'brand'); ?>
        <div class="d-flex">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#nav-list">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php 
                get_template_part('template-parts/top-nav', 'donate', array(
                    'form_class_list' => 'd-flex d-xxl-none',
                    'button_class_list' => 'fs-4 ms-3',
                    'button_text_class_list' => 'd-none d-md-inline',
                    'icon_class_list' => 'me-md-2'
                )); 
            ?>
        </div>
        <?php get_template_part('template-parts/top-nav', 'list'); ?>
        </div>
    </div>
</nav>