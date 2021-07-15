<?php

/* 
* Template Name: Concerts
*/

get_header();

if (have_posts()) : while (have_posts()) : the_post(); ?>


        <main class="upcoming-concerts full-screen-cover" style=<?php setBackgroundImage(true, null, 'page_concerts_background_image', 7, true) ?>>

            <h4 class="section-header text-color-light padding-from-nav text-center"><?php esc_html_e(get_field('page_concerts_section_label', 7), 'satiksanos-saulkrastos') ?></h4>

            <?php satiksanos_saulkrastos_upcoming_concerts(10) ?>

        </main>
<?php endwhile;
endif; ?>



<?php get_footer(); ?>