<?php
/**
 * The template for displaying all profiles (e.g trustee, staff, partner etc)
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
    <div class="outer full-height centered">
      <div class="inner transition">

        <?php if (get_field('image')): ?>
          <div class="profile-with-image">

            <div class="profile-text-container">
              <h1 class="profile-heading">
                <?php the_field('first_name') ?>
                <?php the_field('last_name') ?>
              </h1>

              <p><?php the_field('description') ?></p>
              <p><?php the_field('location') ?></p>
              <p><?php the_field('twitter') ?></p>
              <a href="/who-we-are" onclick="window.history.go(-1)"  class="button_transparent anchor">Back to Staff</a>
            </div>

            <div class="profile-image-container">
              <img src="<?php the_field('image') ?>" class="profile-image"/>
            </div>
          </div>

        <?php else: ?>
          <div>
            <h1 class="profile-heading">
              <?php the_field('first_name') ?>
              <?php the_field('last_name') ?>
            </h1>

            <p><?php the_field('description') ?></p>
            <p><?php the_field('location') ?></p>
            <p><?php the_field('twitter') ?></p>
            <a href="/who-we-are" onclick="window.history.go(-1)"  class="button_transparent anchor">Back to Staff</a>
          </div>
        <?php endif ?>

      </div>
    </div>
  </section>

<?php
get_footer(); ?>
</div>
