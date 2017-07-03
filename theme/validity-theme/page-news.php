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
        <div class="article">
          <a href="news-article.html" class="article__image" data-layout="3x4" style="background-image: url(assets/img/photos/1.jpg);"></a>
          <h1 class="article__category">
            <a href="im-a-person.html">I'm a person</a>
          </h1>
          <p class="article__title">
            <a href="news-article.html">Article 1</a>
          </p>
        </div>
        <div class="article">
          <a href="news-article.html" class="article__image" data-layout="3x3.7" style="background-image: url(assets/img/photos/2.jpg);"></a>
          <h1 class="article__category">
            <a href="im-a-person.html">I'm a person</a>
          </h1>
          <p class="article__title">
            <a href="news-article.html">Article 2 (with a longer title)</a>
          </p>
        </div>
        <div class="article">
          <a href="news-article.html" class="article__image" data-layout="3x2.5" style="background-image: url(assets/img/photos/3.jpg);"></a>
          <h1 class="article__category">
            <a href="im-a-person.html">I'm a person</a>
          </h1>
          <p class="article__title">
            <a href="news-article.html">Article 3</a>
          </p>
        </div>
        <div class="article">
          <a href="news-article.html" class="article__image" data-layout="3x4" style="background-image: url(assets/img/photos/4.jpg);"></a>
          <h1 class="article__category">
            <a href="im-a-person.html">I'm a person</a>
          </h1>
          <p class="article__title">
            <a href="news-article.html">Article 4</a>
          </p>
        </div>
        <div class="article">
          <a href="news-article.html" class="article__image" data-layout="3x4" style="background-image: url(assets/img/photos/1.jpg);"></a>
          <h1 class="article__category">
            <a href="im-a-person.html">I'm a person</a>
          </h1>
          <p class="article__title">
            <a href="news-article.html">Article 1</a>
          </p>
        </div>
        <div class="article">
          <a href="news-article.html" class="article__image" data-layout="3x3.7" style="background-image: url(assets/img/photos/2.jpg);"></a>
          <h1 class="article__category">
            <a href="im-a-person.html">I'm a person</a>
          </h1>
          <p class="article__title">
            <a href="news-article.html">Article 2 (with a longer title)</a>
          </p>
        </div>
        <div class="article">
          <a href="news-article.html" class="article__image" data-layout="3x2.5" style="background-image: url(assets/img/photos/3.jpg);"></a>
          <h1 class="article__category">
            <a href="im-a-person.html">I'm a person</a>
          </h1>
          <p class="article__title">
            <a href="news-article.html">Article 3</a>
          </p>
        </div>
        <div class="article">
          <a href="news-article.html" class="article__image" data-layout="3x4" style="background-image: url(assets/img/photos/4.jpg);"></a>
          <h1 class="article__category">
            <a href="im-a-person.html">I'm a person</a>
          </h1>
          <p class="article__title">
            <a href="news-article.html">Article 4</a>
          </p>
        </div>
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

<!-- get_sidebar(); -->
<?php
get_footer();
