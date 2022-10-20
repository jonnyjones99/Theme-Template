<?php
function Myenqueues()
{
	$base = get_template_directory_uri() . '/';
	wp_enqueue_script('jquery', true);

	// Main Stuff
	wp_enqueue_style('my-main-style', get_stylesheet_uri(), false, time());
	wp_enqueue_style('scss', $base . '/assets/scss/style.scss', false, time());
	wp_enqueue_script('functionsJS', $base . '/assets/js/functions.js', array('jquery'), time(), true);

	// GSAP Stuff
	wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js', array('jquery'), null, true);
	wp_enqueue_script('scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js', array('jquery'), null, true);
	wp_enqueue_script('smoothScroller', $base . 'assets/js/ScrollSmoother.min.js', ['jquery'], null, true);
	wp_enqueue_script('anims', $base . 'assets/js/gsap-animations.js', ['jquery'], null, true);

	// Swiper stuff
	wp_enqueue_script('swiperJS', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', ['jquery'], null, true);
	wp_enqueue_style('swiperCSS', 'https://unpkg.com/swiper@7/swiper-bundle.min.css', false, time());
	wp_enqueue_script('swiperFunctions', $base . 'assets/js/swiper-functions.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'Myenqueues', 'themeprefix_tab_scripts');


// Register wordpress menus
function register_my_menus()
{
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu'),
			'footer-menu-1' => __('Footer Menu 1'),
			'footer-menu-2' => __('Footer Menu 2'),
		)
	);
}
add_action('init', 'register_my_menus');


// Enable 'featured images'
function mytheme_post_thumbnails()
{
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mytheme_post_thumbnails');


// ACF Options pages
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}
