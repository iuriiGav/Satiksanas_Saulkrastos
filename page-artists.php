<?php
/* 
* Template Name: Artists
*/
get_header();
include 'inc/getAllArtists.php';
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <main class="page-artists full-screen-cover" style=<?php setBackgroundImage(false, 'linear-gradient(180deg, rgba(117, 113, 112, 0.9) 0%, rgba(68, 65, 65, 0.9) 100%)', 'page_artists_current_artists_background_image', null, true) ?>>
            <h2 class="section-header section-header--light text-center top-header-padding"><?php esc_html_e(get_field('page_artists_current_artists_section_header'), 'satiksanos-saulkrastos') ?></h2>
            <section class="artists-page-gallery">
                <h4 class="section-header section-header--dark text-center"><?php esc_html_e(get_field('homepage_artists_section_heading'), 'satiksanos-saulkrastos') ?></h4>
                <?php getAllArtists('post_artist_is_this_artist_participating_this_year', 'is_this_artist_participating_this_year_yes', true)  ?>
            </section>
        </main>
<?php endwhile;
endif ?>

<?php get_footer(); ?>