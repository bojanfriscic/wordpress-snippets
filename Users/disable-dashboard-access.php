<?php 

add_action('admin_init', 'my_disable_dashboard_access');
function my_disable_dashboard_access() {
  if(!current_user_can('manage_options') && $_SERVER['DOING_AJAX'] != '/wp-admin/admin-ajax.php') {
    wp_redirect(esc_url(home_url('/')));
    exit;
  }
}