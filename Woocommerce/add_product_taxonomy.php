<?php 

add_action('init', 'my_product_taxonomy');
function my_product_taxonomy() {
	$labels = array(
		'name'									=>	'Taxonomies',
		'singular_name'					=>	'Taxonomy',
		'menu_name'							=>	'Taxonomies',
		'all_items'							=>	'All Taxonomies',
		'parent_item'						=>	'Parent Item',
		'parent_item_colon'			=>	'Parent Item:',
		'new_item_name'					=>	'New Taxonomy Name',
		'add_new_item'					=>	'Add Taxonomy',
		'edit_item'							=>	'Edit Taxonomy',
		'update_item'						=>	'Update Taxonomy',
		'search_items'					=>	'Search Taxonomies',
		'add_or_remove_items'		=>	'Add or remove Taxonomies',
		'choose_from_most_used'	=>	'Choose from the most used Taxonomies'
	);
	$args = array(
		'labels'						=>	$labels,
		'hierarchical'			=>	true,
		'public'						=>	true,
		'show_ui'						=>	true,
		'show_admin_column'	=>	true,
		'show_in_nav_menus'	=>	true,
		'show_tagcloud'			=>	true
	);
	register_taxonomy('tax', 'product', $args);
	register_taxonomy_for_object_type('tax', 'product');
}