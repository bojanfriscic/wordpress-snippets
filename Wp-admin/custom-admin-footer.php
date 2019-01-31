<?php 

add_filter('admin_footer_text', 'my_custom_admin_footer');
function my_custom_admin_footer() {
  echo 'This is my custom admin footer.';
}