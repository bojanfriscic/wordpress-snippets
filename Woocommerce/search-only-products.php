<?php 

add_action('pre_get_posts', 'my_search_products');
function my_search_products($query) {
	if(!is_admin() && is_search() && $query->is_main_query()) {
		$query->set('post_type', 'product');
	}
}