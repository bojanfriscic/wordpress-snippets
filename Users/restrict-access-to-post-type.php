<?php 

add_action('template_redirect', 'my_restrict_access_to_post_type');
function my_restrict_access_to_post_type() {
  $post_type = 'my_custom_post_type';
  $user_role = 'admin'
  $login_page = esc_url(home_url('/member-login'));

  if(is_singular($post_type) || is_post_type_archive($post_type)) {
    if(!is_user_logged_in() && !current_user_can($user_role)) {
      wp_redirect($login_page);
    }
  }
}