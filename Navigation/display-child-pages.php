<?php 

global $post;

if(is_page() && $post->post_parent) {
  $children = wp_list_pages('sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0');
} else {
  $children = wp_list_pages('sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0'); 
}

$output = '<div class="table-of-contents">';
  $output	.= '<h2 class="table-of-contents__heading">' . __('Table of Contents', 'text-domain') . '</h2>';
  $output .= '<ul class="table-of-contents__list">' . $children . '</ul>';
$output .= '</div>';

echo $output;