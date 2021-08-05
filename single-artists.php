<?php get_header();

$upcoming_concerts_array = getUpcomingConcertsIDs();
$concerts_page_ID = ig_get_page_ID_by_template_name('page-concerts')[0];



if (have_posts()) : while (have_posts()) : the_post();

        $fullname = get_the_title();
        $artist_ID = get_the_ID();
        $firstname = explode(' ', trim($fullname))[0];
?>



        <main class="artist-post full-screen-cover" style=<?php setBackgroundImage(true, null, 'background_image_for_post_about_artist', 11, true) ?>>
            <section class="artist">
                <div class="row all-single-artist-wrapper-row d-flex flex-row">


                    <div class="col-md-6 artist-photo ">


                        <div class="single-artist-concerts-sticky-wrapper">
                            <?php get_template_part('template-parts/single-artists/section', 'artist-name-photo') ?>
                            <div class="artists-concert-in-artist-page--listen-artist-text">
                                <h3 class="listen-artist-on-concert text-color-light text-md-small text-font-secondary">
                                    <?php echo esc_html($firstname, 'satiksanos-saulkrastos') ?>  <?php echo esc_html_e(get_field('page_concerts_listen_to_part_1', $concerts_page_ID), 'satiksanos-saulkrastos') ?> <?php echo esc_html_e(get_field('page_concerts_listen_to_part_2', $concerts_page_ID), 'satiksanos-saulkrastos') ?>
                                </h3>
                            </div>

                            <?php get_template_part('template-parts/single-artists/section', 'this-artists-concert', array('upcoming_concerts_array' => $upcoming_concerts_array, 'artist_ID' => $artist_ID)); ?>

                        </div>
                    </div>



                    <?php get_template_part('template-parts/single-artists/section', 'artist-bio') ?>

                </div>

            </section>
        </main>


<?php endwhile;
endif;
get_footer(); ?>