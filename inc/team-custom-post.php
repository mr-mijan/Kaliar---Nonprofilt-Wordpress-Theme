<?php
/**
 * Register a custom post type called "Team".
 *
 * @see get_post_type_labels() for label keys.
 */
function kaliar_custom_post_Team() {
	$labels = array(
		'name'                  => __( 'Team', 'Post type general name', 'textdomain' ),
		'singular_name'         => __( 'Team', 'Post type singular name', 'textdomain' ),
		'menu_name'             => __( 'Team', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => __( 'Team', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New Team', 'textdomain' ),
		'add_new_item'          => __( 'Add New Team', 'textdomain' ),
		'new_item'              => __( 'New Team', 'textdomain' ),
		'edit_item'             => __( 'Edit Team', 'textdomain' ),
		'view_item'             => __( 'View Team', 'textdomain' ),
		'all_items'             => __( 'All Team', 'textdomain' ),
		'search_items'          => __( 'Search Team', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Team:', 'textdomain' ),
		'not_found'             => __( 'No Team found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No Team found in Trash.', 'textdomain' ),
		'featured_image'        => __( 'Team Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => __( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => __( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => __( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => __( 'Team archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => __( 'Insert into Team', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Team', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => __( 'Filter Team list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => __( 'Team list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => __( 'Team list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'team' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-groups',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'tags'),
        // 'taxonomies'         => array( 'category', 'post_tag' ),
	);

	register_post_type( 'Team', $args );
}

add_action( 'init', 'kaliar_custom_post_Team' );