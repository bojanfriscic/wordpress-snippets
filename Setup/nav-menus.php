<?php 

add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup() {
  register_nav_menu('main', __('Main Menu', 'mytheme'));
}