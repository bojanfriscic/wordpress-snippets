<?php 

$args = array(
  'post_type'       => 'your_post_type',
  'posts_per_page'  => -1,
  'meta_key'        => 'acf_field_name',
  'orderby'         => 'meta_value',
  'order'           => 'asc'
);

$query = new WP_Query($args);