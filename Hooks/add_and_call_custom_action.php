<?php 

// In functions.php - Add custom action hook
add_action('my_action_hook', 'my_action_function');
function my_action_function() {
  echo 'Do your stuff';
}

// In template files - Do action if it wasn't called before in the theme
if(did_action('my_action_hook') === 0) do_action('my_action_hook');