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
          <?php $takeaction_donate = new WP_Query(array(
              'post_type' => 'takeaction_donate'
            )); ?>

            <?php while($takeaction_donate->have_posts() ) : $takeaction_donate->the_post(); ?>
              <p><?php the_content();?></p>
            <?php endwhile; ?>


          <a href="index.php/donation" class="button_transparent">Donate</a>
          <!-- <a href="subscribe.html" class="button">Subscribe</a> -->
        </div>
      </div>

    </div>
  </div>
</section>

<!-- get_sidebar(); -->
<?php
get_footer();?>
</div>
