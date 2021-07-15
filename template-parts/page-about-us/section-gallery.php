<section class="festival-about-gallery full-screen-cover" style=<?php setBackgroundImage(true, null, 'about_us_section_2_background_image', null, true) ?>>

    <h2 class="section-header section-header--light text-center mb-5">
        <?php esc_html_e(get_field('about_us_gallery_section_heading'), 'satiksanos-saulkrastos') ?>
    </h2>

    <div class="row">

        <?php
        echo get_field('about_us_gallery_shortcode_modula')
        ?>

    </div>


</section>