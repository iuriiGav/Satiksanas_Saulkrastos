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
      
    <div class="row">

    <div class=" history-page-past-artists">

            <h4 class="section-header section-header--dark text-center"><?php esc_html_e(get_field('post_previous_this_year_artists_section_heading'), 'satiksanos-saulkrastos') ?></h4>
            

            <?php
             $historyOfArchive = get_field('history_year_of_archive');
            ?>
            
            <?php
$args = array(

    'post_type' => 'artists',
    'posts_per_page' => 100,

);


$current_artists = new WP_Query($args); ?>


                <div class="gallery-wrapper">

    <?php if ($current_artists->have_posts()) : while ($current_artists->have_posts()) : $current_artists->the_post(); ?>
    
                <?php
                $artist_id = get_the_id();
                ?>

            

             <?php 
             
             if( have_rows('post_artist_artist_participated_in_festival_during_these_years') ):

                // Loop through rows.
                while( have_rows('post_artist_artist_participated_in_festival_during_these_years') ) : the_row();
                $year_artist_participated_in_the_past = get_sub_field('year_of_participation', $artist_id);

           

                
                
                                
        
           
                if($year_artist_participated_in_the_past ===  $historyOfArchive) :

              
             ?>



                    <div class="gallery-container">
                        <div class="gallery-item">
                            <div class="image">
                                <a href="<?php echo esc_url(get_permalink()) ?>">

                                    <img class="position-relative img-<?php echo 'some-unic-id' ?>" src="<?php echo esc_url(get_the_post_thumbnail_url($artist_id, 'square')) ?>" alt="<?php esc_html_e(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE), 'satiksanos-saulkrastos') ?>">
                                   
                                    <div class="artist-name text-center text-color-light d-flex justify-content-center">
                                        <h3 class="name text-font-secondary text-heavy text-small text-color-light"><?php esc_html_e(get_the_title($artist_id), 'satiksanos-saulkrastos') ?></h3>
                                        <!-- <p class="instrument text-color-brand-direct text-small">(<?php esc_html_e(get_field('post_artist_artist_instrument'), 'satiksanos-saulkrastos') ?>)</p> -->
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>


                    
<?php 
//end of loop looking if the artist participated in the current year
endif; ?>
<?php 
  // End loop repeater
endwhile;


    //  End if repeater
endif;
?>
    <?php endwhile;
        wp_reset_postdata();
    endif; ?>
    </div><!-- .gallery-wrapper -->
      
        </div> <!-- .history-page-past-artists -->

        
        
        <div  class="col-md-6 history-page-concerts">

        <h4 class="section-header section-header--dark text-center"><?php esc_html_e(get_field('post_previous_this_year_concerts_heading'), 'satiksanos-saulkrastos') ?></h4>

                    <div  style="background: white;" class="d-flex concert-card__past flex-wrap align-items-center justify-content-around">
                        <div class=" concert-date__past">
                            <p class="date-number--small">7 augusts</p>
                        </div>
                        <div class=" concert-program__past">
                            <p class="date-number--small">Concert program name here</p>
                        </div>
                      
                        <div class="concert-action-btn__past">
                            <button class="btn btn-primary-ig btn-primary-ig__past ">more info</button>
                        </div>
                    </div>
                </div>

    </div><!-- .row -->

    </section>




</main>

<?php get_footer(); ?>