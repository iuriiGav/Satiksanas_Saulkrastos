<div class="col-xl-8 col-md-7  article-container">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE); ?>" class="img-fluid single-concert-thumb">
    <div class="article-content single-news-text">
        <?php the_content(); ?>
    </div>
</div>