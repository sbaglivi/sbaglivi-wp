<?php
add_filter('show_admin_bar', '__return_false');
function enqueue_stylesheets()
{
	$version = wp_get_theme()->get('Version');
	wp_enqueue_style("maincss", get_template_directory_uri() . "/style.css", array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_stylesheets');
function enqueue_scripts()
{
	wp_enqueue_script("mainjs", get_template_directory_uri() . "/index.js", array(), "1.0", true);
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function multiple_add_theme_support()
{
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'multiple_add_theme_support');

function create_navbar_menu()
{
	$location = array(
		'primary' => 'Navbar Menu'
	);
	register_nav_menus($location);
}
add_action('init', 'create_navbar_menu');

function wpdocs_remove_website_field($fields)
{
	unset($fields['url']);
	return $fields;
}

add_filter('comment_form_default_fields', 'wpdocs_remove_website_field');
