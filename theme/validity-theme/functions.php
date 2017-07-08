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

	add_theme_support( 'menus' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary-menu' => esc_html__( 'Primary', 'validity' ),
	) );

	// this function makes WP recognise our menu(s)
// function register_theme_menus() {
//   register_nav_menus(
//     array(
//       'primary-menu' => __( 'Primary Menu' ),
//     )
//   );
// }
// add_action( 'init', 'register_theme_menus' );

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

	if ( is_page( 'resources' ) || is_page( 'take-action' ) ) {
		wp_register_script( 'hide-hint', get_template_directory_uri() . '/js/hide-hint.js', 'validity_require');
		wp_enqueue_script('hide-hint');
	}


	// if (is_page('/') || is_page('donation') || is_page('im-a-person')) {
	// 	wp_register_script( 'display-hint', get_template_directory_uri() . '/js/display-hint.js', 'validity_require');
	// 	wp_enqueue_script('display-hint');
	// };

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'validity_scripts' );


// remove wp header whitespace margin (32px margin-top on html)
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}


function searchfilter($query) {
  if ($query->is_search && !is_admin() ) {
      $query->set('post_type',array('post'));
  }
return $query;
}

add_filter('pre_get_posts','searchfilter');
