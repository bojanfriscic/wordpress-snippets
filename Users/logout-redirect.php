<?php

add_action('wp_logout', 'my_redirect_after_logout');
function my_redirect_after_logout() {
  wp_redirect(esc_url(home_url('/')));
  exit;
}