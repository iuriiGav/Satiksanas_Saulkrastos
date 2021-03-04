<?php get_header(); 

include 'inc/queries/upcomingConcertQuery.php';
?>



<?php while (have_posts()) : the_post(); ?>

    <?php
    $fullname = get_the_title();
    $firstname = explode(' ', trim($fullname))[0];


    ?>

    <main class="artist-post" style="background: linear-gradient(180deg, #2C2929 0%, rgba(142, 140, 140, 0.72) 100%), url(<?php echo esc_url(wp_get_attachment_image_src(get_field('background_image_for_post_about_artist', 11), 'full')[0])  ?>);   background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;">

        <section class="artist">
            <div class="row all-single-artist-wrapper-row d-flex flex-row">


                <div class="col-md-6 artist-photo ">


                    <div class="single-artist-concerts-sticky-wrapper">

                        <h1 class="artist-name-title artist-name-title--mobile text-color-light text-font-secondary text-xxl ">
                            <?php the_title() ?> <span class="instrument">(<?php esc_html_e(get_field('post_artist_artist_instrument'), 'satiksanos-saulkrastos') ?>)</span>
                        </h1>


                        <img class="img-fluid artist-image" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'square')[0] ?>">

                        <div class="artists-concert-in-artist-page--desctop">

                            <h3 class="listen-artist-on-concert text-color-light text-md-small text-font-secondary">
                                Listen to <?php echo esc_html($firstname, 'satiksanos-saulkrastos') ?> on:
                            </h3>


                        </div>

                        <?php $upcoming_concerts = upcoming_concerts_query(100);
                        if ($upcoming_concerts->have_posts()) : while ($upcoming_concerts->have_posts()) : $upcoming_concerts->the_post();


                                    $date_and_month = explode(' ', get_field('post_concerts_concert_date'));
                                    $current_year = date("Y");
                                    $select_artists = get_field_object('post_concerts_artists')['value'];
                        ?>

<?php

            foreach ($select_artists as $artist) : 

                
            if($artist === $fullname && get_the_title() !== $fullname) : ?>


          <div class="sidebar-concert__card-container concert-exists-unique-class-for-js-only">
                            <div class="sidebar-concert__date">
                                <h4><?php esc_html_e($date_and_month[1], 'satiksanos-saulkrastos') ?></h4>
                                <h4> <?php esc_html_e($date_and_month[0], 'satiksanos-saulkrastos') ?></h4>
                                <?php if ($date_and_month[2] > $current_year) : ?>
                                    <p class="text-color-brand-direct m-0 p-0"><?php esc_html_e($date_and_month[2], 'satiksanos-saulkrastos') ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="sidebar-concert__title">
                                <h3> <a class="text-color-darkest sidebar-links" href="<?php echo the_permalink(); ?>">

                                        <?php esc_html_e(get_field('post_concerts_program_name'), 'satiksanos-saulkrastos') ?>
                                    </a>
                                </h3>
                            </div>
                        </div>

            <?php endif; endforeach  ?>

                  

                        <?php 
                            endwhile;
                            wp_reset_postdata();
                        endif; ?>
                        <!--                 
                    <div class="concert-card concert-card--narrow mb-2  align-content-center justify-content-around">
                        <div class="row flex-wrap align-items-center  w-100">

                            <div class="col-md-3 col-6 flex-row concert-date concert-date--text-small">
                                <h4 class="date-number me-2">7</h4>
                                <h5 class="date-month">augusts</h5>
                            </div>
                            <div class="col-md-6 text-center d-flex order-3 order-md-2  justify-content-center concert-program">
                                <p class="mb-0 text-start">Concert program name here</p>
                            </div>
                          


                            <div class="col-md-3 d-flex order-5 justify-content-center concert-action-btn px-0">
                                <button class="btn btn-primary-ig btn-primary-ig--small btn-lg w-100">get tickets</button>
                            </div>
                        </div>


                    </div> -->


                    </div>
                </div>



                <div class="col-md-6 artist-bio text-long text-long--normal">
                    <h1 class="artist-name-title artist-name-title--desctop text-color-darkest text-font-secondary text-md-lg text-medium ">
                        <?php the_title() ?> <span class="instrument">(<?php esc_html_e(get_field('post_artist_artist_instrument'), 'satiksanos-saulkrastos') ?>)</span>
                    </h1>
                    <?php echo the_content(); ?>
                </div>
            </div>

            </div>
            <div class="artists-concert-in-artist-page--mobile">

                <h3 class="listen-artist-on-concert text-color-light text-xxl text-center text-font-secondary mt-5">
                    Listen to <?php echo esc_html($firstname, 'satiksanos-saulkrastos') ?> on:
                </h3>

                <a href="">
                    <div class="artists-concerts-container d-flex justify-content-around flex-wrap">


                        <div class="concert-date-box mt-3 text-center">
                            <h4 class="date-number me-2 text-color-darkest text-md-small text-heavy text-font-ternary">7</h4>
                            <h5 class="date-month text-color-darkest text-md-small text-font-ternary">augusts</h5>
                        </div>

                    </div>

                </a>

            </div>

        </section>


    </main>


<?php endwhile; ?>

<!-- <h5 style='color: red; font-style: italic; margin-top:300px'> <?php echo 'this is from ' . basename(__FILE__); ?></h5> -->
<?php get_footer(); ?>