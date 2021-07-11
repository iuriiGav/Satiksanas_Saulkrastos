<?php



function getAllArtists($yearOfParticipationCondition, $yearOfParticipationValue, $isDisplayText)
{
    $args = array(

        'post_type' => 'artists',
        'posts_per_page' => 100,
        'order' => 'ASC',
        'orderby' => 'title',

    );


    $current_artists = new WP_Query($args); ?>


    <div class="gallery-wrapper">

        <?php if ($current_artists->have_posts()) : while ($current_artists->have_posts()) : $current_artists->the_post(); ?>

                <?php if (get_field($yearOfParticipationCondition) === $yearOfParticipationValue) : ?>
                    <?php
                    $artist_id = get_the_id();
                    ?>



                    <div class="gallery-container">
                        <div class="gallery-item">
                            <div class="image">
                                <a href="<?php echo esc_url(get_permalink()) ?>">

                                    <img class="position-relative img-<?php echo 'some-unic-id' ?>" src="<?php echo esc_url(get_the_post_thumbnail_url($artist_id, 'full')) ?>" alt="<?php esc_html_e(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE), 'satiksanos-saulkrastos') ?>">

                                    <?php if ($isDisplayText) : ?>
                                        <div class="artist-name text-center text-color-light d-flex justify-content-center">
                                            <h3 class="name text-font-secondary text-heavy text-md-small"><?php esc_html_e(get_the_title($artist_id), 'satiksanos-saulkrastos') ?></h3>
                                            <?php if (!empty(get_field('post_artist_artist_instrument'))) : ?>
                                                <p class="instrument text-color-brand-direct text-small">(<?php esc_html_e(get_field('post_artist_artist_instrument'), 'satiksanos-saulkrastos') ?>)</p>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </a>
                            </div>
                        </div>
                    </div>



                <?php endif; ?>
    <?php endwhile;
            wp_reset_postdata();
        endif;
    } ?>
    </div><!-- .gallery-wrapper -->