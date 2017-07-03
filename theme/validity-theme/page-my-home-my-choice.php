<?php
/*
  Template Name: My Home, My Choice Page
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
          <h1>My home, my choice</h1>
          <p>Reducing abuse in institutions and increasing community living. For Centuries people with mental disabilites have been left in institutions, supposidly in their own best interests. Segregation has left people isolated, exploited and abused. In Europe alone, we estimate two million people are segregated just because they have a disability.</p>
          <p>Thats why we will work in eight countries to call for governments to ensure that people can live in safe and inclusive communities.</p>
        </div>
      </div>
        <div class="image" style="background-image: url(assets/img/category/my_home.jpg);"></div>
    </div>

  </div>
</section>

<section class="section-2 section-news">
  <div class="outer has-padding full-height">
    <div class="inner transition">

      <div class="news-articles">
        <div class="article">
          <a href="articles/rusi-stanev.html" class="article__image" data-layout="3x4" style="background-image: url(assets/img/article-preview/RUSI-STANEV.jpg);"></a>
          <h1 class="article__category">
            <a href="articles/rusi-stanev.html">My home, my choice</a>
          </h1>
          <p class="article__title">
            <a href="articles/rusi-stanev.html">A tribute to Rusi Stanev</a>
          </p>
        </div>
        <div class="article">
          <a href="articles/duped-detained-drugged.html" class="article__image" data-layout="3x4" style="background-image: url(assets/img/article-preview/2.-DUPED,-DETAINED-AND-DRUGGED.jpg);"></a>
          <h1 class="article__category">
            <a href="articles/duped-detained-drugged.html">My home, my choice</a>
          </h1>
          <p class="article__title">
            <a href="articles/duped-detained-drugged.html">Duped, detained, and drugged</a>
          </p>
        </div>
        <div class="article">
          <a href="articles/EU-court-finds-restraints-inhuman.html" class="article__image" data-layout="3x3.7" style="background-image: url(assets/img/article-preview/3.-EUROPEAN-COURT-FINDS.jpg);"></a>
          <h1 class="article__category">
            <a href="articles/EU-court-finds-restraints-inhuman.html">My home, my choice</a>
          </h1>
          <p class="article__title">
            <a href="articles/EU-court-finds-restraints-inhuman.html">European Court Finds Use of Restraints Constitutes Inhuman
and Degrading Treatment</a>
          </p>
        </div>
        <div class="article">
          <a href="articles/czech-court-disability-support.html" class="article__image" data-layout="3x2.5" style="background-image: url(assets/img//article-preview/czech-court-tells.jpg);"></a>
          <h1 class="article__category">
            <a href="articles/czech-court-disability-support.html">My home, my choice</a>
          </h1>
          <p class="article__title">
            <a href="articles/czech-court-disability-support.html">Czech court tells young man he’s entitled to disability support</a>
          </p>
        </div>
      </div>

    </div>
  </div>

  <div class="outer has-padding">
    <div class="inner transition">

      <div class="campaigns">
        <p>We support the global disability rights movement in their priority areas where law can play a valuable role in achieving structural change. We work on two other campaigns <span>see these below:</span></p>
        <div class="campaigns-list">
          <div class="campaigns-list__item" style="background-image: url(assets/img/category/schools.jpg);">
            <a href="schools-for-all.html" class="button">Schools for all</a>
          </div>
          <div class="campaigns-list__item" style="background-image: url(assets/img/category/person.jpg);">
            <a href="im-a-person.html" class="button">I'm a person</a>
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
