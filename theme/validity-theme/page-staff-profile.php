<?php
/*
  Template Name: Staff Profile Page
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
  <!-- body class will have some margin -->
  <div class="wrapper">
    <?php get_sidebar(); ?> <!-- sidebar = nav -->

      <section class="section-1">
        <div class="outer full-height centered with-footer">
          <div class="inner transition">
            <?php $individual_profile = new WP_Query(array(
              'post_type' => 'profile'
            )); ?>
            <?php while ($individual_profile->have_posts()) : $individual_profile->the_post(); ?>
              <div><?php the_field('first_name'); ?></div>
              <div><?php the_field('last_name'); ?></div>
              <div><?php the_field('description'); ?></div>
              <div><?php the_field('location'); ?></div>
              <div><?php the_field('twitter'); ?></div>
              <button>Back to staff page</button>
            <?php endwhile; ?>
            </div>
        </div>
    </section>
    </div>
</body>

<?php get_footer(); ?>
