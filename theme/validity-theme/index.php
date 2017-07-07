<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package validity
 */

get_header(); ?><!DOCTYPE html>

<body class="page-home">

	<div class="wrapper">

		<div class="bg"></div>

		<?php get_sidebar(); ?> <!-- sidebar = nav -->

<div class="splash-screen"><!-- keep until js is refactored --></div>


<section class="section-1">
	<div class="carousel inner transition">
			<ul class="carousel__items">
					<li>
						<div>
							<h1>Making Voices Valid</h1>
							<p>We use the law to advance the rights of people with mental health issues &amp; intellectual disabilities worldwide</p>
						</div>
					</li>
					<li style="background-image: url(<?= get_template_directory_uri()?>/assets/img/category/person.jpg);">
						<div>
							<h1>I'm a person</h1>
							<p>Calling for an end to brutal systems of guardianship</p>
						</div>
					</li>
					<li style="background-image: url(<?= get_template_directory_uri()?>/assets/img/category/schools.jpg);">
						<div>
							<h1>Schools for All</h1>
							<p>Making sure no child is denied inclusive education</p>
						</div>
					</li>
					<li style="background-image: url(<?= get_template_directory_uri()?>/assets/img/category/my_home.jpg);">
						<div>
							<h1>My Home, My Choice</h1>
							<p>Reducing abuse in institutions and increasing community living</p>
						</div>
					</li>
			</ul>
			<ul class="carousel__navigation">
				<li data-position="2"><a href="index.php/im-a-person" class="button">I'm a person</a></li>
				<li data-position="3"><a href="index.php/schools-for-all" class="button">Schools for all</a></li>
				<li data-position="4"><a href="index.php/my-home-my-choice" class="button">My home, my choice</a></li>
			</ul>
			<p class="footnote">* Formerly Mental Disability Advocacy Centre</p>
	</div>
</section>

<section class="section-2 section-news">
	<div class="outer full-height">
		<div class="inner transition">

			<div class="news-articles">
        <?php
        $args = array (
					'category_name' => 'campaigns',
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
</section>

<section class="section-3">
	<div class="outer full-height centered with-footer">
		<div class="inner transition has-button">
			<div class="cta">
			<?php $donationSection = new WP_Query(array(
				  'post_type' => 'homepage_donate'
				)); ?>

				<?php while($donationSection->have_posts() ) : $donationSection->the_post(); ?>
					<p><?php the_content();?></p>
				<?php endwhile; ?>

				<a href="index.php/donation" class="button">Donate</a>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>

</div>
