<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package validity
 */
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Validity</title>
		<meta name="viewport" content="width=device-width initial-scale=1.0">
		<!-- <script>
			var settings = {
				animate 	: true,
				showHint	: true
			};
		</script> -->
		<!-- <script data-main="assets/js/app" src="assets/js/require.js"></script> -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/require.js" data-main="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>

		<script>
			var settings = {
				animate 	: true,
				showHint	: true
			};
		</script>
    <?php wp_head(); ?>
	</head>

	<body class="page-home">

		<div class="wrapper">

			<div class="bg"></div>

			<header>
				<div class="outer">
					<div class="inner">
						<a href="index.html" class="home-link">Home</a>
						<a href="#" class="toggle-navigation">Navigation</a>
						<a href="https://cafdonate.cafonline.org/480"class="button button__fixed">Support Us</a>
					</div>
				</div>
			</header>

			<nav>
				<div class="outer">
					<div class="inner">
						<ul class="primary-navigation">
							<li class="primary-navigation__item"><a href="take-action.html">Take action</a></li>
							<li class="primary-navigation__item"><a href="who-we-are.html">Who we are</a></li>
							<li class="primary-navigation__item"><a href="my-home-my-choice.html">My home, my choice</a></li>
							<li class="primary-navigation__item"><a href="schools-for-all.html">Schools for all</a></li>
							<li class="primary-navigation__item"><a href="im-a-person.html">I'm a person</a></li>

						</ul>
					</div>
				</div>
			</nav>
