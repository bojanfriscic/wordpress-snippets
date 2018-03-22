<?php 

add_shortcode('content-shortcode', 'my_content_shortcode');
function($atts, $content = null) {
  return '<div class="my-content-wrapper">' . $content . '</div>';
}