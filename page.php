<?php get_header(); ?>




<?php while(have_posts()): the_post(); ?>
<?php echo the_content(); ?>
<?php endwhile; ?>
<?php get_footer(); ?>