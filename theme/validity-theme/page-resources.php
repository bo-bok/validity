<?php
/*
  Template Name: Resources
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
        </form>
      </div>

      <div class="resources">
        <a href="#" class="resource">
          <h1 class="resource__title">Article 1</h1>
          <p class="resource__excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </a>
        <a href="#" class="resource">
          <h1 class="resource__title">Article 1</h1>
          <p class="resource__excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </a>
        <a href="#" class="resource">
          <h1 class="resource__title">Article 1</h1>
          <p class="resource__excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </a>
        <a href="#" class="resource">
          <h1 class="resource__title">Article 1</h1>
          <p class="resource__excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </a>
        <a href="#" class="resource">
          <h1 class="resource__title">Article 1</h1>
          <p class="resource__excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </a>
        <a href="#" class="resource">
          <h1 class="resource__title">Article 1</h1>
          <p class="resource__excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </a>
        <a href="#" class="resource">
          <h1 class="resource__title">Article 1</h1>
          <p class="resource__excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </a>
        <a href="#" class="resource">
          <h1 class="resource__title">Article 1</h1>
          <p class="resource__excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- get_sidebar(); -->
<?php
get_footer(); ?>
</div>
