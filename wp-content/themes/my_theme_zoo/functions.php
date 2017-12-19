<?php
function enqueue_styles() {
	wp_enqueue_style('my-style', get_stylesheet_uri() , array() , time());
	wp_register_style('owl-carousel-min', get_template_directory_uri().'/lib/owl.carousel.min.css');
	wp_enqueue_style('owl-carousel-min');
	wp_register_style('owl-theme-default-min', get_template_directory_uri().'/lib/owl.theme.default.min.css');
	wp_enqueue_style('owl-theme-default-min');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
	wp_register_script('jquery-3-2-1-min', get_template_directory_uri().'/lib/jquery-3.2.1.min.js');
	wp_enqueue_script('jquery-3-2-1-min');
	wp_register_script('owl.carousel.min', get_template_directory_uri().'/lib/owl.carousel.min.js');
	wp_enqueue_script('owl.carousel.min');
	wp_register_script('app-js', get_template_directory_uri().'/app.js');
	wp_enqueue_script('app-js');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}

remove_filter('the_content', 'wpautop');
?>