<? php
if ( ! function_exists( 'validity_setup' ) ) :
/**
* Sets up theme defaults and registers support for various WordPress features
*
*  It is important to set up these functions before the init hook so that none of these
*  features are lost.
*
*  @since validity-theme 1.0
*/

function validity_setup() {
  /* Add support for two custom navigation menus.*/
  register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'validity' ),
    'secondary' => __( 'Secondary Menu', 'validity' )
  ) );

  /* Enable support for post thumbnails and featured images.*/
  add_theme_support( 'post-thumbnails' );
  /* Enable support for the following post formats: aside, gallery, quote, image, and video */
  add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
};

endif; // validity_setup
add_action( 'after_setup_theme', 'validity_setup' );
