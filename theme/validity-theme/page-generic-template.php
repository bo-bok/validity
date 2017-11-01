<?php
/*
  Template Name: Generic template
*/
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package validity
 */

get_header(); ?>


<body class="page-staff-profile">
  <div class="wrapper">
  <?php get_sidebar(); ?> <!-- sidebar = nav -->

  <section class="section-1">
    <div class="outer full-height centered" id="honorary-president">
      <div class="inner transition">

        <div class="who-we-are-members">
          <div class="group">
            <div class="overview">
              <h1 class="group-heading">
                <p><?php the_title(); ?></p>
              </h1>

              <?php
                // TO SHOW THE PAGE CONTENTS
                while ( have_posts() ) : the_post(); ?>
              <p><?php the_content(); ?></p>
              <?php
                endwhile; //resetting the page loop
                // wp_reset_query(); //resetting the page query
                ?>
              <a href="/who-we-are" onclick="window.history.go(-1)"  class="button_transparent anchor">Back</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer(); ?>
</div>
