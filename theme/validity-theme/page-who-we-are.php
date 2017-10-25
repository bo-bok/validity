<?php
/*
  Template Name: Who We Are Page
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

<body class="page-who-we-are">
  <div class="wrapper">
  <?php get_sidebar(); ?> <!-- sidebar = nav -->

<section class="section-1">
  <div class="outer full-height centered">
    <div class="inner transition">

      <div class="who-we-are-intro">
        <div class="container has-button">
          <h1 class="page-heading">Who we are</h1>
          <?php $pageContent = new WP_Query(array(
              'post_type' => 'who_we_are'
            )); ?>

            <?php while ($pageContent->have_posts()) : $pageContent->the_post(); ?>
              <?php the_field('description');?>
            <?php endwhile; ?>

          <a href="#honorary-president" class="button_transparent anchor">Honorary President</a>
          <a href="#trustees" class="button_transparent anchor">Trustees</a>
          <a href="#our-team" class="button_transparent anchor">Our Team</a>
          <a href="#partners" class="button_transparent anchor">Partners</a>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="section-2">
  <div class="outer full-height centered" id="honorary-president">
    <div class="inner transition">

      <div class="who-we-are-members">

        <?php $partners_intro = new WP_Query(array(
            'post_type' => 'who_we_are',
            'orderby' => 'menu_order'
          )); ?>

        <div class="group">
          <div class="overview">
            <h1 class="group-heading">Honorary President</h1>

            <!-- fetch partners introduction text -->
            <?php $individual_profile = new WP_Query(array(
              'post_type' => 'profile'
            )); ?>
            <?php while ($individual_profile->have_posts()) : $individual_profile->the_post(); ?>

              <?php if (get_field('role') == 'honorary-president'): ?>

                <div class="member">
                  <h1 class="member__title">
                    <a href="<?php the_permalink(); ?>">
                      <span>
                        <?php the_field('first_name'); ?>
                        <?php the_field('last_name'); ?>
                      </span>
                    <?php the_field('role'); ?>
                    </a>
                  </h1>
                  <p class="member__excerpt">
                    <?php the_field('description'); ?>
                  </p>
                </div>

              <?php endif; ?>
            <?php endwhile; ?>

        </div>
      </div>

    </div>
  </div>
</section>

<section class="section-3">
  <div class="outer full-height centered" id="trustees">
    <div class="inner transition">

      <div class="who-we-are-members">

        <?php $partners_intro = new WP_Query(array(
            'post_type' => 'who_we_are',
            'orderby' => 'menu_order'
          )); ?>

        <div class="group">
          <div class="overview">
            <h1 class="group-heading">Our Trustees</h1>

            <!-- fetch partners introduction text -->
            <?php $individual_profile = new WP_Query(array(
              'post_type' => 'profile'
            )); ?>
            <?php while ($individual_profile->have_posts()) : $individual_profile->the_post(); ?>

              <?php if (get_field('role') == 'trustee'): ?>

                <div class="member">
                  <h1 class="member__title">
                  <a href="<?php the_permalink(); ?>">
                    <span>
                      <?php the_field('first_name'); ?>
                      <?php the_field('last_name'); ?>
                    </span>
                      <?php the_field('role'); ?>
                  </a>
                  </h1>
                  <p class="member__excerpt">
                    <?php the_field('description'); ?>
                  </p>
                </div>
              <?php endif; ?>
            <?php endwhile; ?>

        </div>
      </div>

    </div>
  </div>
</section>

<section class="section-4">
  <div class="outer full-height centered" id="our-team">
    <div class="inner transition">

      <div class="who-we-are-members">

        <?php $partners_intro = new WP_Query(array(
            'post_type' => 'who_we_are',
            'orderby' => 'menu_order'
          )); ?>

        <div class="group">
          <div class="overview">
            <h1 class="group-heading">Our Staff</h1>

            <!-- fetch partners introduction text -->
            <?php $individual_profile = new WP_Query(array(
              'post_type' => 'profile'
            )); ?>
            <?php while ($individual_profile->have_posts()) : $individual_profile->the_post(); ?>

              <?php if (get_field('role') == 'staff'): ?>




                <div class="member">
                  <h1 class="member__title">
                  <a href="<?php the_permalink(); ?>">
                    <span>
                      <?php the_field('first_name'); ?>
                      <?php the_field('last_name'); ?>
                    </span>
                      <?php the_field('role'); ?>
                  </a>
                  </h1>
                  <p class="member__excerpt">
                    <?php the_field('description'); ?>
                  </p>
                </div>
              <?php endif; ?>
            <?php endwhile; ?>

        </div>
      </div>

    </div>
  </div>
</section>

<section class="section-5">
  <div class="outer full-height centered" id="partners">
    <div class="inner transition">

      <div class="who-we-are-members">

        <?php $partners_intro = new WP_Query(array(
            'post_type' => 'who_we_are',
            'orderby' => 'menu_order'
          )); ?>

        <div class="group">
          <div class="overview">
            <h1 class="group-heading">Our Partners</h1>

            <!-- fetch partners introduction text -->
            <?php $individual_profile = new WP_Query(array(
              'post_type' => 'profile'
            )); ?>
            <?php while ($individual_profile->have_posts()) : $individual_profile->the_post(); ?>

              <?php if (get_field('role') == 'partner'): ?>

                <div class="member">
                  <h1 class="member__title">
                  <a href="<?php the_permalink(); ?>">
                    <span>
                      <?php the_field('brand_name'); ?>
                    </span>
                      <?php the_field('role'); ?>
                  </a>
                  </h1>
                  <p class="member__excerpt">
                    <?php the_field('description'); ?>
                  </p>
                </div>
              <?php endif; ?>
            <?php endwhile; ?>

        </div>
      </div>

    </div>
  </div>
</section>





<section class="section-6">
  <div class="outer full-height centered with-footer">
    <div class="inner transition has-button">

      <?php $donateCTA = new WP_Query(array(
          'post_type' => 'donation_ctas'
      )); ?>

      <div class="cta">
        <h1>Taking Action</h1>

        <?php while ($donateCTA->have_posts()) : $donateCTA->the_post(); ?>
          <p><?php the_field('who_we_are_page_donation_cta'); ?></p>


      <?php endwhile; ?>

        <a href="index.php/donation" class="button_transparent">Donate</a>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
</div>
