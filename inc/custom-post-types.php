<?php 

function satiksanos_saulkrastos_Artists() {
	$labels = array(
		'name'               => _x( 'Artists', 'satiksanos-saulkrastos' ),
		'singular_name'      => _x( 'Artist', 'post type singular name', 'satiksanos-saulkrastos' ),
		'menu_name'          => _x( 'Artists', 'admin menu', 'satiksanos-saulkrastos' ),
		'name_admin_bar'     => _x( 'Artists', 'add new on admin bar', 'satiksanos-saulkrastos' ),
		'add_new'            => _x( 'Add New', 'book', 'satiksanos-saulkrastos' ),
		'add_new_item'       => __( 'Add New Artist', 'satiksanos-saulkrastos' ),
		'new_item'           => __( 'New Artists', 'satiksanos-saulkrastos' ),
		'edit_item'          => __( 'Edit Artists', 'satiksanos-saulkrastos' ),
		'view_item'          => __( 'View Artists', 'satiksanos-saulkrastos' ),
		'all_items'          => __( 'All Artists', 'satiksanos-saulkrastos' ),
		'search_items'       => __( 'Search Artists', 'satiksanos-saulkrastos' ),
		'parent_item_colon'  => __( 'Parent Artists:', 'satiksanos-saulkrastos' ),
		'not_found'          => __( 'No Artists found.', 'satiksanos-saulkrastos' ),
		'not_found_in_trash' => __( 'No Artists found in Trash.', 'satiksanos-saulkrastos' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Upcoming and past concerts list, displayed in Home and Artists pages', 'satiksanos-saulkrastos' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-groups',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'artists' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category', 'post_tag' ),
	);

	register_post_type( 'artists', $args );
}

add_action( 'init', 'satiksanos_saulkrastos_Artists' );



function satiksanos_saulkrastos_prev_festivals() {
	$labels = array(
		'name'               => _x( 'Previous Festivals', 'satiksanos-saulkrastos' ),
		'singular_name'      => _x( 'Previous Festival', 'post type singular name', 'satiksanos-saulkrastos' ),
		'menu_name'          => _x( 'Previous Festivals', 'admin menu', 'satiksanos-saulkrastos' ),
		'name_admin_bar'     => _x( 'Previous Festivals', 'add new on admin bar', 'satiksanos-saulkrastos' ),
		'add_new'            => _x( 'Add New', 'book', 'satiksanos-saulkrastos' ),
		'add_new_item'       => __( 'Add New Previous Festival', 'satiksanos-saulkrastos' ),
		'new_item'           => __( 'New Previous Festivals', 'satiksanos-saulkrastos' ),
		'edit_item'          => __( 'Edit Previous Festivals', 'satiksanos-saulkrastos' ),
		'view_item'          => __( 'View Previous Festivals', 'satiksanos-saulkrastos' ),
		'all_items'          => __( 'All Previous Festivals', 'satiksanos-saulkrastos' ),
		'search_items'       => __( 'Search Previous Festivals', 'satiksanos-saulkrastos' ),
		'parent_item_colon'  => __( 'Parent Previous Festivals:', 'satiksanos-saulkrastos' ),
		'not_found'          => __( 'No Previous Festivals found.', 'satiksanos-saulkrastos' ),
		'not_found_in_trash' => __( 'No Previous Festivals found in Trash.', 'satiksanos-saulkrastos' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Upcoming and past concerts list, displayed in Home and Previous Festivals pages', 'satiksanos-saulkrastos' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-controls-skipback',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'pastfestivals' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 32,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category', 'post_tag' ),
	);

	register_post_type( 'pastfestivals', $args );
}

add_action( 'init', 'satiksanos_saulkrastos_prev_festivals' );



function satiksanos_saulkrastos_concerts() {
	$labels = array(
		'name'               => _x( 'Concerts', 'satiksanos-saulkrastos' ),
		'singular_name'      => _x( 'Concert', 'post type singular name', 'satiksanos-saulkrastos' ),
		'menu_name'          => _x( 'Concerts', 'admin menu', 'satiksanos-saulkrastos' ),
		'name_admin_bar'     => _x( 'Concerts', 'add new on admin bar', 'satiksanos-saulkrastos' ),
		'add_new'            => _x( 'Add New', 'book', 'satiksanos-saulkrastos' ),
		'add_new_item'       => __( 'Add New Concert', 'satiksanos-saulkrastos' ),
		'new_item'           => __( 'New Concerts', 'satiksanos-saulkrastos' ),
		'edit_item'          => __( 'Edit Concerts', 'satiksanos-saulkrastos' ),
		'view_item'          => __( 'View Concerts', 'satiksanos-saulkrastos' ),
		'all_items'          => __( 'All Concerts', 'satiksanos-saulkrastos' ),
		'search_items'       => __( 'Search Concerts', 'satiksanos-saulkrastos' ),
		'parent_item_colon'  => __( 'Parent Concerts:', 'satiksanos-saulkrastos' ),
		'not_found'          => __( 'No Concerts found.', 'satiksanos-saulkrastos' ),
		'not_found_in_trash' => __( 'No Concerts found in Trash.', 'satiksanos-saulkrastos' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Upcoming and past concerts list, displayed in Home and Concerts pages', 'satiksanos-saulkrastos' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-megaphone',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'concerts' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'concerts', $args );
}

add_action( 'init', 'satiksanos_saulkrastos_concerts' );





function satiksanos_saulkrastos_venues() {
	$labels = array(
		'name'               => _x( 'Venues', 'satiksanos-saulkrastos' ),
		'singular_name'      => _x( 'Venue', 'post type singular name', 'satiksanos-saulkrastos' ),
		'menu_name'          => _x( 'Venues', 'admin menu', 'satiksanos-saulkrastos' ),
		'name_admin_bar'     => _x( 'Venues', 'add new on admin bar', 'satiksanos-saulkrastos' ),
		'add_new'            => _x( 'Add New', 'book', 'satiksanos-saulkrastos' ),
		'add_new_item'       => __( 'Add New Venue', 'satiksanos-saulkrastos' ),
		'new_item'           => __( 'New Venues', 'satiksanos-saulkrastos' ),
		'edit_item'          => __( 'Edit Venues', 'satiksanos-saulkrastos' ),
		'view_item'          => __( 'View Venues', 'satiksanos-saulkrastos' ),
		'all_items'          => __( 'All Venues', 'satiksanos-saulkrastos' ),
		'search_items'       => __( 'Search Venues', 'satiksanos-saulkrastos' ),
		'parent_item_colon'  => __( 'Parent Venues:', 'satiksanos-saulkrastos' ),
		'not_found'          => __( 'No Venues found.', 'satiksanos-saulkrastos' ),
		'not_found_in_trash' => __( 'No Venues found in Trash.', 'satiksanos-saulkrastos' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Upcoming and past venues list, displayed in Home and Venues pages', 'satiksanos-saulkrastos' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php?post_type=concerts',
        'menu_icon'          => 'dashicons-megaphone',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'venues' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title','thumbnail' ),
    'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'venues', $args );
}

add_action( 'init', 'satiksanos_saulkrastos_venues' );