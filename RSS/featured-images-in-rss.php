<?php 

add_filter('the_excerpt_rss', 'my_rss_post_thumbnail');
add_filter('the_content_feed', 'my_rss_post_thumbnail');
function my_rss_post_thumbnail($content) {
  global $post;
  if(has_post_thumbnail($post->ID)) {
    $content = '<div>' . get_the_post_thumbnail($post->ID) . '</div>' . get_the_content();
  }

  return $content;
}