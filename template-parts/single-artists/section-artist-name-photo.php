<h1 class="artist-name-title artist-name-title--mobile text-color-light text-font-secondary text-xxl ">
    <?php the_title() ?>
    <?php if (!empty(get_field('post_artist_artist_instrument'))) : ?>
        <span class="instrument">(<?php esc_html_e(get_field('post_artist_artist_instrument'), 'satiksanos-saulkrastos') ?>)</span>
    <?php endif; ?>
</h1>


<img class="img-fluid artist-image" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0] ?>">