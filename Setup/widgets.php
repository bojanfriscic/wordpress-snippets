<?php 

add_action('widgets_init', 'my_widgets');
function my_widgets() {
  register_sidebar(array(
    'name'          =>  __('My Widget', 'mytheme'),
    'id'            =>  'my_widget',
    'description'   =>  __('My Simple Widget', 'mytheme');
    'before_widget' =>  '<section class="my-widget">',
    'after_widget'  =>  '</section>',
    'before_title'  =>  '<h3 class="my-widget-title">',
    'after_title'   =>  '</h3>'
  ));
}