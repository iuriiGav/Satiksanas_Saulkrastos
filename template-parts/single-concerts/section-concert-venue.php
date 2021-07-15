<?php
$selected_venue = get_field('venue_via_post_object_id');
$venue = get_field('post_venues_group_venue', $selected_venue);
?>

<div class="single-concert-venue col-md-5">
    <h5 class="single-concert-venue--venue-name"><?php esc_html_e($venue['post_venue_venue_name'], 'satiksanos-saulkrastos') ?></h5>
    <p class="single-concert-venue--address"><?php esc_html_e($venue['post_venue_venue_address'], 'satiksanos-saulkrastos') ?></p>
    <p class="single-concert-venue--address"><?php esc_html_e($venue['post_venue_venue_address_line_2'], 'satiksanos-saulkrastos') ?></p>
    <p class="single-concert-venue--address"><?php esc_html_e($venue['post_venue_venue_postcode'], 'satiksanos-saulkrastos') ?></p>
</div>