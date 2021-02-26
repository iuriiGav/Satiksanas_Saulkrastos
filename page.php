<?php get_header(); ?>


<h5 style='color: red; font-style: italic; margin-top: 500px'> <?php echo 'this is from ' . basename(__FILE__); ?></h5>


<?php while(have_posts()): the_post(); ?>
<?php echo the_content(); ?>
<?php endwhile; ?>
<?php get_footer(); ?>