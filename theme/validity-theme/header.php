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
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/require.js" data-main="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>

		<script>
				var settings = {
					animate 	: true,
					showHint	: true
				};

				function goBack() { window.history.back() };
		</script>

    <?php wp_head(); ?>
	</head>
