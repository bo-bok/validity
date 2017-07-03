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

get_header(); ?>
<!DOCTYPE html>


<!-- <h1 style="color:black"> HELLO WORLD</h1>
<h1 style="color:white"> HELLO WORLD</h1> -->

<div class="splash-screen splash-screen--step-1">
	<h1>Mental Disability Advocacy Centre now becomes&hellip;</h1>
	<div>
		<div class="logo"></div>
	</div>
</div>

<section class="section-1">
	<div class="carousel inner transition">
			<ul class="carousel__items">
					<li>
						<div>
							<h1>Making Voices Valid</h1>
							<p>We use the law to advance the rights of people with mental health issues &amp; intellectual disabilities worldwide</p>
						</div>
					</li>
					<li style="background-image: url(assets/img/category/person.jpg);">
						<div>
							<h1>I'm a person</h1>
							<p>Calling for an end to brutal systems of guardianship</p>
						</div>
					</li>
					<li style="background-image: url(assets/img/category/schools.jpg);">
						<div>
							<h1>Schools for All</h1>
							<p>Making sure no child is denied inclusive education</p>
						</div>
					</li>
					<li style="background-image: url(assets/img/category/my_home.jpg);">
						<div>
							<h1>My Home, My Choice</h1>
							<p>Reducing abuse in institutions and increasing community living</p>
						</div>
					</li>
			</ul>
			<ul class="carousel__navigation">
				<li data-position="2"><a href="im-a-person.html" class="button">I'm a person</a></li>
				<li data-position="3"><a href="schools-for-all.html" class="button">Schools for all</a></li>
				<li data-position="4"><a href="my-home-my-choice.html" class="button">My home, my choice</a></li>
			</ul>
			<p class="footnote">* Formerly Mental Disability Advocacy Centre</p>
	</div>
</section>

<section class="section-2 section-news">
	<div class="outer full-height">
		<div class="inner transition">

			<div class="news-articles">
				<div class="article">
					<a href="articles/russia-landmark-judgement.html" class="article__image" data-layout="3x4" style="background-image: url(assets/img/article-preview/Kotcherovs.jpg);"></a>
					<h1 class="article__category">
						<a href="im-a-person.html">I'm a person</a>
					</h1>
					<p class="article__title">
						<a href="articles/russia-landmark-judgement.html">Russia: Landmark judgment on parenting rights for persons with disabilities
</a>
					</p>
				</div>
				<div class="article">
					<a href="articles/legal-capacity-kenya.html" class="article__image" data-layout="3x3.7" style="background-image: url(assets/img/article-preview/kenya.jpg);"></a>
					<h1 class="article__category">
						<a href="im-a-person.html">I'm a person</a>
					</h1>
					<p class="article__title">
						<a href="articles/legal-capacity-kenya.html">Legal capacity in Kenya</a>
					</p>
				</div>
				<div class="article">
					<a href="articles/slovakia-denial-education.html" class="article__image" data-layout="3x2.5" style="background-image: url(assets/img/article-preview/SLOVAKIA-SUPREME-COURT.jpg);"></a>
					<h1 class="article__category">
						<a href="schools-for-all.html">Schools for all</a>
					</h1>
					<p class="article__title">
						<a href="articles/slovakia-denial-education.html">Slovakia: supreme court rules that denial of inclusive education to children with disabilities can amount to discrimination
</a>
					</p>
				</div>
				<div class="article">
					<a href="articles/rusi-stanev.html" class="article__image" data-layout="3x4" style="background-image: url(assets/img/article-preview/RUSI-STANEV.jpg);"></a>
					<h1 class="article__category">
						<a href="my-home-my-choice.html">My home, my choice</a>
					</h1>
					<p class="article__title">
						<a href="articles/rusi-stanev.html">A tribute to Rusi Stanev</a>
					</p>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="section-3">
	<div class="outer full-height centered with-footer">
		<div class="inner transition has-button">
			<div class="cta">
				<p>We challenge laws to give people the rights they are entitled to. We fight to make their voices valid. With firm roots in local communities, we are changing the way entire nations treat mental disability. We fearlessly represent people through the courts.</p>
				<a href="https://cafdonate.cafonline.org/480"class="button">Donate</a>
			</div>
		</div>
	</div>
</section>

<?php get_footer();
