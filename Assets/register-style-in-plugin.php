<?php

add_action('init', 'my_enqueue_plugin_assets');
function my_enqueue_plugin_assets()
{
    wp_register_style('mystyle', get_theme_file_uri('/assets/css/mystyle.css'));
    wp_enqueue_style('mystyle');
}
