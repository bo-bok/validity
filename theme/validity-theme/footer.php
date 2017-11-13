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

        <div class="footer__container">
          <img src="assets/img/logo-footer.png" style="width: 20px; height: 20px"/>
          <?php while ($footerContent->have_posts()) : $footerContent->the_post(); ?>

          <ul>
            <li class=""><a href="https://www.facebook.com/<?php the_field('facebook_url') ?>">Facebook</a></li>
            <li class=""><a href="https://twitter.com/<?php the_field('twitter_url') ?>">Twitter</a></li>
          </ul>

          <div>
            <p><?php the_field('info_line_1') ?></p>
            <p><?php the_field('info_line_2') ?></p>
            <p><?php the_field('info_line_3') ?></p>
          </div>


          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>
