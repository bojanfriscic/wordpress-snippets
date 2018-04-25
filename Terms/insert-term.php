<?php 

add_action('init', 'add_my_cats');
function add_my_cats() {
  
  if(!term_exists('Term name', 'term-parent')) {
    wp_insert_term(
      'Term name',
      'term-parent',
      array(
        'description' =>  'My term description',
        'slug'        =>  'term-name'
      )
    );
  }

}