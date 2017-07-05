<?php
/*
  Template Name: News
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

<body class="page-news">
  <div class="wrapper">
  <?php get_sidebar(); ?> <!-- sidebar = nav -->

<section class="section-1 section-news">
  <div class="outer">
    <div class="inner transition">

      <div class="news-intro">
        <div class="container">
          <h1 class="page-heading">News</h1>
          <p>We want to share our resources with anyone that is going to help with the fight to end descrimination against mental health.</p>
          <!--<h2>News</h2>
          <form>
            <input type="text" placeholder="Search" />
            <div class="dropdown">
              <span>Filter 1</span>
              <div>
                <a href="#">Option 1 a</a>
                <a href="#">Option 1 b</a>
                <a href="#">Option 1 c</a>
              </div>
            </div>
            <div class="dropdown">
              <span>Filter 2</span>
              <div>
                <a href="#">Option 2 a</a>
                <a href="#">Option 2 b</a>
                <a href="#">Option 2 c</a>
              </div>
            </div>
          </form>-->
        </div>
      </div>

      <div class="news-articles">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php
          $args = array (
            'cat' => array(1,4),
            'posts_per_page' => -1, //showposts is deprecated
            'orderby' => 'date' //You can specify more filters to get the data
            'post_count' => '8';
          );

          $cat_posts = new WP_query($args);

          if ($cat_posts->have_posts()) : while ($cat_posts->have_posts()) : $cat_posts->the_post(); ?>

          <div class="article">
            <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
            <a href="news-article.html" class="article__image" data-layout="3x4" style="background-image: url('<?php echo $backgroundImg[0]; ?>');"></a>
            <h1 class="article__category">
                <?php
                 foreach((get_the_category()) as $category) {
                 echo $category->cat_name . ' ';
                 }
                 ?>
            </h1>
            <p class="article__title">
              <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
                <?php the_title();?>
              </a>
            </p>
          </div>

          <?php
          endwhile; endif;
          ?>


      <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
      </div>


      <div class="pagination">
        <a href="#" class="previous disabled">Previous Page</a>
        <ul>
          <li><a href="#" class="current">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
        </ul>
        <a href="#" class="next">Next Page</a>
      </div>


    </div>
  </div>
</section>

<?php
get_footer(); ?>
</div>
