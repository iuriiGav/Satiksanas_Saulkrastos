<?php

/* 
* Template Name: Gallery
*/

get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <main class="page-gallery-main full-screen-cover" style=<?php setBackgroundImage(true, null, 'page_gallery_background_image', null, true) ?>>
            <div class="row page-gallery-main-content-container">
                <h4 class="section-header text-color-light">
                    <?php esc_html_e(get_field('page_gallery_page_title'), 'satiksanos-saulkrastos') ?>
                </h4>
                <div class="col-lg-8 px-2">
                    <?php get_template_part('template-parts/page-gallery/section', 'gallery') ?>
                </div>
                <div class="col-lg-4 gallery-sedebar-container">
                    <?php get_template_part('template-parts/page-gallery/section', 'sidebar') ?>
                </div>
            </div>



        </main>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>