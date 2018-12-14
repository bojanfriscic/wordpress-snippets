<?php 

add_filter('woocommerce_get_catalog_ordering_args', 'my_custom_ordering_args');
function my_custom_ordering_args($args) {
	$orderby_value = isset($_GET['orderby']) ? woocommerce_clean($_GET['orderby']) : apply_filters('woocommerce_default_catalog_orderby', get_option('woocommerce_default_catalog_orderby'));

	if('alphabetical-desc' == $orderby_value) {
		$args['orderby'] = 'title';
		$args['order'] = 'desc';
	}

	if('alphabetical-asc' == $orderby_value) {
		$args['orderby'] = 'title';
		$args['order'] = 'asc';
	}

	return $args;
}

// Set ordering types
add_filter('woocommerce_default_catalog_orderby_options', 'my_custom_ordering_orderby');
add_filter('woocommerce_catalog_orderby', 'my_custom_ordering_orderby');
function my_custom_ordering_orderby($sortby) {
	$sortby['alphabetical-asc'] = __('Order by name (A - Z)', 'text-domain');
	$sortby['alphabetical-desc'] = __('Order by name (Z - A)', 'text-domain');

	return $sortby;
}

