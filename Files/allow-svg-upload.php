<?php 

add_filter('upload_mimes', 'my_mime_types');
function my_mime_types($mimes)  {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}