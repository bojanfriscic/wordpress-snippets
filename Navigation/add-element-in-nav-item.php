<?php 

add_filter('walker_nav_menu_start_el', 'my_add_custom_element');
function my_add_custom_element($item_output, $item, $depth, $args) {
  return '<span>My custom element</span>';
}