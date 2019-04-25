<?php 

add_filter('the_excerpt_rss', 'my_postrss');
add_filter('the_content', 'my_postrss');
function my_postrss($content) {
  if(is_feed()){
    $content .= 'This is my custom RSS footer.';
  }
  return $content;
}