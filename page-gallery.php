<?php 

/* 
* Template Name: Gallery
*/

get_header();
// include 'inc/backgorundImageAndGradient.php';
include 'inc/lightboxSquareGallery.php';
include 'inc/queries/upcomingConcertQuery.php';
?>

<?php while (have_posts()) : the_post(); ?>

    <main class="page-gallery-main full-screen-cover" style=<?php setBackgroundImage(true, null, 'page_gallery_background_image', null, true) ?>>
        <div class="row page-gallery-main-content-container">

            <h4 class="section-header text-color-light">
                <?php esc_html_e(get_field('page_gallery_page_title'), 'satiksanos-saulkrastos') ?>
            </h4>
            <div class="col-lg-8 px-2">
            

                <?php
                echo get_field('gallery_shortcode_from_modula')
                
                // lightboxSquareGallery(false, 'col-12', 'gallery-page', '4', get_the_id())  
                ?>

            </div>

            <div class="col-lg-4 gallery-sedebar-container">

                <div class="main-sidebar-content gallery-cancel-minheight">
                    <div class="main-sidebar-sticky">
                        <h4 class="section-headr section-header__smaller text-center text-color-light mb-5"><?php esc_html_e(get_field('page_gallery_upcoming_concerts_sidebar_label'), 'satiksanos-saulkrastos') ?></h4>
                        <?php $upcoming_concerts = upcoming_concerts_query(6);
                        if ($upcoming_concerts->have_posts()) : while ($upcoming_concerts->have_posts()) : $upcoming_concerts->the_post();

                                if (get_field('post_concerts_program_name') !== $current_single_concert) :
                                    $date_and_month = explode(' ', get_field('post_concerts_concert_date'));
                                    $current_year = date("Y");
                        ?>


<a class="text-color-darkest sidebar-links" href="<?php echo the_permalink(); ?>">
                                    <div class="sidebar-concert__card-container">
                                        <div class="sidebar-concert__date">
                                            <h4 class="text-small text-color-light"><?php esc_html_e($date_and_month[1], 'satiksanos-saulkrastos') ?></h4>
                                            <h4 class="mb-0 text-small text-color-light"> <?php esc_html_e($date_and_month[0], 'satiksanos-saulkrastos') ?></h4>
                                            <h4 class="date-year text-note text-color-brand-direct text-small"> <?php esc_html_e($date_and_month[2], 'satiksanos-saulkrastos') ?></h4>
                                            <?php if ($date_and_month[2] > $current_year) : ?>
                                                <p class="text-color-brand-direct  m-0 p-0"><?php esc_html_e($date_and_month[2], 'satiksanos-saulkrastos') ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="sidebar-concert__title ">
                                            <h3 class="text-md-small"> 

                                                    <?php esc_html_e(get_field('post_concerts_program_name'), 'satiksanos-saulkrastos') ?>
                                                
                                            </h3>
                                        </div>
                                    </div>
                                    </a>
                        <?php endif;
                            endwhile;
                            wp_reset_postdata();
                        endif; ?>
                    </div>

                </div>
            </div>
        </div>



    </main>

<?php endwhile; ?>

<?php get_footer(); ?>