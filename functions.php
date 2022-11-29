<?php
/**
 * ibrahimportfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ibrahimportfolio
 */
add_action( 'after_setup_theme', 'ibrahimportfolio_setup' );

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '2.0' );
}

function ibrahimportfolio_setup() {

	//CodeStar Framework Required
	require_once get_theme_file_path() .'/theme-options/codestar-framework.php';
	require_once get_theme_file_path() .'/theme-options/custom-admin-options.php';
	// require_once get_theme_file_path() .'/theme-options/samples/admin-options.php';


	load_theme_textdomain( 'ibrahimportfolio', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'ibrahimportfolio' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'ibrahimportfolio_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}



function ibrahimportfolio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ibrahimportfolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'ibrahimportfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ibrahimportfolio_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ibrahimportfolio' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ibrahimportfolio' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ibrahimportfolio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ibrahimportfolio_scripts() {
	wp_enqueue_style( 'ibrahimportfolio-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'ibrahimportfolio-style', 'rtl', 'replace' );

	wp_enqueue_script( 'ibrahimportfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

// Header Script and Style

	// <!-- font icons -->
	wp_enqueue_style( 'fontstyle', get_template_directory_uri() . '/assets/vendors/themify-icons/css/themify-icons.css', array(), null, 'all');
	// <!-- Bootstrap + JohnDoe main styles -->
	wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/assets/css/johndoe.css', array(), null, 'all');

// Footer Script and Style

	// <!-- core  -->
	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/assets/vendors/jquery/jquery-3.4.1.js', null, null, true);
	wp_enqueue_script( 'mainbs', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.bundle.js', null, null, true);
	// <!-- bootstrap 3 affix -->
	wp_enqueue_script( 'bsaffix', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.affix.js', null, null, true);
	// <!-- Isotope  -->
	wp_enqueue_script( 'bsisotope', get_template_directory_uri() . '/assets/vendors/isotope/isotope.pkgd.js', null, null, true);
	// <!-- Google mpas -->
	?> <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script> <?php
	// <!-- JohnDoe js -->
	wp_enqueue_script( 'jdjs', get_template_directory_uri() . '/assets/js/johndoe.js', null, null, true);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'ibrahimportfolio_scripts' );


require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

