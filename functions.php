<?php
add_action('after_setup_theme', function() {
	register_nav_menus( array(
		'mainmenu' => 'Main Menu',
	) );
});

add_theme_support( 'post-thumbnails', array( 'post' ) );
add_theme_support( 'post-thumbnails', array( 'page' ) );

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Параметры',
		'menu_title'	=> 'Параметры',
		'menu_slug' 	=> 'acf-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	return '<nav class="pagination %1$s" role="navigation">%3$s</nav>';
}