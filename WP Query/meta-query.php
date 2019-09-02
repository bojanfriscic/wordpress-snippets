<?php 

$args = array(
  'post_type'       => 'your_post_type',
  'posts_per_page'  => -1,
  'meta_key'        => 'field_key',
  'meta_query'      => array(
    array(
      'key'         => 'field_key',
      'value'       => 'your_value',
      'compare'     => 'comparison_operator'
    )
    ),
    'orderby'       => 'meta_value',
    'order'         => 'ASC'
);

$query = new WP_Query($args);

// The loop ...