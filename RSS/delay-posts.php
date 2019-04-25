<?php 

add_filter('posts_where', 'my_delay_posts');
function my_delay_posts($where) {
  global $wpdb;

  if(is_feed()) {
    // Get timestamp & set delay
    $now = gmdate('Y-m-d H:i:s');
    $wait = '10';
    $device = 'MINUTE' // MINUTE, HOUR, DAY, WEEK, MONTH, YEAR

    // Add to default SQL WHERE
    $where .= " AND TIMESTAMPDIFF($device, $wpdb->posts.post_date_gmt, '$now') > $wait ";
  }

  return $where;
}