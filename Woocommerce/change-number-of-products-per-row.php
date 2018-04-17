<?php 

add_filter('loop_shop_columns', 'my_loop_columns');
if(!function_exists('my_loop_columns')) {
	function kmt_loop_columns() {
		return 3;
	}
}