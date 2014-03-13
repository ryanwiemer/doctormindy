<?php
/**
 * doctormindy functions and definitions
 *
 * @package doctormindy
 */


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
	wp_enqueue_style( 'doctormindy-style',  get_stylesheet_directory_uri() . '/assets/css/style.min.css' );
	wp_enqueue_script( 'doctormindy-script',  get_template_directory_uri() . '/assets/js/global.min.js', array('jquery-core'));

}
add_action( 'wp_enqueue_scripts', 'doctormindy_scripts' );


