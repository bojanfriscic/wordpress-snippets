<?php 

add_filter('excerpt_length', 'my_excerpt_length');
function my_excerpt_length($length) {
  global $post;

  if($post->post_type == 'post') {
    return 40;
  } else {
    return 60;
  }
}