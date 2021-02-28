


<?php



function getArtistForPastFestival ($yearOfTheFestival, $isDisplayText ) {
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
             
             if( have_rows('post_artist_artist_participated_in_festival_during_these_years', $artist_id) ):

                // Loop through rows.
                while( have_rows('post_artist_artist_participated_in_festival_during_these_years', $artist_id) ) : the_row();
              
                $year_artist_participated_in_the_past = get_sub_field('year_of_participation');

        
           
                if($year_artist_participated_in_the_past === $yearOfTheFestival) :

              
             ?>



                    <div class="gallery-container">
                        <div class="gallery-item">
                            <div class="image">
                                <a href="<?php echo esc_url(get_permalink()) ?>">

                                    <img class="position-relative img-<?php echo 'some-unic-id' ?>" src="<?php echo esc_url(get_the_post_thumbnail_url($artist_id, 'square')) ?>" alt="<?php esc_html_e(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE), 'satiksanos-saulkrastos') ?>">
                                   
                                   <?php if($isDisplayText) : ?>
                                    <div class="artist-name text-center text-color-light d-flex justify-content-center">
                                        <h3 class="name text-font-secondary text-heavy text-small text-color-light"><?php esc_html_e(get_the_title($artist_id), 'satiksanos-saulkrastos') ?></h3>
                                        <!-- <p class="instrument text-color-brand-direct text-small">(<?php esc_html_e(get_field('post_artist_artist_instrument'), 'satiksanos-saulkrastos') ?>)</p> -->
                                    </div>
                                    <?php endif; ?>
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
    endif; }?>
    </div><!-- .gallery-wrapper -->