<?php 

add_action('init', 'my_enqueue_assets');
function my_enqueue_assets() {
  wp_register_script('myscript', get_theme_file_uri('/assets/js/myscript.js'));
  wp_enqueue_script('myscript', get_template_directory_uri() . '/assets/js/myscript.js', array('jquery'), '1', true);
}