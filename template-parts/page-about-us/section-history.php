<section class="history-of-festival p-5 full-screen-cover" style=<?php setBackgroundImage(false, 'linear-gradient(180deg, #1F2526 0%, rgba(196, 196, 196, 0) 100%)', 'about_us_section_3_background_image', null, true) ?>>
    <h2 class="section-header section-header--light text-center mb-5">
        <?php esc_html_e(get_field('about_us_history_section_heading'), 'satiksanos-saulkrastos') ?>
    </h2>


    <?php
    $args = array(

        'post_type' => 'pastfestivals',
        'posts_per_page' => 10,
        'meta_key' => 'history_year_of_archive',
        'orderby'  => 'meta_value',
        'order'    => 'DESC'

    );


    $history_entry = new WP_Query($args); ?> ?>

    <div class="row">
        <?php if ($history_entry->have_posts()) : while ($history_entry->have_posts()) : $history_entry->the_post(); ?>

                <?php

                ?>


                <div class="col-lg-3 col-md-6 col-12">
                    <a class="sidebar-links" href="<?php echo get_permalink() ?>">
                        <div class="card card-history">
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'blog')) ?>" class="card-img-top" alt="<?php esc_html_e(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE), 'satiksanos-saulkrastos') ?>">
                            <div class="card-body">
                                <p class="card-text text-color-darkest large-info-num text-center p-3"><?php esc_html_e(get_field('history_year_of_archive', get_the_ID()), 'satiksanos-saulkrastos') ?></p>
                            </div>
                        </div>
                    </a>
                </div>


        <?php endwhile;
            wp_reset_postdata();
        endif; ?>
    </div>

</section>