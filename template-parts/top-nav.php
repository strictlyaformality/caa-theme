<nav class="navbar navbar-expand-xxl navbar-light bg-light border-bottom border-primary border-4 py-0 py-sm-2">
    <div class="container-fluid">
        <?php get_template_part('template-parts/top-nav', 'brand'); ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#nav-list">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php get_template_part('template-parts/top-nav', 'list'); ?>
        </div>
        <!-- <?php get_template_part('template-parts/top-nav', 'search'); ?>
        <?php get_template_part('template-parts/top-nav', 'menu'); ?>
        <?php get_template_part('template-parts/top-nav', 'donate'); ?> -->
        <!-- <span class="nav__donate--floating bg-blue text-gray-100 rounded-full h-20 w-20 flex items-center justify-center fixed right-5 bottom-5 xl:hidden">
            <i class="fas fa-2x fa-donate"></i>
        </span> -->
    </div>
</nav>