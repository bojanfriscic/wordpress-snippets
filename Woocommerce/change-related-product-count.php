<?php 

add_filter('woocommerce_output_related_products_args', 'my_related_product_count');
function my_related_product_count($args) {
	$args['posts_per_page'] = 3;
	$args['columns'] = 3;
	return $args;
}