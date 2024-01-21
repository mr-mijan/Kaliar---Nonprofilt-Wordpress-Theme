<?php
/**
 * Register a custom post type called "Event".
 *
 * @see get_post_type_labels() for label keys.
 */
function kaliar_custom_post_Event() {
	$labels = array(
		'name'                  => __( 'Events', 'Post type general name', 'kaliar' ),
		'singular_name'         => __( 'Event', 'Post type singular name', 'kaliar' ),
		'menu_name'             => __( 'Events', 'Admin Menu text', 'kaliar' ),
		'name_admin_bar'        => __( 'Event', 'Add New on Toolbar', 'kaliar' ),
		'add_new'               => __( 'Add New Event', 'kaliar' ),
		'add_new_item'          => __( 'Add New Event', 'kaliar' ),
		'new_item'              => __( 'New Events', 'kaliar' ),
		'edit_item'             => __( 'Edit Event', 'kaliar' ),
		'view_item'             => __( 'View Event', 'kaliar' ),
		'all_items'             => __( 'All Event', 'kaliar' ),
		'search_items'          => __( 'Search Events', 'kaliar' ),
		'parent_item_colon'     => __( 'Parent Events:', 'kaliar' ),
		'not_found'             => __( 'No Events found.', 'kaliar' ),
		'not_found_in_trash'    => __( 'No Events found in Trash.', 'kaliar' ),
		'featured_image'        => __( 'Event Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'kaliar' ),
		'set_featured_image'    => __( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'kaliar' ),
		'remove_featured_image' => __( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'kaliar' ),
		'use_featured_image'    => __( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'kaliar' ),
		'archives'              => __( 'Event archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'kaliar' ),
		'insert_into_item'      => __( 'Insert into Event', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'kaliar' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Event', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'kaliar' ),
		'filter_items_list'     => __( 'Filter Events list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'kaliar' ),
		'items_list_navigation' => __( 'Events list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'kaliar' ),
		'items_list'            => __( 'Events list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'kaliar' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'event' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-calendar',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
        //'taxonomies'         => array( 'category', 'post_tag' ),
	);

	register_post_type( 'event', $args );

}

add_action( 'init', 'kaliar_custom_post_Event' );

