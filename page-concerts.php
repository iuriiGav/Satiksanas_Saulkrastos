<?php get_header(); 
include 'inc/getAllConcerts.php';


?>
<?php while(have_posts()): the_post(); ?>
<?php satiksanos_saulkrastos_upcoming_concerts(10,  null, null, null, null) ?>
<?php endwhile; ?>



<h5 style='color: red; font-style: italic;'> <?php echo 'this is from ' . basename(__FILE__); ?></h5>
<?php get_footer(); ?>