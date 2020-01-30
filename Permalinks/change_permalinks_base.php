<?php 

add_action('init', 'my_change_permalink_base');
function my_change_permalink_base() {
  global $wp_rewrite;

  $wp_rewrite->pagination_base = 'page';
  $wp_rewrite->search_base = 'search';
  $wp_rewrite->author_base = 'author';
}