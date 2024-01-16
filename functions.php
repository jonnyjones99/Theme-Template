<?php
// Register theme defaults.
add_action('after_setup_theme', function () {
	show_admin_bar(false);
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');

	register_nav_menus([
		'header-mobile' => __('Header Mobile Menu'),
		'header-menu' => __('Header Menu'),
		'footer-menu-1' => __('Footer Menu 1'),
	]);
});

// Enqueue scripts and styles.
add_action('wp_enqueue_scripts', function () {
	$base = get_template_directory_uri() . '/';
	wp_enqueue_script('jquery', true);

	// Main Stuff
	wp_enqueue_style('my-main-style', get_stylesheet_uri(), false, time());
	wp_enqueue_style('scss', $base . 'assets/scss/style.css', false, false);
	wp_enqueue_script('functionsJS', $base . 'assets/js/functions.js', array('jquery'), time(), true);

	// Swiper stuff
	wp_enqueue_script('swiperJS', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', ['jquery'], null, true);
	wp_enqueue_style('swiperCSS', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', false, time());
	wp_enqueue_script('swiperFunctions', $base . 'assets/js/swiper-functions.js', ['jquery'], null, true);
});


// Remove admin menu items.
add_action('admin_init', function () {
	remove_menu_page('edit-comments.php'); // Comments
	//remove_menu_page('edit.php?post_type=page'); // Pages
	remove_menu_page('edit.php'); // Posts
	//remove_menu_page('index.php'); // Dashboard
	// remove_menu_page('upload.php'); // Media
});

// Remove admin toolbar menu items.
add_action('admin_bar_menu', function (WP_Admin_Bar $menu) {
	$menu->remove_node('comments'); // Comments
	$menu->remove_node('customize'); // Customize
	$menu->remove_node('dashboard'); // Dashboard
	$menu->remove_node('edit'); // Edit
	$menu->remove_node('menus'); // Menus
	$menu->remove_node('new-content'); // New Content
	$menu->remove_node('search'); // Search
	// $menu->remove_node('site-name'); // Site Name
	$menu->remove_node('themes'); // Themes
	$menu->remove_node('updates'); // Updates
	$menu->remove_node('view-site'); // Visit Site
	$menu->remove_node('view'); // View
	$menu->remove_node('widgets'); // Widgets
	$menu->remove_node('wp-logo'); // WordPress Logo
}, 999);

// Remove admin dashboard widgets.
add_action('wp_dashboard_setup', function () {
	global $wp_meta_boxes;

	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']); // Activity
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']); // At a Glance
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_site_health']); // Site Health Status
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); // WordPress Events and News
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); // Quick Draft
});

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

//Soil
add_action('after_setup_theme', function () {
	/**
	 * Enable features from the Soil plugin if activated.
	 */
	add_theme_support('soil', [
		'clean-up', // Cleaner WordPress markup
		// 'disable-rest-api', // Disable REST API
		'disable-asset-versioning', // Remove asset versioning
		'disable-trackbacks', // Disable trackbacks
		'js-to-footer', // Move JS to footer
		'nice-search', // Redirect /?s=query to /search/query
		'relative-urls', // Convert absolute URLs to relative URLs
	]);
});
