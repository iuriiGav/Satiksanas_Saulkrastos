<?php
$upcoming_concerts_array = $args['upcoming_concerts_array'];
$artist_ID = $args['artist_ID'];

foreach ($upcoming_concerts_array as $concert_ID) :
    $this_concert_artists = get_field('post_concerts_artists_object', $concert_ID);

    if (in_array($artist_ID, $this_concert_artists)) :
        $date_and_month = explode(' ', get_field('post_concerts_concert_date', $concert_ID));
?>

        <a class="text-color-darkest sidebar-links" href="<?php echo the_permalink($concert_ID); ?>">
            <div class="sidebar-concert__card-container concert-exists-unique-class-for-js-only">
                <div class="sidebar-concert__date">
                    <h4 class="text-small text-color-light"><?php esc_html_e($date_and_month[1], 'satiksanos-saulkrastos') ?></h4>
                    <h4 class="text-small text-color-light"> <?php esc_html_e($date_and_month[0], 'satiksanos-saulkrastos') ?></h4>
                    <p class="text-color-brand-direct text-small m-0 p-0"><?php esc_html_e($date_and_month[2], 'satiksanos-saulkrastos') ?></p>
                </div>
                <div class="sidebar-concert__title">
                    <h3 class="text-md-small">

                        <?php esc_html_e(get_field('post_concerts_program_name', $concert_ID), 'satiksanos-saulkrastos') ?>
                    </h3>
                </div>
            </div>
        </a>



<?php

    endif;
endforeach;

?>