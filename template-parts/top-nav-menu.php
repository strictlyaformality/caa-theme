<button id="nav-menu-toggle" class="nav__icon-button lg:hidden">
    <i class="fas fa-bars"></i>
</button>

<nav id="nav-menu" class="nav__menu lg:hidden">
    <div class="flex items-stretch border-b-2 border-blue">
        <a class="flex items-center gap-2 p-2" href="<?php site_url() ?>">
            <div class="w-8">
                <?php get_template_part('template-parts/top-nav', 'logo'); ?>
            </div>
            <h1 class="text-xl">CAA</h1>
        </a>
        <button id="nav-menu-close" class="text-2xl flex items-center px-4 ml-auto hover:bg-gray-300">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <?php get_template_part('template-parts/top-nav', 'list'); ?>
    <?php get_template_part('template-parts/top-nav', 'donate'); ?>
</nav>

<div id="nav-menu-mask" class="nav__menu-mask"></div>