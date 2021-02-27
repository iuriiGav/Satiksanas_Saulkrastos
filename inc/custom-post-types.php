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

