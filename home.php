<?php get_header();
// include 'inc/backgorundImageAndGradient.php';
include 'inc/helpers_functions.php';
$page_for_posts = get_option('page_for_posts');
?>

<main class="upcoming-concerts full-screen-cover" style=<?php setBackgroundImage(true, null, 'page_news_background_image', $page_for_posts, true) ?>>
  

    <h4 class="section-header text-color-light padding-from-nav text-center "><?php esc_html_e(get_field('page_news_page_title', $page_for_posts), 'satiksanos-saulkrastos') ?></h4>
    <div class="all-news-container">

        <?php while (have_posts()) : the_post(); ?>


            <div class="card-news">
                <div class="news-image-container">

                    <a href="<?php echo get_permalink() ?>">
                        <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'square')) ?>" class="card-img-top" alt="<?php esc_html_e(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE), 'satiksanos-saulkrastos') ?>">
                    </a>

                </div>
                <div class="news-body d-flex flex-column justify-content-center">
                    <h3 class="news-pusblish-date"><?php echo get_the_date() ?> </h3>
                    <?php $news_content = get_the_content(); 
                    $desired_description_length = 200;
                    if(strlen($news_content)<=$desired_description_length) :
                    ?>
  <h2 class="news-post__title text-title text-color-darkest">
                                <?php the_title() ?>
                            </h2>
                    <?php else : ?>

                        <a href="<?php echo get_permalink() ?>">
                            <h2 class="news-post__title text-title text-color-darkest">
                                <?php the_title() ?>
                            </h2>
                        </a>

                    <?php endif; ?>

                   
                    <div class="news-post__content text-long"> <?php  custom_length_excerpt($news_content, $desired_description_length, get_the_permalink()) ?></div>
                </div>
            </div>
    

        <?php endwhile; ?>

<div class="prev-next-post-btn-container">



<?php if(get_previous_post()) : ?>

<div class="next-prev-post-link next-prev-post-link--prev"> <?php next_posts_link('Older posts'); ?></div>



<?php endif; if( get_previous_posts_link( )) : ?>
            <div class="next-prev-post-link next-prev-post-link--next"><?php previous_posts_link('Newer posts'); ?></div>
<?php endif; ?>
</div>
     
    </div>

</main>

<?php get_footer(); ?>