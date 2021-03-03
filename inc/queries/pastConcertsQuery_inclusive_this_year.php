<?php 
function past_and_this_year_concerts_query ($number) {

    $today = date('Ymd');
    

    $currentPage = get_query_var('paged');
    // $_SESSION['pagenum'] = $currentPage;
    
    $args = array(
        
        'post_type' => 'concerts',
        'posts_per_page' => $number,
        // 'paged' => $currentPage,
        'meta_query' => array(
            array(
                'key' => 'post_concerts_concert_date',
                'value' => $today,
                'type' => 'DATE',
                'compare' => '<='
                )
            ),
            'meta_key' => 'post_concerts_concert_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
        );
        
        
        $past_and_this_year_concerts = new WP_Query($args); 
        
        return $past_and_this_year_concerts;
    }
