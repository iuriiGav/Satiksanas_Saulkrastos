<?php get_header();
/* 
* Template Name: About Festival
*/
?>

<main class="container-fluid about-us-page-wrapper full-screen-cover" style=<?php setBackgroundImage(false, 'linear-gradient(180deg, #1F2526 0%, rgba(196, 196, 196, 0) 100%)', 'about_us_section_1_background_image', null, true) ?>>
    <?php get_template_part('template-parts/page-about-us/section', 'festival-bio');
    get_template_part('template-parts/page-about-us/section', 'gallery');
    get_template_part('template-parts/page-about-us/section', 'history'); ?>

</main>

<?php get_footer();
