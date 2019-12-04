<?php

add_filter('get_the_archive_title', 'lt_remove_archive_types_from_titles');
function lt_remove_archive_types_from_titles($title) {
	if (is_category()) {
		$title = single_cat_title('', false);
	} elseif (is_tag()) {
		$title = single_tag_title('', false);
	}
	
	return $title;
}