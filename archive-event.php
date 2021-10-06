<?php get_header(); ?>

<?php while (have_posts()) { ?>
    <?php the_post(); ?>
    <?php 
        $eventDate = new DateTime(get_field('starts_on')); 
        $startTime = new DateTime(get_field('starts_at'));
        $endTime = new DateTime(get_field('ends_at'));
    ?>

    <div class="container shadow rounded px-3 py-3 my-4 bg-light d-flex align-items-stretch">
        <div class="bg-primary text-light p-3 rounded d-flex flex-column align-items-center justify-content-center">
            <span class="fs-2">
                <?php echo $eventDate->format('M'); ?>
            </span>
            <span class="fs-1 fw-bold">
                <?php echo $eventDate->format('d'); ?>
            </span>
        </div>
        <div class="d-flex flex-column w-75 px-4">
            <h2 class="display-5">
                <?php the_title(); ?>
            </h2>
            <p class="lead">
                <?php the_excerpt(); ?>
            </p>
        </div>
        <div class="d-flex flex-column gap-3 w-25">
            <span class="">
                <i class="fas fa-lg fa-clock text-primary me-2"></i>
                <span class="fs-5">
                    <?php echo $startTime->format('g:i a'); ?> - <?php echo $endTime->format('g:i a'); ?>
                </span>
            </span>
            <span class="">
                <i class="fas fa-lg fa-map-marker-alt text-primary me-2"></i>
                <span class="fs-5">
                    <?php echo get_field('location')[0]->post_title; ?>
                </span>
            </span>
            <?php 
                $fee = get_field('admission_fee');
                if ($fee) {
            ?>
                <span class="">
                    <i class="fas fa-lg fa-dollar-sign text-primary me-2"></i>
                    <span class="fs-5">
                        <?php echo number_format($fee, 2); ?>
                    </span>
                </span>
            <?php } ?>
            <button type="button" class="mt-auto btn btn-primary">
                More Info
            </button>
        </div>
    </div>
<?php } ?>

<?php get_footer(); ?>