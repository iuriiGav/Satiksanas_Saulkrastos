<?php

/* 
* Template Name: Concerts
*/

get_header();

$concerts_page_ID = ig_get_page_ID_by_template_name('page-concerts')[0];


if (have_posts()) : while (have_posts()) : the_post(); ?>


        <main class="upcoming-concerts full-screen-cover" style=<?php setBackgroundImage(true, null, 'page_concerts_background_image', $concerts_page_ID, true) ?>>

            <h4 class="section-header text-color-light padding-from-nav text-center"><?php esc_html_e(get_field('page_concerts_section_label', $concerts_page_ID), 'satiksanos-saulkrastos') ?></h4>

            <?php satiksanos_saulkrastos_upcoming_concerts(10) ?>

        </main>
<?php endwhile;
endif; ?>



<?php get_footer(); ?>