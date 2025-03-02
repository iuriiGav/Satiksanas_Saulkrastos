<?php 
$concerts_page_ID = ig_get_page_ID_by_template_name('page-concerts')[0];
?>

<div class="col-md-5 single-concert-program-and-artists--artists">

    <h4 class="single-concert-program-and-artists--title">
        <?php esc_html_e(get_field('page_concerts_artists_label', $concerts_page_ID), 'satiksanos-saulkrastos') ?>
    </h4>

    <?php
    $select_artists = get_field('post_concerts_artists_object');

    if (!empty($select_artists)) :
        foreach ($select_artists as $artist) : ?>
            <p class="single-concert-program-and-artists--artist-name">
                <a href="<?php echo get_permalink($artist) ?>">
                    <?php esc_html_e(get_the_title($artist), 'satiksanos-saulkrastos') ?>
                </a>
            </p>

    <?php endforeach;
    endif;
    ?>


</div>