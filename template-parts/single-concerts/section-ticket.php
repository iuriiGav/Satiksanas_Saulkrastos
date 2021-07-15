<?php
$is_free_concert = get_field('post_concerts_is_this_a_free_concert');
$free_concert_text = get_field('post_concerts_free_concert_button_label', 7);
$get_ticket = get_field('post_concerts_get_ticket_button_label', 7);
?>

<div class="get-ticket-btn-container mt-5">
    <a href="<?php echo esc_url(get_field('page_concerts_link_to_ticket_sale')) ?>" class="btn btn-important-ig <?php echo ($is_free_concert === 'free_concert') ? 'text-color-light disabled' : 'text-color-brand-direct' ?>">
        <?php echo (get_field('post_concerts_is_this_a_free_concert') === 'paid_concert') ? "$get_ticket" : "$free_concert_text" ?>
    </a>
</div>