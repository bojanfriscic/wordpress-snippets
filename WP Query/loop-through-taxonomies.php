<?php 

$taxonomies = get_terms(array(
  'taxonomy'      => 'tax-slug',
  'orderby'       => 'term_id',
  'order'         => 'ASC'
));

foreach($taxonomies as $tax) {
  $args = array(
    'post_type'         => 'custom_post_type',
    'tax_query'         => array(
      array(
        'taxonomy'      => 'tax-slug',
        'field'         => 'slug',
        'terms'         => array($tax->slug),
        'operator'      => 'IN'
      )
    )
  );

  $tax_query = new WP_Query($args);

  echo '<h2>' . $tax->name . '</h2>';

  if($tax_query->have_posts()) {
    while($tax_query->have_posts()) {
      $tax_query->the_post();

      the_title();
    }
  }

  $tax_query = null;
  wp_reset_postdata();
}