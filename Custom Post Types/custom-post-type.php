<?php 

add_action('init', 'add_my_cpt', 0);
function add_ctp() {
	$labels = array(
		'name'                  => _x('Post Types', 'Post Type General Name', 'insert_text_domain'),
		'singular_name'         => _x('Post Type', 'Post Type Singular Name', 'insert_text_domain'),
		'menu_name'             => __('Post Types', 'insert_text_domain'),
		'name_admin_bar'        => __('Post Type', 'insert_text_domain'),
		'archives'              => __('Item Archives', 'insert_text_domain'),
		'attributes'            => __('Item Attributes', 'insert_text_domain'),
		'parent_item_colon'     => __('Parent Item:', 'insert_text_domain'),
		'all_items'             => __('All Items', 'insert_text_domain'),
		'add_new_item'          => __('Add New Item', 'insert_text_domain'),
		'add_new'               => __('Add New', 'insert_text_domain'),
		'new_item'              => __('New Item', 'insert_text_domain'),
		'edit_item'             => __('Edit Item', 'insert_text_domain'),
		'update_item'           => __('Update Item', 'insert_text_domain'),
		'view_item'             => __('View Item', 'insert_text_domain'),
		'view_items'            => __('View Items', 'insert_text_domain'),
		'search_items'          => __('Search Item', 'insert_text_domain'),
		'not_found'             => __('Not found', 'insert_text_domain'),
		'not_found_in_trash'    => __('Not found in Trash', 'insert_text_domain'),
		'featured_image'        => __('Featured Image', 'insert_text_domain'),
		'set_featured_image'    => __('Set featured image', 'insert_text_domain'),
		'remove_featured_image' => __('Remove featured image', 'insert_text_domain'),
		'use_featured_image'    => __('Use as featured image', 'insert_text_domain'),
		'insert_into_item'      => __('Insert into item', 'insert_text_domain'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'insert_text_domain'),
		'items_list'            => __('Items list', 'insert_text_domain'),
		'items_list_navigation' => __('Items list navigation', 'insert_text_domain'),
		'filter_items_list'     => __('Filter items list', 'insert_text_domain')
	);
	
	$args = array(
		'label'                 => __('Post Type', 'insert_text_domain'),
		'description'           => __('Post Type Description', 'insert_text_domain'),
		'labels'                => $labels,
		'supports'              => false,
		'taxonomies'            => array('category', 'post_tag'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		// Set show_in_rest to true to enable Gutenberg editor
		'show_in_rest'					=> true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'supports'      		=> array('title', 'editor', 'thumbnail'),
		'menu_icon'				=> 'dashicons-format-status'
	);
	
	register_post_type('my_cpt', $args);
}