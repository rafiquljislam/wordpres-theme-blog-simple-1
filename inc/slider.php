<?php

// Register Custom Post Type Slider
function create_slider_cpt() {

	$labels = array(
		'name' => _x( 'Sliders', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Slider', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Sliders', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Slider', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Slider Archives', 'textdomain' ),
		'attributes' => __( 'Slider Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Slider:', 'textdomain' ),
		'all_items' => __( 'All Sliders', 'textdomain' ),
		'add_new_item' => __( 'Add New Slider', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Slider', 'textdomain' ),
		'edit_item' => __( 'Edit Slider', 'textdomain' ),
		'update_item' => __( 'Update Slider', 'textdomain' ),
		'view_item' => __( 'View Slider', 'textdomain' ),
		'view_items' => __( 'View Sliders', 'textdomain' ),
		'search_items' => __( 'Search Slider', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Slider', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Slider', 'textdomain' ),
		'items_list' => __( 'Sliders list', 'textdomain' ),
		'items_list_navigation' => __( 'Sliders list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Sliders list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Slider', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-collapse',
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'slider', $args );

}
add_action( 'init', 'create_slider_cpt', 0 );