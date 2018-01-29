<?php 

//Remove version number
remove_action('wp_head', 'wp_generator');
add_filter('the_generator', '__return_empty_string');

//Remove version number from styles and scripts
add_filter('style_loader_src', 'remove_script_version', 999);
add_filter('script_loader_src', 'remove_script_version', 999);
function remove_script_version($src) {
    if(strpos($src, '?ver=') || strpos($src, 'ver=')) {
        $src = remove_query_arg( 'ver', $src );
    }
    return $src;
}