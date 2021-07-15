<?php get_header();

/* 
* Template Name: About Festival
*/

include 'inc/lightboxSquareGallery.php';
// include 'inc/backgorundImageAndGradient.php';


?>

<main class="container-fluid about-us-page-wrapper full-screen-cover" style=<?php setBackgroundImage(false, 'linear-gradient(180deg, #1F2526 0%, rgba(196, 196, 196, 0) 100%)', 'about_us_section_1_background_image', null, true) ?>>


    <section class="festival-bio">

        <div class="row">

            <div class="col-lg-5  col-md-7 col-sm-12 order-3  festival-bio-text text-long text-long--medium">
                <p class=""><?php echo wp_kses_post(wpautop((get_field('about_us_long_text')))) ?></p>

            </div>
            <div class="col-lg-6 col-md-4 order-md-5">
                <h1 class="section-header section-header--light section-header--about-us">
                    <?php esc_html_e(get_field('about_us_page_heading'), 'satiksanos-saulkrastos') ?>

                </h1>
            </div>
        </div>
    </section>









    <section class="festival-about-gallery full-screen-cover" style=<?php setBackgroundImage(true, null, 'about_us_section_2_background_image', null, true) ?>>

        <h2 class="section-header section-header--light text-center mb-5">
            <?php esc_html_e(get_field('about_us_gallery_section_heading'), 'satiksanos-saulkrastos') ?>
        </h2>

        <div class="row">

            <?php
            echo get_field('about_us_gallery_shortcode_modula')
            ?>

        </div>


    </section>



    <section class="history-of-festival p-5 full-screen-cover" style=<?php setBackgroundImage(false, 'linear-gradient(180deg, #1F2526 0%, rgba(196, 196, 196, 0) 100%)', 'about_us_section_3_background_image', null, true) ?>>
        <h2 class="section-header section-header--light text-center mb-5">
            <?php esc_html_e(get_field('about_us_history_section_heading'), 'satiksanos-saulkrastos') ?>
        </h2>


        <?php
        $args = array(

            'post_type' => 'pastfestivals',
            'posts_per_page' => 10,
            'meta_key' => 'history_year_of_archive',
            'orderby'  => 'meta_value',
            'order'    => 'DESC'

        );


        $history_entry = new WP_Query($args); ?> ?>

        <div class="row">
            <?php if ($history_entry->have_posts()) : while ($history_entry->have_posts()) : $history_entry->the_post(); ?>

                    <?php

                    ?>


                    <div class="col-lg-3 col-md-6 col-12">
                        <a class="sidebar-links" href="<?php echo get_permalink() ?>">
                            <div class="card card-history">
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'blog')) ?>" class="card-img-top" alt="<?php esc_html_e(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE), 'satiksanos-saulkrastos') ?>">
                                <div class="card-body">



                                    <p class="card-text text-color-darkest large-info-num text-center p-3"><?php esc_html_e(get_field('history_year_of_archive', get_the_ID()), 'satiksanos-saulkrastos') ?></p>

                                </div>
                            </div>
                        </a>
                    </div>


            <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>

    </section>

</main>

<?php get_footer(); ?>