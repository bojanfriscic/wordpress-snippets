<?php 

dd_action('admin_menu', 'my_options_page');
function my_options_page() {
  $page_title = 'Options page';
	$menu_title = 'Options page';
	$capability = 'manage_options';
	$slug = 'my_options';
	$callback = 'my_options_content';
	$icon = 'dashicons-clipboard';
  $position = 100;
  
  add_menu_page($page_title, $menu_title, $capability, $slug, $callback, $icon, $position);
}

function my_options_content() {
?>
  <div class="wrap">
    <h1>This is my options page</h1>
  </div><!-- /.wrap -->
<?php 
}