<?php 

// Execute this hook with a cron job
add_action('my_remove_cats', 'my_remove_cats_exec');
function my_remove_cats_exec() {
  $posts = get_posts([
    'numberposts'     => -1,
    'category_name'   => 'slug-of-cat-to-remove',
    'date_query'      => [
      'after'         => date("Y-m-d H:i:s", strtotime('-180 days', current_time('timestamp'))),
    ]
  ]);

  if(!empty($posts)) {
    foreach($posts as $post) {
      wp_remove_object_terms($post->ID, 'slug-of-cat-to-remove', 'category');
    }
  }
}