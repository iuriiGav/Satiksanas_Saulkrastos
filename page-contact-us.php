<?php

/* 
* Template Name: Contact Us
*/

get_header(); 

// include 'inc/backgorundImageAndGradient.php'

?>

<?php while(have_posts()): the_post(); ?>

<main class="contact-us-page full-screen-cover" style=<?php setBackgroundImage(true, null, 'contact_us_page_background_image', null, true)?>>

<div class="row">

<div class="col-md-10 col-12 cform-wrapper">
    <h4 class="section-header text-color-light mb-5"> <?php esc_html_e(get_field('page_contact_us_contact_us_heading'), 'satiksanos-saulkrastos') ?> </h4>
<?php the_content(); ?>
</div>

</div>


</main>



<?php endwhile; ?>

<?php get_footer(); ?>