<?php
/**
 * Register a custom post type called "Cause".
 *
 * @see get_post_type_labels() for label keys.
 */
function kaliar_custom_post_Cause() {
	$labels = array(
		'name'                  => __( 'Causes', 'Post type general name', 'textdomain' ),
		'singular_name'         => __( 'Cause', 'Post type singular name', 'textdomain' ),
		'menu_name'             => __( 'Causes', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => __( 'Cause', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New Cause', 'textdomain' ),
		'add_new_item'          => __( 'Add New Cause', 'textdomain' ),
		'new_item'              => __( 'New Causes', 'textdomain' ),
		'edit_item'             => __( 'Edit Cause', 'textdomain' ),
		'view_item'             => __( 'View Cause', 'textdomain' ),
		'all_items'             => __( 'All Cause', 'textdomain' ),
		'search_items'          => __( 'Search Causes', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Causes:', 'textdomain' ),
		'not_found'             => __( 'No Causes found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No Causes found in Trash.', 'textdomain' ),
		'featured_image'        => __( 'Cause Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => __( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => __( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => __( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => __( 'Cause archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => __( 'Insert into Cause', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Cause', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => __( 'Filter Causes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => __( 'Causes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => __( 'Causes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'causes' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'tags'),
        // 'taxonomies'         => array( 'category', 'post_tag' ),
	);

	register_post_type( 'causes', $args );
}

add_action( 'init', 'kaliar_custom_post_Cause' );