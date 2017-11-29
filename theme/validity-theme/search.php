<?php
/**
 * The template which provides custom search functionality
 *
 * This page displays the searchform defined in searchbar.php
 * It then executes the custom search by keyword, country and resource type
 * Search function is defined in functions.php, and is called $search_by_cat
 * Displays results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package validity
 */

get_header(); ?>

<body class="page-resources">
  <div class="wrapper">
  <?php get_sidebar(); ?> <!-- sidebar = nav -->

<section class="section-1">
  <div class="outer full-height with-footer">
    <div class="inner transition">

      <div class="resources-intro">
        <h1 class="page-heading">Resources</h1>

        <?php $resource_blurb = new WP_Query(array(
          'post_type' => 'resource_blurb'
        )); ?>
        <?php while ($resource_blurb->have_posts()) : $resource_blurb->the_post(); ?>

        <?php the_field('resource_blurb_text'); ?>

        <?php endwhile; ?>

        <h2>Resources</h2>
        <?php get_search_form(); ?>
      </div>


	    <?php if (have_posts()) : ?>

        <div class="resources">
        <?php while (have_posts()) : the_post(); ?>


          <a href="<?php the_permalink(); ?>" title="<?php the_title();?>" class="resource">

            <?php if (has_post_thumbnail()): ?>

              <?php the_post_thumbnail(array( 223, 148 )); ?>
            <?php else: ?>
              <img class="footer__logo" src="<?php echo get_bloginfo('template_url') ?>/assets/img/photos/4.jpg" style="width: 223px; height: 148px"/>
            <?php endif ?>
            <h1 style="height:100px; overflow-wrap: break-word;"class="resource__title"><?php the_title(); ?></h1>
          </a>

			     <?php endwhile; ?>
        </div>

			   <?php the_posts_navigation(); ?>

      <?php else : ?>

		<?php endif; ?>

    </div>
  </div>
</section>

<?php
get_footer(); ?>
</div>
