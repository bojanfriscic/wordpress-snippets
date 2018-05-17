<?php 

add_filter('gettext', 'my_string_replace');
function my_string_replace($text) {
  $text = str_replace('Old', 'New', $text);
  return $text;
}