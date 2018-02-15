<?php 

add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup() {
  add_theme_support('post-thumbnails');
}