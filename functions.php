<?php
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) {
	return 200;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

$header_image_args=array(
	'width'		=> 198,
	'default-image' => get_template_directory_uri().'/images/header.jpg',
	'uploads'	=> true,
);

add_theme_support('custom-header', $header_image_args);

function register_custom_menus() {
	register_nav_menus(array(
		'header-menu'=>__('Header Menu'),
		'frontpage-menu'=>__('Frontpage Menu'),
		'follow-menu'=>__('"Follow Me On" Menu')
		));
}
add_action('init','register_custom_menus')

?>
