<?php
/**
 * validity functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package validity
 */

if (! function_exists('validity_setup')) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function validity_setup()
{

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

        // add theme support for custom menus
    add_theme_support('menus');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
        'primary-menu' => esc_html__('Primary', 'validity'),
    ));

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Set up the WordPress core custom background feature.
    add_theme_support('custom-background', apply_filters('validity_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    )));
}
endif;
add_action('after_setup_theme', 'validity_setup');


/**
 * Enqueue scripts and styles.
 */
function validity_scripts()
{
    wp_enqueue_style('validity-style', get_stylesheet_uri());
    wp_register_script('validity_require', get_template_directory_uri() . '/js/require.js');
    wp_enqueue_script('validity_require');

    wp_register_script('validity_app', get_template_directory_uri() . '/js/app.js', 'validity_require');
    wp_enqueue_script('validity_app');

        // hides 'learn more' prompt on the pages which only occupy one screen (aka don't have scrollable content)
    if (is_page('resources') || is_page('take-action') || is_page('contact')) {
        wp_register_script('hide-hint', get_template_directory_uri() . '/js/hide-hint.js', 'validity_require');
        wp_enqueue_script('hide-hint');
    }
}
add_action('wp_enqueue_scripts', 'validity_scripts');


// remove wp header whitespace margin (32px margin-top on html)
function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');




// This function controls the dearch features
// it filters by the country category and the content-type category
// it limits search results to posts (this does not include and therefore excludes custom post types, aka our site content)

function search_by_cat($query)
{
    if ($query->is_search && !is_admin())
    {
        $country = empty( $_GET['countries'] ) ? '' : (int) $_GET['countries'];
        $contentType = empty( $_GET['content-type'] ) ? '' : (int) $_GET['content-type'];

        $query->set('cat', array($country, $contentType));
        $query->set('post_type', array('post'));
    }
    return $query;
}
add_action( 'pre_get_posts', 'search_by_cat' );
