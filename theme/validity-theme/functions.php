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

function search_by_cat($query)
{
    if ($query->is_search && !is_admin())
    {
        $country = empty( $_GET['countries'] ) ? '' : (int) $_GET['countries'];
        $contentType = empty( $_GET['content-type'] ) ? '' : (int) $_GET['content-type'];
        $searchQuery = empty(get_search_query()) ? '' : get_search_query();

        $termsParams = array();
        $operator = 'OR';


          // if only criteria for country query is set
          // if the free text field and country field have been used, display any results which are of both the free text search and of that country
          if ($country != -1 && $contentType == -1) {
            array_push($termsParams, $country);
            $operator = 'AND';
            // if only criteria for contentType query is set
            // if the free text field and content type field have been used, display results which are of the both free text search and of that content types
          } elseif ($country == -1 && $contentType != -1) {
            array_push($termsParams, $contentType);
            $operator = 'AND';
          } elseif ($country != -1 && $contentType != -1) {
            array_push($termsParams, $contentType, $country);
            $operator = 'AND';
          }

          $taxquery = array(
            array(
              'taxonomy' => 'category',
              'field' => 'id',
              // 'terms' => $termsParams,
              'terms' => $termsParams,
              'operator'=> $operator
            )
          );

        $query->set('post_type', array('post'));
        $query->set( 'tax_query', $taxquery );
    }
    return $query;
}
add_action( 'pre_get_posts', 'search_by_cat' );


function my_load_ajax_content () {

    $pid = $_POST['value'];

    $the_query  = new WP_Query(array('category_name' => $pid));
    $img_url = get_template_directory_uri();

    $data = '<img class="map" src="' . $img_url . '/assets/img/countries/' . strtolower($pid) . '.png"></img><div class="news-articles">';

    if ($the_query->have_posts()) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();

            $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');

            $data .= '
            <div class="article">
              <a href='.get_the_permalink().' title='.get_the_title().' class="article__image" data-layout="3x4" style="background-image: url('.$backgroundImg[0].');"></a>

              <p class="article__title">
                <a href='.get_the_permalink().' title='.get_the_title().'">
                  '.get_the_title().'
                </a>
              </p>
            </div>
            ';

        }
    }
    else {
      echo '<div id="postdata"><img class="map" src="' . $img_url . '/assets/img/countries/' . strtolower($pid) . '.png"></img>'.__('No resources were found for this country', THEME_NAME) . '</div>';
    }
    wp_reset_postdata();


    echo '<div id="postdata">'.$data.'</div></div>';
    die();
}



add_action ( 'wp_ajax_nopriv_load-content', 'my_load_ajax_content' );
add_action ( 'wp_ajax_load-content', 'my_load_ajax_content' );
add_action( 'wp_ajax_my_load_ajax_content', 'my_load_ajax_content' );
add_action( 'wp_ajax_nopriv_my_load_ajax_content', 'my_load_ajax_content' );



function my_enqueue() {

    wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/page-where-we-work.php', array('jquery') );

    wp_localize_script( 'ajax-script', 'my_ajax_object',
            array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue' );



if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

add_action ( 'wp_ajax_nopriv_load-content', 'my_load_ajax_content' );
add_action ( 'wp_ajax_load-content', 'my_load_ajax_content' );

/* Change default wordpress Excerpt length */
function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



// Custom Excerpt function for Advanced Custom Fields
function custom_field_excerpt($fieldName, $excerptLength) {
	global $post;
	$text = get_field($fieldName); //Replace 'your_field_name'
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]&gt;', ']]&gt;', $text);
		$excerpt_length = $excerptLength; // 20 words
		$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}
