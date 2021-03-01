<?php



function satiksanos_saulkrastos_upcoming_concerts($number, $pageName, $textDate, $textTime, $textCity)
{

    $today = date('Ymd');


    $currentPage = get_query_var('paged');
    // $_SESSION['pagenum'] = $currentPage;

    $args = array(

        'post_type' => 'concerts',
        // 'posts_per_page' => $number,
        // 'paged' => $currentPage,
        // 'meta_query' => array(
        //     array(
        //         'key' => 'post_concerts_concert_date',
        //         'value' => $today,
        //         'type' => 'DATE',
        //         'compare' => '>='
        //     )
        // ),
        // 'meta_key' => 'post_concerts_concert_date',
        // 'orderby' => 'meta_value_num',
        // 'order' => 'DESC',
    );


    $upcoming_concerts = new WP_Query($args); ?>



    <?php

    if ($upcoming_concerts->have_posts()) : while ($upcoming_concerts->have_posts()) : $upcoming_concerts->the_post(); ?>

      <?php echo the_title() ?>




<div class="margin-from-nav page-concerts-concert-box">

</div>








    <?php endwhile;
        wp_reset_postdata();
    endif; ?>



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
<?php } ?>