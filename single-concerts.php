<?php
include 'inc/backgorundImageAndGradient.php';
include 'inc/queries/upcomingConcertQuery.php';
get_header(); ?>
<?php while (have_posts()) : the_post(); 
$current_single_concert = get_field('post_concerts_program_name');
?>

    <main class="concert-single" style="background: linear-gradient(180deg, #2C2929 0%, rgba(142, 140, 140, 0.72) 100%), url(<?php echo wp_get_attachment_image_src(get_field('page_concerts_background_image_for_single_concert_post', 7), 'full')[0] ?> );   background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed; ">

        <h4 class="padding-from-nav px-5 mb-5 text-color-light section-header text-center">
             <?php esc_html_e(get_field('post_concerts_program_name'), 'satiksanos-saulkrastos') ?> 
        </h4>
        <div class="row single-concert-content">
            <div class="col-xl-8 col-md-7 single-concert-pic-and-details-container">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid single-concert-thumb">
                <div class="concert-details-card">

                    <div class="date-and-venue row">
                        <div class="col-md-7 single-concert-date">


                            <?php $date_and_month = explode(' ', get_field('post_concerts_concert_date')); ?>
                            <h4 class="single-concert-date--date-month"><?php echo $date_and_month[1], " ", $date_and_month[0], ',', '&nbsp;' ?></h4>
                            <p class="single-concert-date--year"><?php echo ' ', $date_and_month[2], ' ', '@' ?></p>
                            <p class="single-concert-date--time"><?php echo '&nbsp;', esc_html_e(get_field('post_concerts_concert_time'), 'satiksanos-saulkrastos') ?></p>
                        </div>

                        <div class="single-concert-venue col-md-5">


                            <?php $venue = get_field('post_concerts_concert_venue'); ?>
                            <h5 class="single-concert-venue--venue-name"><?php esc_html_e($venue['post_concerts_venue_name'], 'satiksanos-saulkrastos') ?></h5>

                            <p class="single-concert-venue--address"><?php esc_html_e($venue['post_concerts_venue_address'], 'satiksanos-saulkrastos') ?></p>
                            <p class="single-concert-venue--address"><?php esc_html_e($venue['post_concerts_venue_postcode'], 'satiksanos-saulkrastos') ?></p>
                        </div>
                    </div>




                    <div class="row single-concert-program-and-artists">

                        <div class="col-md-7 single-concert-program-and-artists--program">

                            <h4 class="single-concert-program-and-artists--title"><?php esc_html_e(get_field('page_concerts_program_label', 7), 'satiksanos-saulkrastos') ?></h4>

                            <?php if (have_rows('post_concerts_program_composer_and_piece')) : while (have_rows('post_concerts_program_composer_and_piece')) : the_row();

                                    // Load sub field value.
                                    $composer = get_sub_field('composer');
                                    $note = get_sub_field('optional_note');
                                    $piece = get_sub_field('piece');
                                    // Do something...
                            ?>
                                    <div class="single-concert-program-and-artists--piece-and-composer-wrapper">
                                        <h5 class="single-concert-program-and-artists--composer"> <?php echo esc_html_e($composer, 'satiksanos-saulkrastos') ?> <?php if ($note) : ?> <span class="single-concert-program-and-artists--note"><?php echo esc_html_e($note, 'satiksanos-saulkrastos') ?> </span> <?php endif; ?></h5>

                                        <p class="single-concert-program-and-artists--piece"> <?php echo esc_html_e($piece, 'satiksanos-saulkrastos') ?> </p>

                                    </div>


                            <?php endwhile;
                            endif; ?>
                        </div>

                        <!-- post_concerts_artists -->
                        <div class="col-md-5 single-concert-program-and-artists--artists">

                            <h4 class="single-concert-program-and-artists--title"><?php esc_html_e(get_field('page_concerts_artists_label', 7), 'satiksanos-saulkrastos') ?></h4>

                            <?php
                            $select_artists = get_field_object('post_concerts_artists')['value'];
                           

                            foreach ($select_artists as $artist) : ?>
                                <p class="single-concert-program-and-artists--artist-name"><?php esc_html_e($artist, 'satiksanos-saulkrastos') ?></p>

                            <?php endforeach  ?>


                        </div>
                    </div><!-- . single-concert-program-and-artists -->
                    <h4 class="single-concert-program-and-artists--title mt-5"><?php esc_html_e(get_field('page_concerts_about_the_concert_label', 7), 'satiksanos-saulkrastos') ?></h4>

                    <div class="single-concert-program-description">
                        <?php echo wp_kses_post(wpautop(get_field('post_concerts_program_description'))) ?>

                    </div>

                    <?php $is_free_concert = get_field('post_concerts_is_this_a_free_concert');
                                $free_concert_text = get_field('post_concerts_free_concert_button_label', 7);
                                $get_ticket = get_field('post_concerts_get_ticket_button_label', 7);

                                ?>

                    <div class="get-ticket-btn-container mt-5">
                    <a href="<?php echo esc_url(get_field('page_concerts_link_to_ticket_sale')) ?>" class="btn btn-important-ig <?php echo ($is_free_concert === 'free_concert') ? 'text-color-light disabled' : 'text-color-brand-direct' ?>"> <?php echo (get_field('post_concerts_is_this_a_free_concert') === 'paid_concert') ? "$get_ticket" : "$free_concert_text" ?> </a>

                    </div>
                </div><!-- .concert-details-card -->
            </div><!-- .single-concert-pic-and-details-container -->
            <div class="col-xl-4 col-md-5 main-sidebar-container main-sidebar-container--padding-right-10">
                <div class="main-sidebar-content ">
                    <div class="main-sidebar-sticky">
                        <h4 class="section-header section-header__smaller text-center text-color-light mb-5">More concerts</h4>
                        <?php $upcoming_concerts = upcoming_concerts_query(3);
                        if ($upcoming_concerts->have_posts()) : while ($upcoming_concerts->have_posts()) : $upcoming_concerts->the_post();

                                    if(get_field('post_concerts_program_name') !== $current_single_concert) :
                                $date_and_month = explode(' ', get_field('post_concerts_concert_date'));
                                $current_year = date("Y");
                        ?>



                                <div class="sidebar-concert__card-container">
                                    <div class="sidebar-concert__date">
                                        <h4><?php esc_html_e($date_and_month[1], 'satiksanos-saulkrastos') ?></h4>
                                        <h4> <?php esc_html_e($date_and_month[0], 'satiksanos-saulkrastos') ?></h4>
                                        <?php if ($date_and_month[2] > $current_year) : ?>
                                            <p class="text-color-brand-direct m-0 p-0"><?php esc_html_e($date_and_month[2], 'satiksanos-saulkrastos') ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="sidebar-concert__title">
                                        <h3> <a class="text-color-darkest sidebar-links" href="<?php echo the_permalink(); ?>">

                                                <?php esc_html_e(get_field('post_concerts_program_name'), 'satiksanos-saulkrastos') ?>
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                        <?php endif; endwhile;
                            wp_reset_postdata();
                        endif; ?>
                    </div>
                    <h4 class="section-header section-header__smaller text-center text-color-light mb-5"><?php esc_html_e(get_field('page_news_more_news_title_on_sidebar', get_option('page_for_posts')), 'satiksanos-saulkrastos') ?></h4>

<?php

$news = get_posts();


foreach ($news as $article) :

?>

<?php  ?>
    <div class="sidebar-concert__card-container sidebar-concert__card-container--col p-3">
 
        <p class="news-pusblish-date"><?php echo get_the_date('', $article->ID); ?></p>
        <h3> 
            <a class="text-color-darkest sidebar-links" href="<?php echo esc_url($article->guid); ?>">
                <?php esc_html_e($article->post_title, 'satiksanos-saulkrastos') ?>
            </a>
        </h3>

    

    </div>

<?php
endforeach
?>
                </div>
            </div>
        </div>





    </main>

<?php endwhile; ?>


<?php get_footer(); ?>