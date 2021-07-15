<div class="col-md-6 artist-bio text-long text-long--normal">
    <h1 class="artist-name-title artist-name-title--desctop text-color-darkest text-font-secondary text-md-lg text-medium ">
        <?php the_title() ?>
        <?php if (!empty(get_field('post_artist_artist_instrument'))) : ?>
            <span class="instrument">(<?php esc_html_e(get_field('post_artist_artist_instrument'), 'satiksanos-saulkrastos') ?>)</span>
        <?php endif; ?>
    </h1>
    <?php echo the_content(); ?>
</div>