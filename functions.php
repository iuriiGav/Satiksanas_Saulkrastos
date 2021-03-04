<?php
require get_template_directory() . '/inc/custom-post-types.php';




function gymfitness_scripts()
{
    // wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.0');



    // Main Stylesheet
    wp_enqueue_style('bootstrapcss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css', array(), '5.0.0');
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');

    wp_enqueue_script('jquery');
// if(is_front_page()) :
    wp_enqueue_style('swipercss', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), '6.4.15');
// endif;
    // wp_enqueue_style('lightbox', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.3');

    /** Load JS Files */
    // wp_enqueue_script('lightboxjs',  get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.3', true);
    // if(is_front_page()) :
    wp_enqueue_script('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array('jquery'), '6.4.15', true);
    // endif;
    wp_enqueue_script('bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js', array(), '5.0.0', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);

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
    // add_image_size('cover', 660, 240, array('center', 'center'));
    // add_image_size('five_five', 500, 500, array('center', 'center'));
    add_image_size('square', 350, 350, true);
    // add_image_size('small-square', 150, 150, true);
    add_image_size('blog', 350, 230, true);
    // add_image_size('portrait', 350, 724, true);
    // add_image_size('box', 400, 375, true);
    // add_image_size('mediumSize', 700, 400, true);
    add_image_size('mediumCover', 1250, 834, true);
    // add_image_size('blog', 966, 644, true);


    // allow feature images
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'satiksanos_setup');








//populating custom select field in post concerts with artists 
//that has been previosly added


function acf_load_artists_choices( $field ) {

    //clears fields choices
    $field['choices'] = array();


    $args = array(

        'post_type' => 'artists',
        'posts_per_page' => 100,
        //this comes from acf radio btn choice for weather the artist is a participant this year
        'meta_key'		=> 'post_artist_is_this_artist_participating_this_year',
        'meta_value'	=> 'is_this_artist_participating_this_year_yes'
    
    );
    
    
    $current_artists = new WP_Query($args); 

    if ($current_artists->have_posts()) : while ($current_artists->have_posts()) : $current_artists->the_post();
   
     $artist_id = get_the_id();
     //here the title is the name of the artist
     $artist = get_the_title($artist_id);
        

            
            $field['choices'][ $artist ] = $artist;
            
        
        
    endwhile;
    wp_reset_postdata();
endif; 

return $field;
}

//hook it to the acf with the name provided in the first argument
add_filter('acf/load_field/name=post_concerts_artists', 'acf_load_artists_choices');



