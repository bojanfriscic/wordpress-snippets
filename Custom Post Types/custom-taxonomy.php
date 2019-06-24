<?php

add_action('init', 'add_my_custom_taxonomy');
function add_my_custom_taxonomy() {
    $labels = array(
		'name'                       => _x('My Custom Taxonomy', 'insert_text_domain'),
		'singular_name'              => _x('My Custom Taxonomy', 'insert_text_domain'),
		'menu_name'                  => __('My Custom Taxonomy', 'insert_text_domain'),
		'all_items'                  => __('All My Custom Taxonomies', 'insert_text_domain'),
		'parent_item'                => __('Parent Item', 'insert_text_domain'),
		'parent_item_colon'          => __('Parent Item:', 'insert_text_domain'),
		'new_item_name'              => __('New Item Name', 'insert_text_domain'),
		'add_new_item'               => __('Add New Item', 'insert_text_domain'),
		'edit_item'                  => __('Edit Item', 'insert_text_domain'),
		'update_item'                => __('Update Item', 'insert_text_domain'),
		'view_item'                  => __('View Item', 'insert_text_domain'),
		'separate_items_with_commas' => __('Separate items with commas', 'insert_text_domain'),
		'add_or_remove_items'        => __('Add or remove items', 'insert_text_domain'),
		'choose_from_most_used'      => __('Choose from the most used'),
		'popular_items'              => __('Popular Items', 'insert_text_domain'),
		'search_items'               => __('Search Items', 'insert_text_domain'),
		'not_found'                  => __('Not Found', 'insert_text_domain'),
		'no_terms'                   => __('No items', 'insert_text_domain'),
		'items_list'                 => __('Items list', 'insert_text_domain'),
		'items_list_navigation'      => __('Items list navigation', 'insert_text_domain') 
    );
    $args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false
    );
    register_taxonomy('my_custom_taxonomy', array('my_post_type'), $args);
}