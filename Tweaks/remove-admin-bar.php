<?php 

add_action('after_setup_theme', 'my_remove_admin_bar');
function my_remove_admin_bar() {
  if(!(current_user_can('administrator') && is_admin())) {
    show_admin_bar(false);
  }
}