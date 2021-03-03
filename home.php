<?php get_header(); 
include 'inc/backgorundImageAndGradient.php';
$page_for_posts = get_option( 'page_for_posts' );
?>

<main class="upcoming-concerts " style=<?php setBackgroundImage(true, null, 'page_news_background_image', $page_for_posts)?>>
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;">

<h4 class="section-header text-color-light padding-from-nav text-center "><?php esc_html_e(get_field('page_news_page_title', $page_for_posts), 'satiksanos-saulkrastos') ?></h4>

<?php while(have_posts()): the_post(); ?>
<div class="card card-history">
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url()) ?>" class="card-img-top" alt="<?php esc_html_e(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE), 'satiksanos-saulkrastos') ?>">
                            <div class="card-body">

                                <a href="<?php echo get_permalink() ?>">

                                    <p class="card-text text-color-darkest large-info-num text-center p-3"><?php esc_html_e(get_field('history_year_of_archive', get_the_ID()), 'satiksanos-saulkrastos') ?></p>
                                </a>
                            </div>
                        </div>

<?php endwhile; ?>

</main>

<?php get_footer(); ?>