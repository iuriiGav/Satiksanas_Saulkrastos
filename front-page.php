<?php get_header(); 
include 'inc/getAllArtists.php';
include 'inc/getAllConcerts.php';
include 'inc/backgorundImageAndGradient.php';

?>


<?php while (have_posts()) : the_post(); ?>

    <main id="front-page-ig">

        <section style="background-image: linear-gradient(180deg, #1F2526 0%, rgba(196, 196, 196, .3) 30%), url(<?php echo get_the_post_thumbnail_url(null, 'mediumCover') ?>);" class="hero d-flex justify-content-end align-items-end">

            <h2 class="fest-date text-lg-thin" style="color: white;"><?php esc_html_e(get_field('homepage_festival_dates'), 'satiksanos-saulkrastos') ?></h2>
        </section>

        <section class="homepage-concerts container-fluid p-4">

            <div class="row gx-5">
                <div class="col-sm-9 d-flex justify-content-center  flex-column align-items-center">
                    <h4 class="section-header section-header--dark section-header--upcoming"><?php esc_html_e(get_field('homepage_upcoming_concerts_section_title'), 'satiksanos-saulkrastos') ?></h4>


<?php satiksanos_saulkrastos_upcoming_concerts(3, null, null, null, null) ?>

                    <!-- original concert card begins -->



                  

                    
                </div>



                <div class="col-sm-2 homepage-concerts__map-of-venues d-flex align-items-center">
                    <img src="<?php echo esc_url(wp_get_attachment_image_src(get_field('homepage_map_of_venues'), 'full')[0]) ?>" alt="<?php echo get_post_meta(get_field('homepage_map_of_venues'), '_wp_attachment_image_alt', TRUE); ?>" class="homepage-map">
                    <div class="marker-wrapper">

                        <svg class="map-marker" width="50" height="53" viewBox="0 0 50 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path d="M24.8056 1.57075e-06C34.7129 7.04635e-07 42.7729 8.52571 42.773 19.0052C42.773 32.0105 26.694 51.1031 26.0094 51.9095C25.3664 52.6671 24.2437 52.6658 23.6019 51.9095C22.9173 51.1031 6.83834 32.0105 6.83833 19.0052C6.83853 8.52571 14.8985 2.43686e-06 24.8056 1.57075e-06ZM24.8056 28.5672C29.7902 28.5672 33.8454 24.2777 33.8454 19.0052C33.8454 13.7326 29.7901 9.44324 24.8056 9.44324C19.8212 9.44325 15.766 13.7327 15.766 19.0053C15.766 24.2778 19.8212 28.5672 24.8056 28.5672Z" fill="#F69333" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="49.6112" height="52.4773" fill="white" transform="matrix(-1 8.74228e-08 8.74228e-08 1 49.6113 0)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>

                </div>


            </div>
        </section>
        
        
        <section class="homepage-about-us" style=<?php setBackgroundImage(true, null, 'homepage_about_us_section_cover_image', null, true) ?>>

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
                                    <div class="swiper-slide"><img src="<?php echo esc_url(wp_get_attachment_image_src($image, 'full')[0]) ?>" alt="<?php esc_html_e(get_post_meta($image, '_wp_attachment_image_alt', TRUE), 'satiksanos-saulkrastos') ?>"></div>
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
            
            
            <?php getAllArtists ('post_artist_is_this_artist_participating_this_year', 'is_this_artist_participating_this_year_yes', true)  ?>
            
            
        





        </section>
        

        <section class="contact-us" style=<?php setBackgroundImage(true, null, 'homepage_contact_us_section_cover_image', null, true) ?>>
            <h4 class="section-header section-header--light text-font-secondary text-lg-bold text-color-light text-center">CONTACT US</h4>


            <?php echo do_shortcode(get_field('homepage_contact_form_shortcode'))  ?>

        </section>

        <section class="sponsors d-flex justify-content-around">



            <?php

            $logos = get_post_gallery(65, false);
            $logo_ids = explode(',', $logos['ids']);



            foreach ($logo_ids as $id) :
                $logo = wp_get_attachment_image_src($id, ''); ?>

                <a href="">
                    <img src="<?php echo $logo[0] ?>" alt="" class="img-fluid sponsor-logo">

                </a>


            <?php endforeach; ?>
        </section>
    </main>

<?php endwhile; ?>

<h5 style='color: red; font-style: italic;'> <?php echo 'this is from ' . basename(__FILE__); ?></h5>
<?php get_footer(); ?>