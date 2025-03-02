<?php
require_once 'inc/custom-post-types.php';
require_once 'inc/backgorundImageAndGradient.php';
require_once 'inc/queries/pastConcertsQuery_inclusive_this_year.php';
require_once 'inc/getAllConcerts.php';
require_once 'inc/getUpcomingConcertsIDs.php';
require_once 'inc/helpers_functions.php';
require_once 'inc/getPageIDbyTemplateName.php';

// require_once 'inc/getAllArtists.php';



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


register_nav_menus(array(
    'primary' => __('Primary Menu', 'satiksanos-saulkrastos'),
));


function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');


// register a new menu
register_nav_menu('main-menu', 'Main menu');

function satiksanos_setup()
{

    // add image sizes

    add_image_size('square', 350, 350);
    add_image_size('blog', 350, 230);
    add_image_size('mediumCover', 1250, 834);
    add_image_size('large', 1024, 1024);


    // allow feature images
    add_theme_support('post-thumbnails');

    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'satiksanos_setup');







//programatically create a venue if the concert venue was
//added during the creatin of the concert post types

// function ig_create_venue_when_publish_concert_if_venue_didnt_exist($post_id)
// {

//     $attempted_venue = get_field('post_concerts_concert_date', $post_id);

//     if (!empty($attempted_venue)) :

//         if (get_post($post_id) == null) {
//             global $user_ID;
//             $new_venue = array(
//                 'post_title' => "title2",
//                 'post_content' => ' ',
//                 'post_status' => 'publish',
//                 'post_date' => date('Y-m-d H:i:s'),
//                 'post_author' => $user_ID,
//                 'post_type' => 'venues',
//                 'post_category' => array(0)
//             );
//             $post_id = wp_insert_post($new_venue);



// $acf_group_to_update = get_field('post_venues_group_venue');
// update_field($acf_group_to_update['post_venue_venue_name'], $attempted_venue['post_concerts_venue_name'], $post_id );
// update_field($acf_group_to_update['post_venue_venue_address'], $attempted_venue['post_concerts_venue_address'], $post_id );
// update_field($acf_group_to_update['post_venue_venue_postcode'], $attempted_venue['post_concerts_venue_postcode'], $post_id );
// update_field($acf_group_to_update['post_venue_venue_website_link'], $attempted_venue['post_concerts_venue_website'], $post_id );
// update_field($acf_group_to_update['post_venue_venue_phone_number'], $attempted_venue['post_concerts_venue_phone_number'], $post_id );
//         }

//     endif;

// }
// add_action('save_post_concerts', 'ig_create_venue_when_publish_concert_if_venue_didnt_exist');
// function remove_my_action() {
//     remove_action( 'save_post_concerts', 'ig_create_venue_when_publish_concert_if_venue_didnt_exist' );
// }

// add_action('acf/save_post', 'ig_acf_save_post');

// function ig_acf_save_post($post_id)
// {

//     // Get newly saved values.
//     $values = get_fields($post_id);

//     global $user_ID;
//     $new_venue = array(
//         'post_title' => "test-title",
//         'post_content' => ' ',
//         'post_status' => 'publish',
//         'post_date' => date('Y-m-d H:i:s'),
//         'post_author' => $user_ID,
//         'post_type' => 'venues',
//         'post_category' => array(0)
//     );
//     $post_id = wp_insert_post($new_venue);

//     $attempted_venue = get_field('post_concerts_concert_date', $post_id);

//     $acf_group_to_update = get_field('post_venues_group_venue');
//     update_field($acf_group_to_update['post_venue_venue_name'], $attempted_venue, $post_id);

// }













// custom taxonomy for venues
// has 'yes' and 'no' option
// if chosen yes the venue will show up in a drop down venue choice menu when creating a concert


//hook into the init action and call create_book_taxonomies when it fires

add_action('init', 'ig_hierarchical_taxonomy_for_venues', 0);

//create a custom taxonomy name it subjects for your posts

function ig_hierarchical_taxonomy_for_venues()
{

    // Add new taxonomy, make it hierarchical like categories
    //first do the translations part for GUI

    $labels = array(
        'name' => _x('Current Year Venue', 'taxonomy general name'),
        'singular_name' => _x('Current Year Venue', 'taxonomy singular name'),
        'search_items' =>  __('Search Current Year Venue'),
        'all_items' => __('All Current Year Venue'),
        'parent_item' => __('Parent Current Year Venue'),
        'parent_item_colon' => __('Parent Current Year Venue:'),
        'edit_item' => __('Edit Current Year Venue'),
        'update_item' => __('Update Current Year Venue'),
        'add_new_item' => __('Add New Current Year Venue'),
        'new_item_name' => __('New Current Year Venue Name'),
        'menu_name' => __('Current Year Venue'),
    );

    // Now register the taxonomy
    register_taxonomy('current_year_venue', array('venues'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'current_year_venue'),
    ));
}


/**
 * Use radio inputs instead of checkboxes for term checklists in specified taxonomies.
 *
 * @param   array   $args
 * @return  array
 */
function wpse_139269_term_radio_checklist($args)
{
    if (!empty($args['taxonomy']) && $args['taxonomy'] === 'current_year_venue' /* <== Change to your required taxonomy */) {
        if (empty($args['walker']) || is_a($args['walker'], 'Walker')) { // Don't override 3rd party walkers.
            if (!class_exists('WPSE_139269_Walker_Category_Radio_Checklist')) {
                /**
                 * Custom walker for switching checkbox inputs to radio.
                 *
                 * @see Walker_Category_Checklist
                 */
                class WPSE_139269_Walker_Category_Radio_Checklist extends Walker_Category_Checklist
                {
                    function walk($elements, $max_depth, ...$args)
                    {
                        $output = parent::walk($elements, $max_depth, ...$args);
                        $output = str_replace(
                            array('type="checkbox"', "type='checkbox'"),
                            array('type="radio"', "type='radio'"),
                            $output
                        );

                        return $output;
                    }
                }
            }

            $args['walker'] = new WPSE_139269_Walker_Category_Radio_Checklist;
        }
    }

    return $args;
}

add_filter('wp_terms_checklist_args', 'wpse_139269_term_radio_checklist');


add_action('pre_insert_term', function ($term, $taxonomy) {
    return ('current_year_venue' === $taxonomy)
        ? new WP_Error('term_addition_blocked', __('You cannot add terms to this taxonomy'))
        : $term;
}, 0, 2);

add_filter('acf/format_value/name=homepage_map_of_venues_shortcode', 'do_shortcode');
add_filter('acf/format_value/name=about_us_gallery_shortcode_modula', 'do_shortcode');
add_filter('acf/format_value/name=gallery_shortcode_from_modula', 'do_shortcode');
add_filter('acf/format_value/name=post_previous_festivals__gallery_shortcode', 'do_shortcode');
add_filter('acf/format_value/name=page_contact_uscontact_form_shortcode', 'do_shortcode');
