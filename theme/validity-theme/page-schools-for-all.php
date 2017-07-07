<?php
/*
  Template Name: Schools For All Page
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
          <h1>Schools for all</h1>
          <p>Making sure no child is denied inclusive education. Only 10% of children with disabilities worldwide are in school. Often there is no way for their parents to challenge exclusion. The law can play an important part in securing inclusion, but families often have no way to get to court. Many governments are unaware of their human rights duty to roll out a system to fight inclusion for all.</p>
          <p>That’s why we are working with families to educate them about their rights, and give them the legal help they need to secure educational inclusion for their disabled children.</p>
        </div>
      </div>
                <div class="image" style="background-image: url(<?= get_template_directory_uri()?>/assets/img/category/schools.jpg);"></div>
    </div>

  </div>
</section>

<section class="section-2 section-news">
  <div class="outer has-padding full-height">
    <div class="inner transition">

      <div class="news-articles">
        <?php
        $args = array (
          'category_name' => 'schools-for-all',
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
        <div class="campaigns">
          <?php $pageContent = new WP_Query(array(
              'post_type' => 'campaigns'
            )); ?>
            <?php while($pageContent->have_posts() ) : $pageContent->the_post(); ?>
          <?php the_field('other_campaigns_blurb') ?>
        <?php endwhile; ?>

        <div class="campaigns-list">
          <div class="campaigns-list__item" style="background-image: url(<?= get_template_directory_uri()?>/assets/img/category/my_home.jpg);">
            <a href="index.php/my-home-my-choice" class="button">My home, my choice</a>
          </div>
          <div class="campaigns-list__item" style="background-image: url(<?= get_template_directory_uri()?>/assets/img/category/person.jpg);">
            <a href="index.php/im-a-person" class="button">I'm a person</a>
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
