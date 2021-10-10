<?php get_header(); ?>

<script>
    const SIDEBAR_PADDING = 10;
    window.addEventListener('DOMContentLoaded', function() {
        let $pageHeader = document.getElementById('page-header');
        let $stickySidebar = document.getElementById('sticky-sidebar');

        $stickySidebar?.style.setProperty('top', `${($pageHeader?.offsetHeight??0) + SIDEBAR_PADDING}px`);
    });
</script>

<?php while(have_posts()) {
    the_post();

    $location = get_field('location')[0];
    $eventDate = new DateTime(get_field('starts_on')); 
    $startTime = (new DateTime(get_field('starts_at')))->format('g:i a');
    $endTime = '';

    if (get_field('ends_at')) {
        $endTime = (new DateTime(get_field('ends_at')))->format('g:i a');
    }

    $subtitle = $eventDate->format('M d');
    $subtitle .= ', ' . $startTime;
    if ($endTime) {
        $subtitle .= ' - ' . $endTime;
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
        'background_url' => get_field('banner_image'),
        'render_content' => $render_content
    )) 
?>
<article class="container rounded p-4 my-4 shadow bg-light">
    <div class="row align-items-start flex-column flex-xl-row">
        <section class="col-xl-8">
            <h2 class="border-bottom border-2 border-dark pb-1">About</h2>
            <?php the_content(); ?>
        </section>
        <section id="sticky-sidebar" class="col-xl-4 d-flex flex-column flex-md-row flex-xl-column gap-4 fs-5 sticky-top">
            <section class="flex-1">
                <h2 class="border-bottom border-2 border-dark pb-1">Admission</h2>
                <div class="d-flex gap-2 gap-md-4 bg-primary text-light rounded px-3 py-2 justify-content-center justify-content-md-start">
                    <i class="fas fa-dollar-sign pt-1 flex-1 text-center"></i>
                    <div class="d-flex flex-column gap-2 flex-6">
                        <?php if (get_field('is_free')) { ?>
                            <span class="fw-bold">
                                FREE
                            </span>
                        <?php } elseif (get_field('admission_fee')) { ?>
                            <?php echo number_format(get_field('admission_fee'), 2); ?>
                        <?php } else { ?>
                            <span class="fst-italic">
                                See the event description for details
                            </span>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <section class="flex-1">
                <h2 class="border-bottom border-2 border-dark pb-1">Details</h2>
                <div class="d-flex flex-column gap-3">
                    <address class="d-flex gap-2 gap-md-4 bg-primary text-light rounded px-3 py-2 mb-0 justify-content-center justify-content-md-start">
                        <i class="fas fa-map-marker-alt pt-1 flex-1 text-center"></i>
                        <div class="d-flex flex-column flex-6">
                            <span>
                                <?php echo $location->post_title; ?>
                            </span>
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
                    <time class="d-flex bg-primary text-light rounded px-3 py-2 gap-2 gap-md-4 justify-content-center justify-content-md-start">
                        <i class="fas fa-clock pt-1 flex-1 text-center"></i>
                        <div class="d-flex flex-column flex-6">
                            <span>
                                <?php echo $eventDate->format('F d, Y'); ?>
                            </span>
                            <span>
                                <?php echo $startTime; ?>
                                <?php 
                                    if ($endTime) { 
                                        echo ' - ' . $endTime;
                                    }
                                ?>
                            </span>
                        </div>
                    </time>
                </div>
            </section>
        </section>
    </div>
</article>

<?php } ?>
<?php get_footer(); ?>