<?php 

$post_obj = get_field('my_post_obj');
if(!empty($post_obj)) {
  global $post;
  $post = $post_obj;
  setup_postdata($post);
  /**
   * Insert markup
   */
  wp_reset_postdata();
}