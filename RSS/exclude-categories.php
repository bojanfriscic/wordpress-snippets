<?php 

add_filter('pre_get_posts', 'my_exclude_category');
function my_exclude_category($query) {
  if($query->is_feed()) {
    $query->set('cat', '-5, -2, -3');
  }

  return $query;
}