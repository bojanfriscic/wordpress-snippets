<?php

// First disable prefetching
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// Update the post view count on each single page view
add_action('wp_head', 'my_track_post_views');
function my_track_post_views($post_id) {
  // Do nothing if not on single page
  if(!is_single()) return;

  // Get ID from global post object
  if(empty($post_id)) {
    global $post;
    $post_id = $post->ID;
  }

  my_set_post_views($post_id);
}

function my_set_post_views($post_id) {
  $count_key = 'met_post_views_count';
  $count = get_post_meta($post_id, $count_key, true);

  if($count === '') {
    $count = 0;
    delete_post_meta($post_id, $count_key);
    add_post_meta($post_id, $count_key, '0');
  } else {
    $count++;
    update_post_meta($post_id, $count_key, $count);
  }
}
