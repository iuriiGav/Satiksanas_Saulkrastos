<?php
function getUpcomingConcertsIDs()
{
    $upcoming_concerts_array = array();
    $upcoming_concerts = upcoming_concerts_query(100);
    if ($upcoming_concerts->have_posts()) : while ($upcoming_concerts->have_posts()) : $upcoming_concerts->the_post();
            array_push($upcoming_concerts_array, get_the_ID());
        endwhile;
        wp_reset_postdata();
    endif;

    return $upcoming_concerts_array;
}
