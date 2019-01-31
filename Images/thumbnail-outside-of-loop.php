<?php 

global $post;
$image_arr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');

if(!empty($image_arr)) {
  $image = $image_arr[0];
}