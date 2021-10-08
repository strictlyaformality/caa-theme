<?php get_header(); ?>
<style>
    .banner {
        background: linear-gradient(rgb(0 0 0 / 70%), rgb(0 0 0 / 70%)), 
            url(<?php echo get_theme_file_uri('/images/books.jpg'); ?>);

        background-position: center top;
    }
</style>
<div class="container-fluid bg-primary py-4 banner border-bottom border-black border-4 text-center d-flex flex-column justify-content-center align-items-center">
    <h1 class="text-light display-2">Upcoming Events</h1>
    <p class="text-light fs-4">Come show your support by attending one of our events!</p>
    <button type="button" class="btn btn-outline-light align-self-stretch align-self-sm-center">
        <i class="fa fa-calendar-alt me-2"></i>Add to calendar
    </button>
</div>
<?php while (have_posts()) { ?>
    <?php the_post(); ?>
    <?php 
        $eventDate = new DateTime(get_field('starts_on')); 
        $startTime = new DateTime(get_field('starts_at'));
        $endTime = new DateTime(get_field('ends_at'));
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
                    <?php echo $startTime->format('g:i a'); ?> - <?php echo $endTime->format('g:i a'); ?>
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
            <button type="button" class="mt-auto btn btn-primary">
                More Info
            </button>
        </div>
    </div>
<?php } ?>

<?php get_footer(); ?>