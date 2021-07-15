<section class="homepage-concerts container-fluid p-4">

    <div class="row gx-5">
        <div class="col-sm-9 d-flex justify-content-center  flex-column align-items-center z-100">
            <h4 class="section-header section-header--dark section-header--upcoming"><?php echo sanitize_text_field(get_field('homepage_upcoming_concerts_section_title'), 'satiksanos-saulkrastos') ?></h4>
            <?php satiksanos_saulkrastos_upcoming_concerts(3, null, null, null, null) ?>
        </div>



        <div class="col-sm-3 homepage-concerts__map-of-venues">
            <?php echo get_field('homepage_map_of_venues_shortcode') ?>
        </div>


    </div>
</section>