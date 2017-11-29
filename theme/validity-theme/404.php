<?php
/**
 * The template for displaying 404 pages (aka page not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package validity
 */

get_header(); ?>


<body class="page-staff-profile">
  <div class="wrapper">
  <?php get_sidebar(); ?> <!-- sidebar = nav -->

  <section class="section-1">
    <div class="outer full-height centered">
      <div class="inner transition">

				<h1>Sorry, the page you were looking for was not found.</h1>
				<p>Why not visit our <a href="<?php echo esc_url(home_url("/"))?>" class="">homepage</a>.</p>

      </div>
    </div>
  </section>

<?php
get_footer();
