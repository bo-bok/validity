<?php
/*
  Template Name: Generic template with image
*/
/**
 * The template for displaying a Generic Page With An Image
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package validity
 */

get_header(); ?>


<body class="page-generic-template">
  <div class="wrapper">
  <?php get_sidebar(); ?> <!-- sidebar = nav -->

  <section class="section-1">
    <div class="outer full-height centered">
      <div class="inner transition">

        <div class="generic-template-content">
          <div class="generic-template-content-container">
            <div class="text-with-image-container">
              <div class="text">
                <h1 class="group-heading">
                  <p><?php the_title(); ?></p>
                </h1>

                <?php
                  // TO SHOW THE PAGE CONTENTS
                  while ( have_posts() ) : the_post(); ?>
                  <p><?php the_content(); ?></p>

              </div>
              <div class="image-gen">
                <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
                <div class="outer full-height generic-poster" style="background-image: url('<?php echo $backgroundImg[0]; ?>')"></div>
                <?php
                  endwhile; //resetting the page loop
                  // wp_reset_query(); //resetting the page query
                  ?>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer(); ?>
</div>
