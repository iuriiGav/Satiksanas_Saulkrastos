<?php get_header();
include 'inc/getAllArtists.php';
include 'inc/getAllConcerts.php';
// include 'inc/backgorundImageAndGradient.php';

?>


<?php while (have_posts()) : the_post(); ?>

    <main id="front-page-ig">

        <section style="background-image: linear-gradient(180deg, #1F2526 0%, rgba(196, 196, 196, .3) 30%), url(<?php echo get_the_post_thumbnail_url(null, 'mediumCover') ?>);" class="hero d-flex justify-content-end align-items-end">

            <h2 class="fest-date text-lg-thin" style="color: white;"><?php esc_html_e(get_field('homepage_festival_dates'), 'satiksanos-saulkrastos') ?></h2>
        </section>

        <section class="homepage-concerts container-fluid p-4">

            <div class="row gx-5">
                <div class="col-sm-9 d-flex justify-content-center  flex-column align-items-center z-100">
                    <h4 class="section-header section-header--dark section-header--upcoming"><?php echo sanitize_text_field(get_field('homepage_upcoming_concerts_section_title'), 'satiksanos-saulkrastos') ?></h4>


                    <?php satiksanos_saulkrastos_upcoming_concerts(3, null, null, null, null) ?>

                    <!-- original concert card begins -->






                </div>



                <div class="col-sm-3 homepage-concerts__map-of-venues">

                    <?php
                    echo get_field('homepage_map_of_venues_shortcode')
                    ?>

                </div>


            </div>
        </section>


        <section class="homepage-about-us full-screen-cover" style=<?php setBackgroundImage(true, null, 'homepage_about_us_section_cover_image', null, true) ?>>

            <h4 class="section-header section-header--light text-center p-4"><?php esc_html_e(get_field('homepage_about_us_section_title'), 'satiksanos-saulkrastos'); ?></h4>


            <div class="row position-relative">
                <!-- <div class="col-md-6"> </div> -->

                <div class="col-md-6 about-text-card d-flex align-items-center">
                    <p class="text-font-ternary text-md-normal"> <?php esc_html_e(get_field('homepage_about_us_section_short_text'), 'satiksanos-saulkrastos') ?> </p>
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
                                    <div class="swiper-slide"><img src="<?php echo esc_url(wp_get_attachment_image_src($image, 'blog')[0]) ?>" alt="<?php esc_html_e(get_post_meta($image, '_wp_attachment_image_alt', TRUE), 'satiksanos-saulkrastos') ?>"></div>
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

            <div class="row text-center festival-numbers">

                <?php if (have_rows('homepage_about_us_numbers_to_impress')) : while (have_rows('homepage_about_us_numbers_to_impress')) : the_row();

                ?>
                        <div class="<?php the_sub_field('class') ?> text-color-white">
                            <h3 class="large-info-text"><?php the_sub_field('text') ?></h3>
                            <h2 class="large-info-num"><?php the_sub_field('number') ?></h2>
                        </div>

                <?php endwhile;
                endif; ?>




            </div>
        </section>
        <section class="homepage-artists">
            <h4 class="section-header section-header--dark text-center"><?php esc_html_e(get_field('homepage_artists_section_heading'), 'satiksanos-saulkrastos') ?></h4>


            <?php getAllArtists('post_artist_is_this_artist_participating_this_year', 'is_this_artist_participating_this_year_yes', true)  ?>








        </section>


        <section class="contact-us full-screen-cover" style=<?php setBackgroundImage(true, null, 'homepage_contact_us_section_cover_image', null, true) ?>>
            <h4 class="section-header section-header--light text-font-secondary text-lg-bold text-color-light text-center">CONTACT US</h4>


            <?php echo do_shortcode(get_field('homepage_contact_form_shortcode'))  ?>

        </section>


    </main>

<?php endwhile; ?>

<?php get_footer(); ?>