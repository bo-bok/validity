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

            <?php while($pageContent->have_posts() ) : $pageContent->the_post(); ?>
              <?php the_content();?>
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

        <div class="group">
          <div class="overview">
            <h1 class="group-heading">Honorary President</h1>
          </div>
          <div class="member">
            <?php $pageContent = new WP_Query(array(
                'post_type' => 'who_we_are'
              )); ?>

              <?php while($pageContent->have_posts() ) : $pageContent->the_post(); ?>
            <h1 class="member__title"><span><?php the_field('honorary_president_name')?></span></h1>
            <p class="member__excerpt">
              <?php the_field('honorary_president_description') ?></p>
            <?php endwhile; ?>

          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<section class="section-3">
  <div class="outer full-height centered" id="trustees">
    <div class="inner transition">

      <div class="who-we-are-members">

        <div class="group">
          <div class="overview">
            <h1 class="group-heading">Trustees</h1>
          </div>
          <div class="member">
            <?php $trustees = new WP_Query(array(
                'post_type' => 'trustees',
                'meta_key'	=> 'trustee_lastname',
	              'orderby'		=> 'meta_value',
                'order' => 'ASC'
              )); ?>

              <?php while($trustees->have_posts() ) : $trustees->the_post(); ?>
            <h1 class="member__title">
              <span>
                <?php the_field('trustee_firstname')?>  <?php the_field('trustee_lastname'); ?>
              </span>
              <?php the_field('trustee_role'); ?>
            </h1>
            <p class="member__excerpt"><?php the_field('trustee_description'); ?></p>
          <?php endwhile; ?>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<section class="section-4">
  <div class="outer full-height centered" id="our-team">
    <div class="inner transition">

      <div class="who-we-are-members">

        <div class="group">
          <div class="overview">
            <h1 class="group-heading">Our team</h1>
          </div>
          <div class="member">
            <?php $teamMember = new WP_Query(array(
                'post_type' => 'our_team',
                'meta_key'	=> 'team_member_lastname',
                'orderby'		=> 'meta_value',
                'order' => 'ASC'
              )); ?>

              <?php while($teamMember->have_posts() ) : $teamMember->the_post(); ?>
            <h1 class="member__title"><span>
              <?php the_field('team_member_firstname'); ?> .
              <?php the_field('team_member_lastname'); ?>
            </span>
            <?php the_field('team_member_role'); ?>
             </h1>
            <p class="member__excerpt">
              <?php the_field('team_member_description'); ?>
            </p>
          <?php endwhile; ?>
          </div>
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
            <h1 class="group-heading">Our partners</h1>

            <!-- fetch partners introduction text -->
            <?php while($partners_intro->have_posts() ) : $partners_intro->the_post(); ?>


            <p><?php the_field('partners_introduction'); ?></p>
          <?php endwhile; ?>
          </div>

          <!-- fetch inidividual partners -->
          <div class="member">
            <?php $partners = new WP_Query(array(
                'post_type' => 'our_partners',
                'orderby' => 'title',
                'order' => 'ASC'
              )); ?>

              <?php while($partners->have_posts() ) : $partners->the_post(); ?>

            <h1 class="member__title"><span><?php the_field('partner_name'); ?></span></h1>
            <p class="member__excerpt">
              <?php the_field('partner_description'); ?>
            </p>
          <?php endwhile; ?>

          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<section class="section-6">
  <div class="outer full-height centered with-footer">
    <div class="inner transition has-button">

      <?php $take_action = new WP_Query(array(
          'post_type' => 'who_we_are',
          'orderby' => 'menu_order'
        )); ?>

      <div class="cta">
        <h1>Taking Action</h1>

        <?php while($take_action->have_posts() ) : $take_action->the_post(); ?>
          <p><?php the_field('take_action_cta'); ?></p>


      <?php endwhile; ?>

        <a href="index.php/donation" class="button_transparent">Donate</a>
      </div>

    </div>
  </div>
</section>

<!-- get_sidebar(); -->
<?php get_footer(); ?>
</div>
