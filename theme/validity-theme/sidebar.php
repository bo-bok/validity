<?php
/**
 * The sidebar containing the header and navigation
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package validity
 */
?>
<header>
  <div class="outer">
    <div class="inner">
      <a href="index.html" class="home-link">Home</a>
      <a href="#" class="toggle-navigation">Navigation</a>
      <a href="/index.php?page_id=8" class="button button__fixed">Support Us</a>
    </div>
  </div>
</header>

<nav>
 <div class="outer">
   <div class="inner">
     <!-- navigation here -->
     <?php
        $defaults = array(
          'container' => false,
          'theme_location' => 'primary-menu', //tells wp where menu lives
          'menu_class' => 'primary-navigation'
        );
        wp_nav_menu( $defaults );
      ?>
   </div>
 </div>
</nav>
