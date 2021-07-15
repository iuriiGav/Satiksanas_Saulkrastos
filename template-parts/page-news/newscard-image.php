<div class="news-image-container">

    <a href="<?php echo get_permalink() ?>">
        <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'square')) ?>" class="card-img-top" alt="<?php esc_html_e(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE), 'satiksanos-saulkrastos') ?>">
    </a>

</div>