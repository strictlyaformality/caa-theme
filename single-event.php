<?php get_header(); ?>
<?php while(have_posts()) {
    the_post();

    $location = get_field('location')[0];
    $eventDate = new DateTime(get_field('starts_on')); 
    $startTime = new DateTime(get_field('starts_at'));

    $subtitle = $eventDate->format('M d');
    $subtitle .= ', ' . $startTime->format('g:i a');
    if (get_field('ends_at')) {
        $endTime = new DateTime(get_field('ends_at'));
        $subtitle .= ' - ' . $endTime->format('g:i a');
    }
?>

<?php $render_content = function() { ?>
    <div class="d-flex gap-3">
        <a href="<?php echo get_post_type_archive_link('event') ?>" class="btn btn-outline-light">
            <i class="fas fa-undo me-2"></i>
            Back to Events
        </a>
        <button type="button" class="btn btn-outline-light">
            <i class="fas fa-calendar-alt me-2"></i>
            Add to Calendar
        </button>
    </div>
<?php } ?>

<?php 
    get_template_part('template-parts/banner', null, array(
        'title' => get_the_title(),
        'subtitle' => $subtitle,
        'render_content' => $render_content
    )) 
?>
<div class="container rounded p-4 my-4 shadow bg-light">
    <div class="row">
        <h2 class="col">About</h2>
    </div>
    <div class="row">
        <!-- <div class="col-4">
            <img class="img-thumbnail rounded" src="<?php echo get_the_post_thumbnail_url(null, 'medium'); ?>" />
        </div> -->
        <article class="col-8">
            <?php the_content(); ?>
        </article>
        <div class="col-4 d-flex flex-column gap-3">
            <!-- <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(null, 'thumbnail'); ?>" /> -->
            <div class="d-flex gap-4 align-items-center bg-primary text-light rounded fs-4 px-3 py-2">
                <i class="fas fa-map-marker-alt me-2"></i>
                <?php echo $location->post_title; ?>
            </div>
            <address class="d-flex gap-4 bg-primary text-light rounded fs-4 px-3 py-2">
                <i class="fas fa-building pt-2"></i>
                <div class="d-flex flex-column">
                    <span>
                        <?php echo get_field('address_line_1', $location->ID); ?>
                    </span>
                    <span>
                        <?php 
                            $line2 = get_field('address_line_2', $location->ID);
                            if ($line2) {
                                echo $line2;
                            }
                        ?>
                    </span>
                    <span>
                        <?php 
                            $city = get_field('city', $location->ID);
                            $city .= ', ' . get_field('state', $location->ID);
                            $city .= ' ' . get_field('postal_code', $location->ID);

                            echo $city;
                        ?>
                    </span>
                </div>
            </address>
        </div>
    </div>
</div>

<?php } ?>
<?php get_footer(); ?>