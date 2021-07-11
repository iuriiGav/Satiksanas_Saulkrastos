<?php

include 'queries/upcomingConcertQuery.php';


function satiksanos_saulkrastos_upcoming_concerts($number)
{

    $upcoming_concerts = upcoming_concerts_query($number) ?>









    <?php if (!is_front_page()) : ?>


        <div class="page-concerts-concert-box">
            <div class="d-flex flex-wrap card-parent-n-cild">
                <?php if ($upcoming_concerts->have_posts()) : while ($upcoming_concerts->have_posts()) : $upcoming_concerts->the_post(); ?>

                        <div class="card card-medium">
                            <?php
                            $concertDate = get_field('post_concerts_concert_date');
                            $dateString = explode(' ', $concertDate);
                            $newdate = $dateString[0] . ' ' . $dateString[1];
                            $venue_id = get_field('venue_via_post_object_id');
                            $concerts_venue = get_field('post_venues_group_venue', $venue_id);

                            ?>
                            <div class="concert-date-time-wrap">


                                <div class="page-concert-date-month smallest-text-heavy smallest-text-heavy--border-bottom  ">

                                    <?php echo esc_html_e($newdate, 'satiksanos-saulkrastos') ?>
                                </div>
                                <div class="page-concerts-time text-time">
                                    <?php echo esc_html_e(get_field('post_concerts_concert_time'), 'satiksanos-saulkrastos') ?>
                                </div>
                            </div>

                            <img src="<?php the_post_thumbnail_url('full') ?>" class="card-img-top" alt="<?php esc_html_e(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE), 'satiksanos-saulkrastos') ?>">
                            <div class="card-body">
                                <a href="<?php echo the_permalink() ?> " class="text-color-darkest">
                                    <h5 class="card-title text-title"><?php esc_html_e(get_field('post_concerts_program_name'), 'satiksanos-saulkrastos') ?> </h5>
                                </a>
                                <p class="card-text text-note"><?php esc_html_e($concerts_venue['post_venue_venue_name'], 'satiksanos-saulkrastos') ?></p>
                                <p class="card-text text-description"><?php esc_html_e(get_field('post_concerts_program_description_excerpt'), 'satiksanos-saulkrastos') ?></p>

                                <?php $is_free_concert = get_field('post_concerts_is_this_a_free_concert');
                                $free_concert_text = get_field('post_concerts_free_concert_button_label', 7);
                                $get_ticket = get_field('post_concerts_get_ticket_button_label', 7);
                                $read_more = get_field('post_concerts_read_more_button_label', 7);

                                ?>

                                <div class="page-concerts-btns-wrapper d-flex justify-content-between">

                                    <a href="<?php echo esc_url(get_field('page_concerts_link_to_ticket_sale')) ?>" class="btn btn-important-ig <?php echo ($is_free_concert === 'free_concert') ? 'text-color-light disabled' : 'text-color-brand-direct' ?>"> <?php echo (get_field('post_concerts_is_this_a_free_concert') === 'paid_concert') ? "$get_ticket" : "$free_concert_text" ?> </a>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-no-border"> <?php echo $read_more ?> </a>

                                </div>

                            </div>
                        </div><!-- .card .card-medium" -->




                <?php endwhile;
                    wp_reset_postdata();
                endif; ?>



            </div>


        </div>

    <?php endif; ?>
    <!-- .if is front page -->






    <?php if (is_front_page()) : ?>
        <?php if ($upcoming_concerts->have_posts()) : while ($upcoming_concerts->have_posts()) : $upcoming_concerts->the_post(); ?>


                <?php

                //split date in two parts to follow the given design with month and date o different lines
                $date_and_month = explode(' ', get_field('post_concerts_concert_date'));
                $concerts_count = $upcoming_concerts->found_posts;
                $venue_id = get_field('venue_via_post_object_id');
                $concerts_venue = get_field('post_venues_group_venue', $venue_id);


                ?>
                <div class="concert-card mb-5 concert-card__long align-content-center justify-content-around">
                    <div class="row flex-wrap align-items-center  w-100">
                        <div class="col-md-2 col-6 concert-date">
                            <h4 class="date-number"><?php esc_html_e($date_and_month[1], 'satiksanos-saulkrastos') ?></h4>
                            <h5 class="date-month"><?php esc_html_e($date_and_month[0], 'satiksanos-saulkrastos') ?></h5>
                            <P class="date-year text-note text-color-brand-direct">(<?php esc_html_e($date_and_month[2], 'satiksanos-saulkrastos') ?>)</P>
                        </div>
                        <div class="col-md-4 text-center d-flex order-3 order-md-2   justify-content-center concert-program">
                            <p class="mb-0"><?php esc_html_e(get_field('post_concerts_program_name'), 'satiksanos-saulkrastos') ?></p>
                        </div>
                        <div class="col-md-1 col-6 order-2 order-md-3 d-flex justify-content-center concert-time">
                            <h3 class="mb-0"><?php echo esc_html_e(get_field('post_concerts_concert_time'), 'satiksanos-saulkrastos') ?></h3>
                        </div>

                        <div class="col-md-3 d-flex order-4 justify-content-center concert-venue">
                            <p class="mb-0  concert-venue"><?php esc_html_e($concerts_venue['post_venue_venue_name'], 'satiksanos-saulkrastos') ?></p>
                        </div>
                        <div class="col-md-2 d-flex order-5 justify-content-center concert-action-btn">
                            <a href="<?php the_permalink(); ?>" class="btn btn-important-ig text-color-brand-direct"> Read more</a>
                        </div>
                    </div>
                </div>



        <?php endwhile;
            wp_reset_postdata();
        endif; ?>


    <?php endif; ?>



    <!-- <div class="news-page-paggination-container">
            <div>
                <?php
                previous_posts_link();

                ?>
            </div>
            <div>
                <?php
                next_posts_link('Show more', $upcoming_concerts->max_num_pages);

                ?>
            </div>

        </div> -->



    <!-- <?php if ($upcoming_concerts->have_posts() && is_front_page()) : ?>
        <div class="upcoming-concerts__btn-container">
            <a class="btn-large-dark" href="<?php echo esc_url(get_page_link(124)) ?>#past-concerts"><?php esc_html_e(get_field('concerts_previous_concerts_label', 124), 'sophie-lucke-website') ?> </a>
            <a class="btn-large-gold" href="<?php echo esc_url(get_page_link(124)) ?>"><?php esc_html_e(get_field('concerts_see_all_concerts_button_label', 124), 'sophie-lucke-website') ?></a>
        </div>
    <?php endif; ?> -->



    <?php if ($concerts_count > $number) :   ?>



        <div class="see-more-container d-flex">
            <?php if ($concerts_count - $number === 1) : ?>
                <h5 class="more-concerts">& <?php echo ($concerts_count - $number) ?><?php echo ' ' ?><?php esc_html_e(get_field('homepage_upcoming_concerts_see_more_text_singular'), 'satiksanos-saulkrastos') ?></h5>
            <?php else : ?>

                <h5 class="more-concerts">& <?php echo ($concerts_count - $number) ?><?php echo ' ' ?><?php esc_html_e(get_field('homepage_upcoming_concerts_see_more_text'), 'satiksanos-saulkrastos') ?></h5>

            <?php endif; ?>


            <?php $concerts_page = get_pages(array(
                //get the id of the page that uses concert template
                'meta_key' => '_wp_page_template',
                'meta_value' => 'page-concerts.php'
            ));
            foreach ($concerts_page as $page) {
                $concert_page_id = $page->ID;
            }
            ?>
            <button class="btn btn-primary-ig btn-primary-ig--long "><a class="text-color-darkest" href="<?php echo get_page_link($concert_page_id) ?>"><?php esc_html_e(get_field('homepage_upcoming_concerts_see_more_button_text'), 'satiksanos-saulkrastos') ?></a></button>
        </div>

    <?php endif; ?>
    <!-- end of if($concerts_count > $number) -->

<?php } ?>