<?php get_header();
include 'inc/lightboxSquareGallery.php';
include 'inc/getAllArtists.php';
include 'inc/getArtistForPastFestivals.php';
include 'inc/backgorundImageAndGradient.php';
?>



<main class="previous-festivals-content" style="background: linear-gradient(180deg, rgba(117, 113, 112, 0.9) 0%, rgba(68, 65, 65, 0.9) 100%), url(<?php echo wp_get_attachment_image_src(get_field('post_previous_festivals_background_image'), 'full')[0] ?>);   background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;">


    <section class="previous-festival-info previous-festivals-content__top-section">
        <div class="row">
            <h2 class="section-header section-header__bigger more-padding-bottom top-header-padding text-center">
                <?php esc_html_e(get_field('post_previous_festivals_dates_of_the_festival'), 'satiksanos-saulkrastos') ?>
            </h2>
        </div>
        <div class="row ">

            <div class="col-md-2 prev-impressive-stats">


                <?php if (have_rows('post_previous_festivals__impresive_statistics')) : while (have_rows('post_previous_festivals__impresive_statistics')) : the_row();

                ?>
                        <div class="prev-impressive-stats-items text-color-white text-center d-flex flex-column justify-content-center align-items-center">
                            <h2 class="large-info-num"><?php the_sub_field('number') ?></h2>
                            <h3 class="large-info-text"><?php the_sub_field('text') ?></h3>
                        </div>

                <?php endwhile;
                endif; ?>




            </div>
<div class="prev-text-wrapper">

    <div class="col-md-10 text-long text-color-white offset-md-2 prev-text">
        <?php echo wp_kses_post(wpautop((get_field('post_previous_previous_festival_text')))) ?>
    </div>
</div>
    




        </div>
        </div>
    </section>

    <section class="gallery-history">

        <?php
        lightboxSquareGallery('GALLERY ', 'col-12', 'prev-gallery', '6', get_the_id())

        ?>

    </section>


    <section class="history-page-past-artists-and-concerts" style=<?php setBackgroundImage(true, null, 'post_previous_the_year_artists_section_background_image')?>>

        <div class="history-page-past-artists">

            <h4 class="section-header section-header--dark text-center"><?php esc_html_e(get_field('post_previous_this_year_artists_section_heading'), 'satiksanos-saulkrastos') ?></h4>
            <?php

            $yearOfTHeQueriedFestival = get_field('history_year_of_archive');
            getArtistForPastFestival($yearOfTHeQueriedFestival, true) ?>


        </div>





    </section>




</main>

<?php get_footer(); ?>