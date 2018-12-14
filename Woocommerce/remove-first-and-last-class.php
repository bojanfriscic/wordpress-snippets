<?php 

add_filter('post_class', 'my_prefix_post_class', 21);
function my_prefix_post_class($classes) {
	if('product' == get_post_type() && is_search()) {
		$classes = array_diff($classes, array('first', 'last'));
	}
	return $classes;
}