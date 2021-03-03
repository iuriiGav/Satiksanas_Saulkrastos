<?php

/* 
* Template Name: Contact Us
*/

get_header(); 

include 'inc/backgorundImageAndGradient.php'

?>

<?php while(have_posts()): the_post(); ?>

<main class="contact-us-page" style=<?php setBackgroundImage(true, null, 'contact_us_page_background_image', null)?>>

<div class="row">

<div class="col-md-10 col-12 cform-wrapper">
    <h4 class="section-header text-color-light mb-5">CONTACT US</h4>
<?php the_content(); ?>
</div>

</div>


</main>



<?php endwhile; ?>

<h5 style='color: red; font-style: italic;'> <?php echo 'this is from ' . basename(__FILE__); ?></h5>
<?php get_footer(); ?>