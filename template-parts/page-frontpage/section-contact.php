<section class="contact-us full-screen-cover" style=<?php setBackgroundImage(true, null, 'homepage_contact_us_section_cover_image', null, true) ?>>
    <h4 class="section-header section-header--light text-font-secondary text-lg-bold text-color-light text-center">

        <?php esc_html_e(get_field('homepage_contact_section_header'), 'satiksanos-saulkrastos') ?>

    </h4>


    <?php echo do_shortcode(get_field('homepage_contact_form_shortcode'))  ?>
</section>