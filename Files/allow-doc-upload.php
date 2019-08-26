<?php 

add_filter('upload_mimes','my_add_custom_mime_types');
function my_add_custom_mime_types($mimes) {
	return array_merge($mimes,array(
		'doc' => 'application/msword',
		'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
	));
}