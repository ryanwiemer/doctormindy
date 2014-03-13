<?php
/**
 * doctormindy functions and definitions
 *
 * @package doctormindy
 */

if ( ! function_exists( 'doctormindy_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function doctormindy_setup() {

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'doctormindy' ),
	) );

}
endif; // doctormindy_setup
add_action( 'after_setup_theme', 'doctormindy_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function doctormindy_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'doctormindy' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'doctormindy_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function doctormindy_scripts() {
	wp_enqueue_style( 'doctormindy-style', get_template_directory_uri() . '/assets/css/style.min.css' );

}
add_action( 'wp_enqueue_scripts', 'doctormindy_scripts' );


/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
