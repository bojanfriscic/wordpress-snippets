<?php 

add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup() {
	$menus = array(
		'main'		=>	__('Main Menu', 'text-domain'),
		'sitemap'	=>	__('Sitemap', 'text-domain'),
		'privacy'	=>	__('Privacy', 'text-domain'),
		'social'	=>	__('Social Networks', 'text-domain')
	);
  register_nav_menus($menus);
}