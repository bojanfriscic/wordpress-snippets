<?php 

// Logo must me 16x16 px 
// Upload the logo in your theme's assets/images folder

add_action('wp_before_admin_bar_render', 'my_custom_logo');
function my_custom_logo() {
  echo '
    <style type="text/css">
      #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
        background-image: url(' . get_bloginfo('stylesheet_directory') . '/assets/images/logo.png) !important;
        background-position: 0 0;
        color:rgba(0, 0, 0, 0);
      }
      #wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
        background-position: 0 0;
      }
    </style>
  ';
}
