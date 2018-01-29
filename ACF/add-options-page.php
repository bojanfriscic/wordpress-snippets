<?php

if(function_exists('acf_add_options_page') && function_exists('acf_add_options_sub_page')) {
    $args = array(
        'page_title'    =>  'My ACF Options Page',
        'menu_title'    =>  'My ACF Options Page',
        'menu_slug'     =>  'my_acf_options_page',
        'icon_url'      =>  'dashicons-admin-site'
    );
    acf_add_options_page($args);
}