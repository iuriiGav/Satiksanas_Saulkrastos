<?php 

/* 
* Template Name: Concerts
*/

get_header(); 
include 'inc/getAllConcerts.php';


?>
<?php while(have_posts()): the_post(); ?>

<main class="upcoming-concerts" style="background:  linear-gradient(180deg, #2C2929 0%, rgba(142, 140, 140, 0.72) 100%), url(<?php echo wp_get_attachment_image_src(get_field('page_concerts_background_image', 7), 'full')[0] ?>);   
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;">

<h4 class="section-header text-color-light padding-from-nav text-center"><?php esc_html_e(get_field('page_concerts_section_label', 7), 'satiksanos-saulkrastos') ?></h4>

<?php satiksanos_saulkrastos_upcoming_concerts(10,  null, null, null, null) ?>

</main>
<?php endwhile; ?>



<?php get_footer(); ?>