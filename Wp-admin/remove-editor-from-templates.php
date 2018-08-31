<?php 

add_action('admin_head', 'remove_editor_from_page');
function remove_editor_from_page() {
  if(isset($_GET['post'])) {
		$id = $_GET['post'];
		$template = get_post_meta($id, '_wp_page_template', true);

		if($template = 'page-template.php') {
			remove_post_type_support('page', 'editor');
		}
	}
}