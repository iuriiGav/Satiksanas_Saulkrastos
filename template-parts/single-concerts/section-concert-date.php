<?php $date_and_month = explode(' ', get_field('post_concerts_concert_date')); ?>

<div class="col-md-7 single-concert-date">
    <h4 class="single-concert-date--date-month"><?php echo $date_and_month[1], " ", $date_and_month[0], ',', '&nbsp;' ?></h4>
    <p class="single-concert-date--year"><?php echo ' ', $date_and_month[2], ' ', '@' ?></p>
    <p class="single-concert-date--time"><?php echo '&nbsp;', esc_html_e(get_field('post_concerts_concert_time'), 'satiksanos-saulkrastos') ?></p>
</div>