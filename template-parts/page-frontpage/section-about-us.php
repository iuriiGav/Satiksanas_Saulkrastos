<section class="homepage-about-us full-screen-cover" style=<?php setBackgroundImage(true, null, 'homepage_about_us_section_cover_image', null, true) ?>>

    <h4 class="section-header section-header--light text-center p-4"><?php esc_html_e(get_field('homepage_about_us_section_title'), 'satiksanos-saulkrastos'); ?></h4>


    <div class="row position-relative">
        <!-- <div class="col-md-6"> </div> -->

        <div class="col-md-6 about-text-card d-flex align-items-center">
            <div class="text-font-ternary text-md-normal"> <?php echo wp_kses_post(wpautop(get_field('homepage_about_us_section_short_text'), 'satiksanos-saulkrastos')) ?> </div>
        </div>
        <div class="col-md-6 offset-md-6 offset-xs-6 homepage-aboutus-gallery-container d-flex justify-content-center align-items-center">
            <!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">


                    <?php if (have_rows('homepage_about_us_short_gallery_photos')) : while (have_rows('homepage_about_us_short_gallery_photos')) : the_row();
                            $image = get_sub_field('photo');
                    ?>


                            <!-- Slides -->
                            <div class="swiper-slide"><img src="<?php echo esc_url(wp_get_attachment_image_src($image, 'large')[0]) ?>" alt="<?php esc_html_e(get_post_meta($image, '_wp_attachment_image_alt', TRUE), 'satiksanos-saulkrastos') ?>"></div>
                    <?php endwhile;
                    endif; ?>

                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
            </div>

        </div>
    </div>


    <?php if (have_rows('homepage_about_us_numbers_to_impress')) : while (have_rows('homepage_about_us_numbers_to_impress')) : the_row();

    ?>

            <div class="row text-center festival-numbers">

                <div class="<?php the_sub_field('class') ?> text-color-white">
                    <h3 class="large-info-text"><?php the_sub_field('text') ?></h3>
                    <h2 class="large-info-num"><?php the_sub_field('number') ?></h2>
                </div>
            </div>

    <?php endwhile;
    endif; ?>




</section>