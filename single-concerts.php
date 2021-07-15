<?php
get_header();
if (have_posts()) : while (have_posts()) : the_post();
?>


        <main class="concert-single full-screen-cover" style=<?php setBackgroundImage(true, null, 'page_concerts_background_image_for_single_concert_post', 7, true) ?>>

            <h4 class="padding-from-nav px-5 mb-5 text-color-light section-header text-center">
                <?php esc_html_e(get_field('post_concerts_program_name'), 'satiksanos-saulkrastos') ?>
            </h4>
            <div class="row single-concert-content">
                <div class="col-xl-8 col-md-7 single-concert-pic-and-details-container">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid single-concert-thumb">
                    <div class="concert-details-card">

                        <div class="row date-and-venue">
                            <?php
                            get_template_part('template-parts/single-concerts/section', 'concert-date');
                            get_template_part('template-parts/single-concerts/section', 'concert-venue')
                            ?>
                        </div>

                        <div class="row single-concert-program-and-artists">
                            <?php get_template_part('template-parts/single-concerts/section', 'program');
                            get_template_part('template-parts/single-concerts/section', 'performers') ?>
                        </div>
                        <? get_template_part('template-parts/single-concerts/section', 'program-description') ?>
                        <? get_template_part('template-parts/single-concerts/section', 'ticket') ?>



                    </div><!-- .concert-details-card -->
                </div><!-- .single-concert-pic-and-details-container -->



                <div class="col-xl-4 col-md-5 main-sidebar-container main-sidebar-container--padding-right-10">
                    <div class="main-sidebar-content ">
                        <? get_template_part('template-parts/single-concerts/sidebar/sidebar', 'upcoming-concerts') ?>
                        <? get_template_part('template-parts/single-concerts/sidebar/sidebar', 'news') ?>


                    </div>
                </div>
            </div>





        </main>

<?php endwhile;
endif; ?>


<?php get_footer(); ?>