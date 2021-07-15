<?php

$news = get_posts();

if (!empty($news)) : ?>

    <h4 class="section-header section-header__smaller text-center text-color-light mb-5">
        <?php esc_html_e(get_field('page_news_more_news_title_on_sidebar', get_option('page_for_posts')), 'satiksanos-saulkrastos') ?>
    </h4>
    <? foreach ($news as $article) :     ?>

        <?php  ?>
        <a class="text-color-darkest sidebar-links" href="<?php echo esc_url($article->guid); ?>">
            <div class="sidebar-concert__card-container sidebar-concert__card-container--col p-3 d-flex flex-row">
                <div class="sidebar-news-image-wrapper w-30">

                    <img src="<?php echo get_the_post_thumbnail_url($article->ID, 'blog') ?>" alt="" class="img-fluid img-thumbnail">
                </div>

                <div class="sidebar-news-content-wrapper d">
                    <p class="news-pusblish-date text-small text-color-darkest"><?php echo get_the_date('', $article->ID); ?></p>
                    <h3 class="text-md-small"> <?php esc_html_e($article->post_title, 'satiksanos-saulkrastos') ?> </h3>
                </div>





            </div>
        </a>

<?php
    endforeach;
endif;
?>