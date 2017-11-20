<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
              <img src="<?php the_field('image') ?>" />
              <h1 class="group-heading">
                <?php the_field('first_name') ?>
                <?php the_field('last_name') ?>
              </h1>

              <p><?php the_field('description') ?></p>
              <p><?php the_field('location') ?></p>
              <p><?php the_field('twitter') ?></p>
              <a href="/who-we-are" onclick="window.history.go(-1)"  class="button_transparent anchor">Back to Staff</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer(); ?>
</div>
