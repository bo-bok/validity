<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package validity
 */

?>
<!-- </div> -->
<!-- #content -->
  <footer>
    <div class="outer">
      <div class="inner">
      <?php $footerContent = new WP_Query(array(
          'post_type' => 'footer'
        )); ?>

        <?php while ($footerContent->have_posts()) : $footerContent->the_post(); ?>
        <ul class="social">
          <li class="social__item"><a href="https://www.facebook.com/<?php the_field('facebook_url') ?>">Facebook</a></li>
          <li class="social__item"><a href="https://twitter.com/<?php the_field('twitter_url') ?>">Twitter</a></li>
        </ul>

        <p><?php the_field('info_line_1') ?></p>
        <p><?php the_field('info_line_2') ?></p>
        <p><?php the_field('info_line_3') ?></p>
        <?php endwhile; ?>

      </div>
    </div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>
