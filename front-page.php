<?php get_header();
include 'inc/getAllArtists.php';
if (have_posts()) : while (have_posts()) : the_post(); ?>

        <main id="front-page-ig">

            <?php get_template_part('template-parts/page-frontpage/section', 'hero') ?>
            <?php get_template_part('template-parts/page-frontpage/section', 'upcoming-concerts') ?>
            <?php get_template_part('template-parts/page-frontpage/section', 'about-us') ?>
            <?php get_template_part('template-parts/page-frontpage/section', 'artists') ?>
            <?php get_template_part('template-parts/page-frontpage/section', 'contact') ?>


        </main>

<?php endwhile;
endif;

get_footer();