<?php

function gymfitness_scripts()
{
    // wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.0');



    // Main Stylesheet
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');

    wp_enqueue_script('jquery');

    wp_enqueue_style('swipercss', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), '6.4.15');


    /** Load JS Files */
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);

    wp_enqueue_script('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array('jquery'), '6.4.15', true);

}
add_action('wp_enqueue_scripts', 'gymfitness_scripts');


register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'satiksanos-saulkrastos' ),
) );


function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


// register a new menu
register_nav_menu('main-menu', 'Main menu');

function satiksanos_setup()
{

    // add image sizes
    add_image_size('cover', 660, 240, array('center', 'center'));
    add_image_size('five_five', 500, 500, array('center', 'center'));
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    // add_image_size('box', 400, 375, true);
    // add_image_size('mediumSize', 700, 400, true);
    // add_image_size('blog', 966, 644, true);


    // allow feature images
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'satiksanos_setup');