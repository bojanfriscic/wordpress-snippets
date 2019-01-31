<?php 

add_action('after_setup_theme', 'my_enable_thumbnails');
function my_enable_thumbnails() {
  add_theme_support('post-thumbnails');
}