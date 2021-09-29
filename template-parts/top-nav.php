<nav class="nav">
    <?php get_template_part('template-parts/top-nav', 'brand'); ?>
    <?php 
        get_template_part('template-parts/top-nav', 'list');
    ?>
    <?php get_template_part('template-parts/top-nav', 'search'); ?>
    <?php get_template_part('template-parts/top-nav', 'menu'); ?>
    <?php get_template_part('template-parts/top-nav', 'donate'); ?>
    <span class="nav__donate--floating bg-blue text-gray-100 rounded-full h-20 w-20 flex items-center justify-center fixed right-5 bottom-5 xl:hidden">
        <i class="fas fa-2x fa-donate"></i>
    </span>
</nav>