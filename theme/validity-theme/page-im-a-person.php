<?php
/*
  Template Name: I'm a Person Page
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

<body class="page-our-impact">
  <div class="wrapper">
  <?php get_sidebar(); ?> <!-- sidebar = nav -->

<section class="section-1">
  <div class="outer full-height centered">
    <div class="inner transition">

      <div class="our-impact-copy">
        <div class="text">
          <h1>I'm a person</h1>
          <p>Calling for an end to brutal systems of guardianship. People with mental health issues or intellectual disabilities are often labelled by the law as incompetent, and put under guardianship. Courts strip their rights to marry, have a family, vote, own a house, sign an employment contract or even decide their own medical treatment. People in in this Kafkaesque situation have no means of accessing justice.</p>
          <p>That is why we select test cases to challenge guardianship and urge state structures to put in place support for people to author their own lives. By campaigning with grassroots NGOs we enable governments to think in a different way.</p>
        </div>
      </div>
      <div class="image" style="background-image: url(assets/img/category/person.jpg);"></div>
    </div>
  </div>
</section>

<section class="section-2 section-news">
  <div class="outer has-padding full-height">
    <div class="inner transition">

      <div class="news-articles">

        <?php
        $args = array (
          'category_name' => 'im-a-person',
          'posts_per_page' => 4, //showposts is deprecated
          'orderby' => 'date' //You can specify more filters to get the data
        );
          $cat_posts = new WP_query($args);

          if ($cat_posts->have_posts()) : while ($cat_posts->have_posts()) : $cat_posts->the_post();
        ?>

        <div class="article">

          <?php
            $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
          ?>

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

      </div>

    </div>
  </div>

  <div class="outer has-padding">
    <div class="inner transition">

      <div class="campaigns">
        <p>We support the global disability rights movement in their priority areas where law can play a valuable role in achieving structural change. We work on two other campaigns <span>see these below:</span></p>
        <div class="campaigns-list">
          <div class="campaigns-list__item" style="background-image: url(assets/img/category/my_home.jpg);">
            <a href="my-home-my-choice.html" class="button">My home, my choice</a>
          </div>
          <div class="campaigns-list__item" style="background-image: url(assets/img/category/schools.jpg);">
            <a href="schools-for-all.html" class="button">Schools for all</a>
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
          <div class="strategies-list__item">
            <h2>Building solidarity</h2>
            <p>We support local lawyers and NGOs by delivering training and strengthening their capacity, and help victims of human rights abuse tell their story nationally and internationally.</p>
          </div>
          <div class="strategies-list__item">
            <h2>Promoting inclusion</h2>
            <p>We work with local, national and international bodies to ensure a human rights based approach in law and policy reform.</p>
          </div>
          <div class="strategies-list__item">
            <h2>Securing justice</h2>
            <p>We take test cases through the courts to redefine the law.</p>
          </div>
          <div class="strategies-list__item">
            <h2>And listening</h2>
            <p>We are sensitive to the needs and agenda of people in grassroots organisations, so that we can tailor our interventions appropriately.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- get_sidebar(); -->
<?php
get_footer(); ?>
</div>
