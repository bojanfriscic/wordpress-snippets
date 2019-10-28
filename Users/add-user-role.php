<?php 

add_role(
  'user_role_name', 
  __('User Role Name', 'text_domain'),
  array(
    'read'            => true,
    'create_posts'    => false,
    'edit_posts'      => false
  )
);