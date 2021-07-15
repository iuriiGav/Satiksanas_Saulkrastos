<style>
    .hero {
        background-image: linear-gradient(180deg, #1F2526 0%, rgba(196, 196, 196, .3) 30%), url(<?php echo get_the_post_thumbnail_url(null, 'mediumCover') ?>);
    }
</style>

<section class="hero">
    <h2 class="fest-date text-lg-thin">
        <?php esc_html_e(get_field('homepage_festival_dates'), 'satiksanos-saulkrastos') ?>
    </h2>
</section>