<div id="nav-list" class="offcanvas offcanvas-end">
    <div class="offcanvas-header">
        <?php get_template_part('template-parts/top-nav', 'logo', array('title_markup' => '<h3>Children Across America</h3>')); ?>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column flex-xxl-row">
        <ul class="navbar-nav align-items-center ms-xxl-auto mb-2 mb-lg-0">
            <li class="nav-item fs-5 px-2">
                <a class="nav-link" href="#">
                    About Us
                </a>
            </li>
            <li class="nav-item fs-5 px-2">
                <a class="nav-link" href="#">
                    Get Involved
                </a>
            </li>
            <li class="nav-item fs-5 px-2">
                <a class="nav-link" href="#">
                    Programs
                </a>
            </li>
            <li class="nav-item fs-5 px-2">
                <a class="nav-link" href="#">
                    Events
                </a>
            </li>
        </ul>
        <?php get_template_part('template-parts/top-nav', 'donate'); ?>
    </div>
</div>