<?php
    if (!$args['title']) {
        $args['title'] = get_bloginfo('title');
    }
?>

<a class="navbar-brand d-flex flex-row align-items-center" href="<?php echo site_url(); ?>">
    <?php get_template_part('template-parts/top-nav', 'logo', array('class_list' => 'd-inline-block')); ?>
    <h1 class="d-none d-xxl-inline-block mb-0 ms-3 nav-title"><?php echo $args['title'] ?></h1>
    <h2 class="d-none d-sm-inline-block d-xxl-none mb-0 ms-3 nav-title"><?php echo $args['title'] ?></h2>
    <h6 class="d-flex text-break text-wrap flex-column d-sm-none mb-0 ms-3 nav-title">
        <?php echo str_replace(' ', '<br />', $args['title']); ?>
    </h6>
</a>