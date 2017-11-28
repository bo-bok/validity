<?php
/**
 * The template for displaying search results pages
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
        <p>We want to share our resources with anyone that is going to help with the fight to end descrimination against mental health.</p>
        <h2>Resources</h2>
        <?php get_search_form(); ?>
      </div>


	    <?php if (have_posts()) : ?>

        <div class="resources">
        <?php while (have_posts()) : the_post(); ?>


          <a href="<?php the_permalink(); ?>" title="<?php the_title();?>" class="resource">

            <?php the_post_thumbnail(array( 223, 148 )) ?>
            <h1 class="resource__title"><?php the_title(); ?></h1>
            <p class="resource__excerpt"><?php the_excerpt(); ?></p>
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
