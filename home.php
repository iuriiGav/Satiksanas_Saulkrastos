<?php get_header();
$page_for_posts = get_option('page_for_posts');
?>

<main class="upcoming-concerts full-screen-cover" style=<?php setBackgroundImage(true, null, 'page_news_background_image', $page_for_posts, true) ?>>


    <h4 class="section-header text-color-light padding-from-nav text-center "><?php esc_html_e(get_field('page_news_page_title', $page_for_posts), 'satiksanos-saulkrastos') ?></h4>
    <div class="all-news-container">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="card-news">
                    <?php get_template_part('template-parts/page-news/newscard', 'image') ?>
                    <?php get_template_part('template-parts/page-news/newscard', 'body') ?>
                </div>
        <?php endwhile;
        endif; ?>
        <?php get_template_part('template-parts/page-news/prev-next-news-btns') ?>

    </div>

</main>

<?php get_footer(); ?>