<?php
/*
  Template Name: Donation Page
*/
/**
 * The template for displaying the Donation Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package validity
 */

get_header(); ?>

<body class="page-donate">
  <div class="wrapper">
    <?php get_sidebar(); ?> <!-- sidebar = nav -->
    <?php $donateContent = new WP_Query(array(
        'post_type' => 'donate_page'
      )); ?>


<section class="section-1">
  <div class="outer">
    <div class="inner">

      <div class="donate-intro">
        <div class="container">
          <h1 class="page-heading">Donate</h1>
          <?php while ($donateContent->have_posts()) : $donateContent->the_post(); ?>
            <?php the_field('donate_intro');?>
          <?php endwhile; ?>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-2">
  <div class="outer">
    <div class="inner">
    <div class="donate">
      <div class="donate__content">
      <h1 class="page-heading">Why donate to Validity?</h1>
      <?php while ($donateContent->have_posts()) : $donateContent->the_post(); ?>
        <?php the_field('donate_description'); ?>
        <div id="CAFDonateWidgetContainer" class="CAFDonateWidgetContainer"></div>
        <?php the_field('other_ways_to_donate'); ?>
      <?php endwhile; ?>

    </div>
  </div>
  </div>
</div>
</section>

<section class="section-3">
  <div class="outer">
    <div class="inner">

    <div class="donate">
      <!-- <div id="CAFDonateWidgetContainer"></div> -->
    </div>
  </div>
  </div>
</section>


<script type="text/javascript">
var caf_BeneficiaryCampaignId=480;
document.write(unescape('%3Cscript id="CAFDonateWidgetLoader_script" src="https://cafdonate.cafonline.org/js/CAF.DonateWidgetLoader_script.js" type="text/javascript"%3E%3C/script%3E'));
</script>

<?php
get_footer(); ?>
</div>
