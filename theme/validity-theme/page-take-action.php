<?php
/*
  Template Name: Take Action Page
*/
/**
 * The template for displaying
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package validity
 */

get_header(); ?>

<body class="page-take-action">
  <div class="wrapper">
  <?php get_sidebar(); ?> <!-- sidebar = nav -->


<section class="section-1">
  <div class="outer full-height centered with-footer">
    <div class="inner transition">

      <div class="take-action-intro">
        <div class="container has-button">
          <h1 class="page-heading">Take Action</h1>
          <?php $donateCTA = new WP_Query(array(
              'post_type' => 'donation_ctas'
            )); ?>

            <?php while($donateCTA->have_posts() ) : $donateCTA->the_post(); ?>
              <p><?php the_field('take_action_page_donation_cta');?></p>
            <?php endwhile; ?>


          <a href="index.php/donation" class="button_transparent">Donate</a>
          <!-- <a href="subscribe.html" class="button">Subscribe</a> -->
        </div>
      </div>

    </div>
  </div>
</section>

<?php
get_footer();?>
</div>
