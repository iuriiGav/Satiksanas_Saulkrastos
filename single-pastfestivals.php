<?php get_header();
include 'inc/lightboxSquareGallery.php';
include 'inc/getAllArtists.php';
include 'inc/getArtistForPastFestivals.php';
include 'inc/backgorundImageAndGradient.php';
include 'inc/queries/pastConcertsQuery_inclusive_this_year.php';
?>



<main class="previous-festivals-content" style="background: linear-gradient(180deg, rgba(117, 113, 112, 0.9) 0%, rgba(68, 65, 65, 0.9) 100%), url(<?php echo wp_get_attachment_image_src(get_field('post_previous_festivals_background_image'), 'full')[0] ?>);   background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;">


    <section class="previous-festival-info previous-festivals-content__top-section">
        <div class="row">
            <h2 class="section-header section-header__bigger more-padding-bottom top-header-padding text-center text-color-light">
                <?php esc_html_e(get_field('post_previous_festivals_dates_of_the_festival'), 'satiksanos-saulkrastos') ?>
            </h2>
            <h2 class="section-header section-header__bigger more-padding-bottom text-center text-color-light m-top-n7">
                <?php esc_html_e(get_field('history_year_of_archive'), 'satiksanos-saulkrastos') ?>
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

    <div class="col-md-10 text-long text-color-darkest offset-md-2 prev-text">
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


    <section class="history-page-past-artists-and-concerts" style=<?php setBackgroundImage(true, null, 'post_previous_the_year_artists_section_background_image', null, true)?>>
      
    <div class="row">

    <div class=" history-page-past-artists">

            <h4 class="section-header section-header--dark text-color-black  text-center"><?php esc_html_e(get_field('post_previous_this_year_artists_section_heading'), 'satiksanos-saulkrastos') ?></h4>
            

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

        <h4 class="section-header text-color-black  text-center"><?php esc_html_e(get_field('post_previous_this_year_concerts_heading'), 'satiksanos-saulkrastos') ?></h4>

        <?php $upcoming_concerts = past_and_this_year_concerts_query(100);
                        if ($upcoming_concerts->have_posts()) : while ($upcoming_concerts->have_posts()) : $upcoming_concerts->the_post();

                        $date_and_month = explode(' ', get_field('post_concerts_concert_date'));
                        $current_year = date("Y");

                        
                        if( $date_and_month[2] == $historyOfArchive) :
                        ?>


<a class="text-color-darkest sidebar-links" href="<?php echo the_permalink(); ?>">
                                <div class="sidebar-concert__card-container"> 
                                    <div class="sidebar-concert__date">
                                        <h4 class="mb-0 text-small text-color-light"><?php esc_html_e($date_and_month[1], 'satiksanos-saulkrastos') ?></h4>
                                        <h4 class="mb-0 text-small text-color-light"> <?php esc_html_e($date_and_month[0], 'satiksanos-saulkrastos') ?></h4>
                                        <h4 class="text-small text-color-light mb-0"> <?php esc_html_e($date_and_month[2], 'satiksanos-saulkrastos') ?></h4>
                                        <?php if ($date_and_month[2] === $current_year) : ?>
                                            <p class="text-color-brand-direct m-0 p-0"><?php esc_html_e($date_and_month[2], 'satiksanos-saulkrastos') ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="sidebar-concert__title">
                                        <h3 class="text-md-small"> 

                                                <?php esc_html_e(get_field('post_concerts_program_name'), 'satiksanos-saulkrastos') ?>
                                            
                                        </h3>
                                    </div>
                                </div>
                                </a>
                        <?php endif; endwhile;
                            wp_reset_postdata();
                        endif; ?>
                </div>

    </div><!-- .row -->

    </section>




</main>

<?php get_footer(); ?>