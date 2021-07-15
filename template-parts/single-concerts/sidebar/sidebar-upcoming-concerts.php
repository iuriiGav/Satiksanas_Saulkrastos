<div class="main-sidebar-sticky">
    <h4 class="section-header section-header__smaller text-center text-color-light mb-5">
        <?php esc_html_e(get_field('page_news_upcoming_concerts_title_on_sidebar', get_option('page_for_posts')), 'satiksanos-saulkrastos') ?>
    </h4>
    <?php $upcoming_concerts = upcoming_concerts_query(10);
    $current_single_concert = get_field('post_concerts_program_name');

    if ($upcoming_concerts->have_posts()) : while ($upcoming_concerts->have_posts()) : $upcoming_concerts->the_post();

            if (get_field('post_concerts_program_name') !== $current_single_concert) :
                $date_and_month = explode(' ', get_field('post_concerts_concert_date'));
                $current_year = date("Y");
    ?>


                <a class="text-color-darkest sidebar-links" href="<?php echo the_permalink(); ?>">
                    <div class="sidebar-concert__card-container">
                        <div class="sidebar-concert__date">
                            <h4 class="text-small text-color-light"><?php esc_html_e($date_and_month[1], 'satiksanos-saulkrastos') ?></h4>
                            <h4 class="text-small text-color-light"> <?php esc_html_e($date_and_month[0], 'satiksanos-saulkrastos') ?></h4>
                            <h4 class="text-small text-color-light"> <?php esc_html_e($date_and_month[2], 'satiksanos-saulkrastos') ?></h4>

                        </div>
                        <div class="sidebar-concert__title">
                            <h3 class="text-md-small">

                                <?php esc_html_e(get_field('post_concerts_program_name'), 'satiksanos-saulkrastos') ?>

                            </h3>
                        </div>
                    </div>
                </a>
    <?php endif;
        endwhile;
        wp_reset_postdata();
    endif; ?>
</div>