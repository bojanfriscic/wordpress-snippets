<?php

add_action('init', 'add_my_custom_taxonomy');
function add_my_custom_taxonomy() {
    $labels = array(
        'name'                       => _x( 'My Custom Taxonomy', 'text-domain'),
		'singular_name'              => _x( 'My Custom Taxonomy', 'text-domain'),
		'menu_name'                  => __( 'My Custom Taxonomy', 'text-domain'),
		'all_items'                  => __( 'All My Custom Taxonomies'),
		'parent_item'                => __( 'Parent Item'),
		'parent_item_colon'          => __( 'Parent Item:'),
		'new_item_name'              => __( 'New Item Name'),
		'add_new_item'               => __( 'Add New Item'),
		'edit_item'                  => __( 'Edit Item'),
		'update_item'                => __( 'Update Item'),
		'view_item'                  => __( 'View Item'),
		'separate_items_with_commas' => __( 'Separate items with commas'),
		'add_or_remove_items'        => __( 'Add or remove items'),
		'choose_from_most_used'      => __( 'Choose from the most used'),
		'popular_items'              => __( 'Popular Items'),
		'search_items'               => __( 'Search Items'),
		'not_found'                  => __( 'Not Found'),
		'no_terms'                   => __( 'No items'),
		'items_list'                 => __( 'Items list'),
		'items_list_navigation'      => __( 'Items list navigation') 
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