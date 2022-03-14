<?php
function bytebeardigi_cpt_services() {

	/**
	 * Post Type: Services.
	 */

	$labels = [
		"name" => __( "Services", "<Theme_Text_Domain>" ),
		"singular_name" => __( "Service", "<Theme_Text_Domain>" ),
		"menu_name" => __( "My Services", "<Theme_Text_Domain>" ),
		"all_items" => __( "All Services", "<Theme_Text_Domain>" ),
		"add_new" => __( "Add new", "<Theme_Text_Domain>" ),
		"add_new_item" => __( "Add new Service", "<Theme_Text_Domain>" ),
		"edit_item" => __( "Edit Service", "<Theme_Text_Domain>" ),
		"new_item" => __( "New Service", "<Theme_Text_Domain>" ),
		"view_item" => __( "View Service", "<Theme_Text_Domain>" ),
		"view_items" => __( "View Services", "<Theme_Text_Domain>" ),
		"search_items" => __( "Search Services", "<Theme_Text_Domain>" ),
		"not_found" => __( "No Services found", "<Theme_Text_Domain>" ),
		"not_found_in_trash" => __( "No Services found in trash", "<Theme_Text_Domain>" ),
		"parent" => __( "Parent Service:", "<Theme_Text_Domain>" ),
		"featured_image" => __( "Featured image for this Service", "<Theme_Text_Domain>" ),
		"set_featured_image" => __( "Set featured image for this Service", "<Theme_Text_Domain>" ),
		"remove_featured_image" => __( "Remove featured image for this Service", "<Theme_Text_Domain>" ),
		"use_featured_image" => __( "Use as featured image for this Service", "<Theme_Text_Domain>" ),
		"archives" => __( "Service archives", "<Theme_Text_Domain>" ),
		"insert_into_item" => __( "Insert into Service", "<Theme_Text_Domain>" ),
		"uploaded_to_this_item" => __( "Upload to this Service", "<Theme_Text_Domain>" ),
		"filter_items_list" => __( "Filter Services list", "<Theme_Text_Domain>" ),
		"items_list_navigation" => __( "Services list navigation", "<Theme_Text_Domain>" ),
		"items_list" => __( "Services list", "<Theme_Text_Domain>" ),
		"attributes" => __( "Services attributes", "<Theme_Text_Domain>" ),
		"name_admin_bar" => __( "Service", "<Theme_Text_Domain>" ),
		"item_published" => __( "Service published", "<Theme_Text_Domain>" ),
		"item_published_privately" => __( "Service published privately.", "<Theme_Text_Domain>" ),
		"item_reverted_to_draft" => __( "Service reverted to draft.", "<Theme_Text_Domain>" ),
		"item_scheduled" => __( "Service scheduled", "<Theme_Text_Domain>" ),
		"item_updated" => __( "Service updated.", "<Theme_Text_Domain>" ),
		"parent_item_colon" => __( "Parent Service:", "<Theme_Text_Domain>" ),
	];

	$args = [
		"label" => __( "Services", "<Theme_Text_Domain>" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => "services",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "services", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 6,
		"menu_icon" => "dashicons-block-default",
		"supports" => [ "title", "editor", "thumbnail", "custom-fields", "revisions", "author", "page-attributes", "post-formats" ],
		"taxonomies" => [ "category" ],
		"show_in_graphql" => false,
	];

	register_post_type( "services", $args );
}

add_action( 'init', 'bytebeardigi_cpt_services' );
?>