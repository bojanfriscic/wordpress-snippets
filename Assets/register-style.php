<?php

add_action('init', 'my_enqueue_assets');
function my_enqueue_assets()
{
    wp_register_style('mystyle', plugins_url('css/style.css', __FILE__));
    wp_enqueue_style('mystyle');
}
