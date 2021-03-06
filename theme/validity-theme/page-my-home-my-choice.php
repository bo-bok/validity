<?php
/*
  Template Name: My Home, My Choice Page
*/
/**
 * The template for displaying the My Home, My Choice Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package validity
 */

get_header(); ?>

<body class="page-our-impact">
  <div class="wrapper">
  <?php get_sidebar(); ?> <!-- sidebar = nav -->

<section class="section-1">
  <div class="outer full-height centered">
    <div class="inner transition">

      <div class="our-impact-copy">
        <div class="text">
          <h1>My home, my choice</h1>
          <?php $pageContent = new WP_Query(array(
              'post_type' => 'campaigns'
            )); ?>
            <?php while ($pageContent->have_posts()) : $pageContent->the_post(); ?>
          <?php the_field('my_home_my_choice_description') ?>
        <?php endwhile; ?>
        </div>
      </div>
        <div class="image" style="background-image: url(<?= get_template_directory_uri()?>/assets/img/category/my_home.jpg);"></div>
    </div>

  </div>
</section>

<section class="section-2 section-news">
  <div class="outer has-padding full-height">
    <div class="inner transition">

      <div class="news-articles">
        <?php
        $args = array(
          'category_name' => 'my-home-my-choice',
          'posts_per_page' => 4, //showposts is deprecated
          'orderby' => 'date' //You can specify more filters to get the data
        );
          $cat_posts = new WP_query($args);

          if ($cat_posts->have_posts()) : while ($cat_posts->have_posts()) : $cat_posts->the_post();
        ?>

        <div class="article">

          <?php
            $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
          ?>

          <a href="<?php the_permalink(); ?>" title="<?php the_title();?>" class="article__image" data-layout="3x4" style="background-image: url('<?php echo $backgroundImg[0]; ?>');"></a>

          <h1 class="article__category">
            <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
              <?php the_title(); ?>
            </a>
          </h1>

          <p class="article__title">
            <!-- content would be called here if added in future -->
          </p>



        </div>

        <?php
          endwhile; endif;
        ?>

      </div>

    </div>
  </div>

  <div class="outer has-padding">
    <div class="inner transition">

      <div class="campaigns">
        <div class="campaigns">
          <?php $pageContent = new WP_Query(array(
              'post_type' => 'campaigns'
            )); ?>
            <?php while ($pageContent->have_posts()) : $pageContent->the_post(); ?>
          <?php the_field('other_campaigns_blurb') ?>
        <?php endwhile; ?>

        <div class="campaigns-list">
          <div class="campaigns-list__item" style="background-image: url(<?= get_template_directory_uri()?>/assets/img/category/schools.jpg);">
            <a href="index.php/schools-for-all" class="button">Schools for all</a>
          </div>
          <div class="campaigns-list__item" style="background-image: url(<?= get_template_directory_uri()?>/assets/img/category/person.jpg);">
            <a href="index.php/im-a-person" class="button">I'm a person</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

  <div class="outer has-padding">
    <div class="inner transition">

      <div class="strategies">
        <h1>We use four strategies to achieve the goals of these campaigns:</h1>
        <div class="strategies-list">
            <?php $strategies = new WP_Query(array(
                'post_type' => 'our_strategies',
                'orderby' => 'menu_order'
              )); ?>

              <?php while ($strategies->have_posts()) : $strategies->the_post(); ?>

            <div class="strategies-list__item">
              <h2><?php the_field('strategy_name'); ?></h2>
              <p><?php the_field('strategy_description'); ?></p>
            </div>
          <?php endwhile; ?>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php
get_footer(); ?>
</div>
