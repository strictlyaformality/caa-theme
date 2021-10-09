<?php 
    if (!$args['title']) {
        $args['title'] = 'YOU FORGOT A BANNER TITLE';
    }

    if (!$args['background_url']) {
        $args['background_url'] = get_theme_file_uri('/images/books.jpg');
    }
?>

<style>
    .banner {
        background: linear-gradient(rgb(0 0 0 / 70%), rgb(0 0 0 / 70%)), 
            url(<?php echo $args['background_url'] ?>);

        background-position: center top;
    }
</style>

<div class="container-fluid bg-primary py-4 banner border-bottom border-black border-4 text-center d-flex flex-column justify-content-center align-items-center">
    <h1 class="text-light display-2"><?php echo $args['title']; ?></h1>
    <?php if ($args['subtitle']) { ?>
        <p class="text-light fs-4">
            <?php echo $args['subtitle'] ?>
        </p>
    <?php } ?>
    <?php if ($args['render_content']) { ?>
        <?php echo $args['render_content'](); ?>
    <?php } ?>
</div>