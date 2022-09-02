<?php
/**
 * UnderStrap functions and definitions
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/block-editor.php',                    // Load Block Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( 'parent-new-style', get_template_directory_uri() . '/style-new.css' );

	wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/slick/slick.min.js', '', null, true);
    wp_enqueue_style( 'slick-style', get_stylesheet_directory_uri() . '/slick/slick.css' );
	wp_enqueue_style( 'slick-theme-style', get_stylesheet_directory_uri() . '/slick/slick-theme.css' );

	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', '', null, true);
}

//ACF OPTIONS PAGE
if( function_exists('acf_add_options_page') ) {
	
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

function wpb_custom_new_menu() {
	register_nav_menu('footer-col-1',__( 'Footer Column 1' ));
	register_nav_menu('footer-col-2',__( 'Footer Column 2' ));
	register_nav_menu('footer-col-3',__( 'Footer Column 3' ));
	register_nav_menu('footer-col-4',__( 'Footer Column 4' ));

}
add_action( 'init', 'wpb_custom_new_menu' );

add_shortcode( 'kyla', 'kyla');

function kyla(){
	?>
		<div id="carousel">
			<div class="carousel-container container">
				<div class="carousel-s-item">
					<img src="" alt="">
				</div>
				<div class="carousel-s-item">
					<img src="" alt="">
				</div>
				<div class="carousel-s-item">
					<img src="" alt="">
				</div>
				<div class="carousel-s-item">
					<img src="" alt="">
				</div>
			</div>
		</div>
	<?php
}

function filter_wpseo_breadcrumb_separator($this_options_breadcrumbs_sep) {
    return '<span class="separator">/</span>';
}

// add the filter
add_filter('wpseo_breadcrumb_separator', 'filter_wpseo_breadcrumb_separator', 10, 1);