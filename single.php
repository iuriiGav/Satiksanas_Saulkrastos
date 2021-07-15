<?php
include 'inc/queries/upcomingConcertQuery.php';
include 'inc/helpers_functions.php';
// include 'inc/backgorundImageAndGradient.php';
get_header(); ?>
<?php while (have_posts()) : the_post();
    $current_single_concert = get_field('post_concerts_program_name');
    $news_page_id = get_option('page_for_posts');
?>


    <main class="concert-single" style=<?php setBackgroundImage(true, null, 'page_news_background_image', $news_page_id, true) ?>>

        <h4 class="padding-from-nav px-5 mb-5 text-color-light section-header text-center">
            <?php the_title(); ?>
        </h4>
        <div class="row article-wrapper ">
            <div class="col-xl-8 col-md-7  article-container">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE); ?>" class="img-fluid single-concert-thumb">
                <div class="article-content single-news-text">
                    <?php the_content(); ?>
                </div><!-- .article-content -->
            </div><!-- . article-container -->
            <div class="col-xl-4 col-md-5 main-sidebar-container main-sidebar-container--padding-right-10">
                <div class="main-sidebar-content ">
                    <div class="main-sidebar-sticky">
                        <h4 class="section-header section-header__smaller text-center text-color-light mb-5"><?php esc_html_e(get_field('page_news_upcoming_concerts_title_on_sidebar', $news_page_id), 'satiksanos-saulkrastos') ?></h4>
                        <?php $upcoming_concerts = upcoming_concerts_query(3);
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
                                                <?php if ($date_and_month[2] > $current_year) : ?>
                                                    <p class="text-color-brand-direct m-0 p-0"><?php esc_html_e($date_and_month[2], 'satiksanos-saulkrastos') ?></p>
                                                <?php endif; ?>
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


                    <h4 class="section-header section-header__smaller text-center text-color-light mb-5"><?php esc_html_e(get_field('page_news_more_news_title_on_sidebar', $news_page_id), 'satiksanos-saulkrastos') ?></h4>

                    <?php

                    $news = get_posts();


                    foreach ($news as $article) :

                    ?>
                                <a class="text-color-darkest sidebar-links" href="<?php echo esc_url($article->guid); ?>">

                        <div class="sidebar-concert__card-container sidebar-concert__card-container--col p-3">

                            <p class="news-pusblish-date text-small"><?php echo get_the_date('', $article->ID); ?></p>
                            <h3 class="text-md-small">
                                    <?php esc_html_e($article->post_title, 'satiksanos-saulkrastos') ?>
                            </h3>



                        </div>
                        </a>


                    <?php
                    endforeach
                    ?>

                </div>
            </div>
        </div>





    </main>

<?php endwhile; ?>


<?php get_footer(); ?>