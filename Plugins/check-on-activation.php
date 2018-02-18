<?php

register_activation_hook(__FILE__, 'my_activate_plugin');
function my_activate_plugin() {
  //Check if current version of WP is compatible with the plugin
  if(version_compare(bloginfo('version'), '4.5', '<')) {
    wp_die(__('Please update your Wordpress installation to use this plugin.'), 'plugin');
  }
}