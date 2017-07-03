<?php
/**
 * validity functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package validity
 */

if ( ! function_exists( 'validity_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function validity_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on validity, use a find and replace
	 * to change 'validity' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'validity', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'validity' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'validity_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
endif;
add_action( 'after_setup_theme', 'validity_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
// function validity_content_width() {
// 	$GLOBALS['content_width'] = apply_filters( 'validity_content_width', 640 );
// }
// add_action( 'after_setup_theme', 'validity_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// function validity_widgets_init() {
// 	register_sidebar( array(
// 		'name'          => esc_html__( 'Sidebar', 'validity' ),
// 		'id'            => 'sidebar-1',
// 		'description'   => esc_html__( 'Add widgets here.', 'validity' ),
// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 		'after_widget'  => '</section>',
// 		'before_title'  => '<h2 class="widget-title">',
// 		'after_title'   => '</h2>',
// 	) );
// }
// add_action( 'widgets_init', 'validity_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function validity_scripts() {
	wp_enqueue_style( 'validity-style', get_stylesheet_uri() );

	wp_register_script( 'validity_require', get_template_directory_uri() . '/js/require.js' );
	wp_enqueue_script('validity_require');

	wp_register_script( 'validity_app', get_template_directory_uri() . '/js/app.js', 'validity_require');

	wp_enqueue_script('validity_app');


	// $my_js_dir = array(
  //   ‘path’ => get_stylesheet_directory_uri() . '/js'
	// );
	// wp_localize_script( ‘the_dependent’, ‘the_variable_reference’, $my_js_dir );

// without require as a dependency
	// wp_enqueue_script( 'validity_app-js', get_template_directory_uri() . '/js/app.js' );
	// wp_enqueue_script( 'validity_carousel', get_template_directory_uri() . '/js/carousel.js' );
	// wp_enqueue_script( 'validity_common', get_template_directory_uri() . '/js/common.js' );
	// wp_enqueue_script( 'validity_donation-form', get_template_directory_uri() . '/js/donation-form.js' );
	// wp_enqueue_script( 'validity_dropdown', get_template_directory_uri() . '/js/dropdown.js' );
	// wp_enqueue_script( 'validity_event-form', get_template_directory_uri() . '/js/event-form.js' );
	// wp_enqueue_script( 'validity_ie', get_template_directory_uri() . '/js/ie.js' );
	// wp_enqueue_script( 'validity_page', get_template_directory_uri() . '/js/page.js' );
	// wp_enqueue_script( 'validity_polyfill', get_template_directory_uri() . '/js/polyfill.js' );



// with require as a dependency
	// wp_enqueue_script( 'validity_require', get_template_directory_uri() . '/js/require.js', '', '', false);
	// //
	// wp_enqueue_script( 'validity_app', get_template_directory_uri() . '/js/app.js', array('validity_require'), '', false);
	//
	// wp_enqueue_script( 'validity_carousel', get_template_directory_uri() . '/js/carousel.js', array('validity_require'), '', false);
	//
	// wp_enqueue_script( 'validity_common', get_template_directory_uri() . '/js/common.js', array('validity_require'), '', false);
	//
	// wp_enqueue_script( 'validity_donation-form', get_template_directory_uri() . '/js/donation-form.js', array('validity_require'), '', false);
	//
	// wp_enqueue_script( 'validity_dropdown', get_template_directory_uri() . '/js/dropdown.js', array('validity_require'), '', false);
	//
	// wp_enqueue_script( 'validity_event-form', get_template_directory_uri() . '/js/event-form.js', array('validity_require'), '', false);
	//
	// wp_enqueue_script( 'validity_ie', get_template_directory_uri() . '/js/ie.js', array('validity_require'), '', false);
	//
	// wp_enqueue_script( 'validity_page', get_template_directory_uri() . '/js/page.js', array('validity_require'), '', false);
	//
	// wp_enqueue_script( 'validity_polyfill', get_template_directory_uri() . '/js/polyfill.js', array('validity_require'), '', false);
	//
	//
	//

	// wp_enqueue_script( 'validity-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	//
	// wp_enqueue_script( 'validity-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'validity_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Additional features to allow styling of the templates.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
