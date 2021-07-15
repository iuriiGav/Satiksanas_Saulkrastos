<?php
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();
        $current_single_concert = get_field('post_concerts_program_name');
        $news_page_id = get_option('page_for_posts');
?>


        <main class="concert-single" style=<?php setBackgroundImage(true, null, 'page_news_background_image', $news_page_id, true) ?>>

            <h4 class="padding-from-nav px-5 mb-5 text-color-light section-header text-center">
                <?php the_title(); ?>
            </h4>
            <div class="row article-wrapper ">
                <?php get_template_part('template-parts/single/article', 'img-and-content') ?>
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