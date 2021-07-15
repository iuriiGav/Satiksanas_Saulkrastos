<?php get_header();
?>



<main class="previous-festivals-content" style="background: linear-gradient(180deg, rgba(117, 113, 112, 0.9) 0%, rgba(68, 65, 65, 0.9) 100%), url(<?php echo wp_get_attachment_image_src(get_field('post_previous_festivals_background_image'), 'full')[0] ?>);   background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;">


    <?php get_template_part('template-parts/previous-festivals/prev', 'text-stats'); ?>
    <?php get_template_part('template-parts/previous-festivals/prev', 'gallery'); ?>
    <?php get_template_part('template-parts/previous-festivals/prev', 'artsits-concerts'); ?>

    






</main>

<?php get_footer(); ?>