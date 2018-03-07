<?php
/*
Plugin Name: CPT for movies
Version:     1.0.0
Author:      Carolina mosquera
*/

if ( ! function_exists('custom_post_type') ) {

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'movies', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'movie', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Movies', 'text_domain' ),
		'name_admin_bar'        => __( 'Movies', 'text_domain' ),
		'archives'              => __( 'movie Archives', 'text_domain' ),
		'attributes'            => __( 'movie Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent movie:', 'text_domain' ),
		'all_items'             => __( 'All movies', 'text_domain' ),
		'add_new_item'          => __( 'Add New movie', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New movie', 'text_domain' ),
		'edit_item'             => __( 'Edit movie', 'text_domain' ),
		'update_item'           => __( 'Update movie', 'text_domain' ),
		'view_item'             => __( 'View movie', 'text_domain' ),
		'view_items'            => __( 'View movies', 'text_domain' ),
		'search_items'          => __( 'Search movie', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into movie', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this movie', 'text_domain' ),
		'items_list'            => __( 'movies list', 'text_domain' ),
		'items_list_navigation' => __( 'movies list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter movies list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'movie', 'text_domain' ),
		'description'           => __( 'movies entry', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-page',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Movies', $args );

}
add_action( 'init', 'custom_post_type', 0 );

}

function enqueue_styles_child_theme() {

	$parent_style = 'twentyseventeen-style';
	$child_style  = 'twentyseventeen-child-style';

	wp_enqueue_style( $parent_style,
				get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( $child_style,
				get_stylesheet_directory_uri() . '/style.css',
				array( $parent_style ),
				wp_get_theme()->get('Version')
				);
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles_child_theme' );