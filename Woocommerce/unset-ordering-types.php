<?php 

add_filter('woocommerce_catalog_orderby', 'my_unset_order_types');
function my_unset_order_types($options) {
	unset($options['popularity']);
	unset($options['rating']);

	return $options;
}