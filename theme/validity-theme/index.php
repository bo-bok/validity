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
			<?php $pageContent = new WP_Query(array(
					'post_type' => 'home_page'
				)); ?>
				<?php while ($pageContent->have_posts()) : $pageContent->the_post(); ?>

					<ul class="carousel__items">
							<li>
								<div>
									<h1><?php the_field('landing_page_slogan');?></h1>
									<p><?php the_field('landing_page_tagline');?></p>
								</div>
							</li>
							<li style="background-image: url(<?php the_field('campaign_1_image');?>">
								<div>
									<h1><?php the_field('campaign_1_title');?></h1>
									<p><?php the_field('campaign_1_tagline');?></p>
								</div>
							</li>
							<li style="background-image: url(<?php the_field('campaign_2_image');?>">
								<div>
									<h1><?php the_field('campaign_2_title');?></h1>
									<p><?php the_field('campaign_2_tagline');?></p>
								</div>
							</li>
							<li style="background-image: url(<?php the_field('campaign_3_image');?>">
								<div>
									<h1><?php the_field('campaign_3_title');?></h1>
									<p><?php the_field('campaign_3_tagline');?></p>
								</div>
							</li>
					</ul>

					<ul class="carousel__navigation">
						<li data-position="2">
							<a href="<?php the_field('campaign_1_url') ?>" class="button">
								<?php the_field('campaign_1_title');?>
							</a>
						</li>
						<li data-position="3">
							<a href="<?php the_field('campaign_2_url') ?>" class="button">
								<?php the_field('campaign_2_title');?>
							</a>
						</li>
						<li data-position="4">
							<a href="<?php the_field('campaign_3_url') ?>" class="button">
								<?php the_field('campaign_3_title');?>
							</a>
						</li>
					</ul>

					<p class="footnote"><?php the_field('footnote');?></p>

			<?php endwhile; ?>
			</div>
		</section>

		<section class="section-2 section-news">
			<div class="outer full-height">
				<div class="inner transition">

					<div class="news-articles">
		        <?php
		        $args = array(
              'category_name' => 'campaigns',
		          'posts_per_page' => 4, //showposts is deprecated
		          'orderby' => 'date' //You can specify more filters to get the data
		        );
		            $cat_posts = new WP_query($args);

		            if ($cat_posts->have_posts()) : while ($cat_posts->have_posts()) : $cat_posts->the_post();
		                ?>

			      <div class="article">

			        <?php $backgroundImg = wp_get_attachment_image_src(
								get_post_thumbnail_id($post->ID),
								'full');?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title();?>" class="article__image" data-layout="3x4" style="background-image: url('<?php echo $backgroundImg[0]; ?>');"></a>


			        <h1 class="article__category">
			            <?php
		                       foreach ((get_the_category()) as $category) {
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
					<?php $donateCTA = new WP_Query(array(
		                  'post_type' => 'donation_ctas'
		                )); ?>

						<?php while ($donateCTA->have_posts()) : $donateCTA->the_post(); ?>
							<p><?php the_field('homepage_donation_cta');?></p>
						<?php endwhile; ?>

						<a href="index.php/donation" class="button">Donate</a>
					</div>
				</div>
			</div>
		</section>

<?php get_footer(); ?>

</div>
