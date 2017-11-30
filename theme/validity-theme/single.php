<?php
/**
 * The template for displaying all single posts (aka articles)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package validity
 */

get_header(); ?>


<body class="page-news">
  <div class="wrapper">
  <?php get_sidebar(); ?> <!-- sidebar = nav -->



  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


  <section class="section-1">
    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
    <div class="outer full-height poster" style="background-image: url('<?php echo $backgroundImg[0]; ?>')"></div>
  </section>


  <section class="section-2">
    <div class="outer">
      <div class="inner transition">

        <div class="news-article">
          <div class="news-article__header">
            <h1>
              <?php the_title(); ?>
            </h1>
            <span class="news-article__date">
              <?php echo the_date( 'F jS' ); ?>
              <br />
              <?php echo get_the_date( 'Y' ); ?>
            </span>
          </div>

          <div class="news-article__content">
            <?php the_content() ?>
          </div>

          <!-- <div onclick="goBack()" class="back">Go Back</div> -->
          <!-- <a href="news.html" class="back">Back</a> -->

        </div>

      </div>
    </div>
  </section>





<?php endwhile; else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<section class="section-3">
  <div class="outer full-height centered with-footer">
    <div class="inner transition has-button">

      <div class="cta">
        <h1>Taking Action</h1>
        <?php $donateCTA = new WP_Query(array(
            'post_type' => 'donation_ctas'
          )); ?>

          <?php while($donateCTA->have_posts() ) : $donateCTA->the_post(); ?>

            <?php the_field('article_page_donation_cta'); ?>
        <?php endwhile; ?>


        <a href="index.php/donation" class="button">Donate</a>
      </div>

    </div>
  </div>
</section>

<?php
get_footer(); ?>
</div>
