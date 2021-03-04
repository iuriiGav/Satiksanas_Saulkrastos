<?php get_header(); 

include 'inc/queries/upcomingConcertQuery.php';
include 'inc/backgorundImageAndGradient.php'
?>



<?php while (have_posts()) : the_post(); ?>

    <?php
    $fullname = get_the_title();
    $firstname = explode(' ', trim($fullname))[0];


    ?>



    <main class="artist-post" style= <?php setBackgroundImage(true, null, 'background_image_for_post_about_artist', 11, true) ?>>

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
                                <?php echo esc_html_e(get_field('page_concerts_listen_to_part_1', 7), 'satiksanos-saulkrastos') ?> <?php echo esc_html($firstname, 'satiksanos-saulkrastos') ?>  <?php echo esc_html_e(get_field('page_concerts_listen_to_part_2', 7), 'satiksanos-saulkrastos') ?> 
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

<a class="text-color-darkest sidebar-links" href="<?php echo the_permalink(); ?>">
          <div class="sidebar-concert__card-container concert-exists-unique-class-for-js-only">
                            <div class="sidebar-concert__date">
                                <h4><?php esc_html_e($date_and_month[1], 'satiksanos-saulkrastos') ?></h4>
                                <h4> <?php esc_html_e($date_and_month[0], 'satiksanos-saulkrastos') ?></h4>
                                    <p class="text-color-brand-direct m-0 p-0"><?php esc_html_e($date_and_month[2], 'satiksanos-saulkrastos') ?></p>
                            </div>
                            <div class="sidebar-concert__title">
                                <h3> 

                                        <?php esc_html_e(get_field('post_concerts_program_name'), 'satiksanos-saulkrastos') ?>
                                </h3>
                            </div>
                        </div>
                        </a>

            <?php endif; endforeach  ?>

                  

                        <?php 
                            endwhile;
                            wp_reset_postdata();
                        endif; ?>
                    


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
         
        </section>


    </main>


<?php endwhile; ?>

<?php get_footer(); ?>