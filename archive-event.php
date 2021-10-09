<?php get_header(); ?>

<?php $render_content = function() { ?>
    <div class="d-flex gap-3">
        <button type="button" class="btn btn-outline-light align-self-stretch align-self-sm-center">
            <i class="fa fa-calendar-alt me-2"></i>Add to Calendar
        </button>
        <a href="#" class="btn btn-outline-light align-self-stretch align-self-sm-center">
            <i class="fa fa-history me-2"></i>View Past Events
        </a>
    </div>
<?php } ?>

<?php 
    get_template_part('template-parts/banner', null, array(
        'title' => 'Upcoming Events',
        'subtitle' => 'Come show your support by attending one of our events!',
        'render_content' => $render_content
    ));
?>
<?php while (have_posts()) { ?>
    <?php the_post(); ?>
    <?php 
        $eventDate = new DateTime(get_field('starts_on')); 
        $startTime = new DateTime(get_field('starts_at'));
    ?>
    <div class="container shadow rounded px-3 py-3 my-4 bg-light gap-3 gap-lg-4 d-flex flex-column flex-lg-row align-items-stretch">
        <div class="bg-primary text-light p-1 p-lg-3 rounded d-flex gap-3 gap-lg-0 flex-lg-column align-items-center justify-content-center">
            <i class="fa fa-lg fa-calendar-day d-lg-none"></i>
            <span class="fs-2">
                <?php echo $eventDate->format('M'); ?>
            </span>
            <span class="fs-1 fw-bold">
                <?php echo $eventDate->format('d'); ?>
            </span>
        </div>
        <div class="d-flex flex-lg-2 flex-column">
            <h2 class="display-5">
                <?php the_title(); ?>
            </h2>
            <p class="lead">
                <?php the_excerpt(); ?>
            </p>
        </div>
        <div class="d-flex flex-column gap-3 flex-lg-1">
            <span class="d-flex align-items-center gap-2">
                <i class="fas fa-lg fa-clock text-primary text-center flex-1"></i>
                <span class="fs-5 flex-6">
                    <?php echo $startTime->format('g:i a'); ?>
                    <?php 
                        if (get_field('ends_at')) {
                            $endTime = new DateTime(get_field('ends_at'));
                            echo ' - ' . $endTime->format('g:i a');
                        }
                    ?>
                </span>
            </span>
            <span class="d-flex align-items-center gap-2">
                <i class="fas fa-lg fa-map-marker-alt text-primary text-center flex-1"></i>
                <span class="fs-5 flex-6">
                    <?php echo get_field('location')[0]->post_title; ?>
                </span>
            </span>
            <?php 
                $fee = get_field('admission_fee');
                if ($fee) {
            ?>
                <span class="d-flex align-items-center gap-2">
                    <i class="fas fa-lg fa-dollar-sign text-primary text-center flex-1"></i>
                    <span class="fs-5 flex-6">
                        <?php echo number_format($fee, 2); ?>
                    </span>
                </span>
            <?php } ?>
            <a href="<?php the_permalink(); ?>" class="mt-auto btn btn-primary">
                More Info
            </a>
        </div>
    </div>
<?php } ?>

<?php get_footer(); ?>