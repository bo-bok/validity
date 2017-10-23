<?php
/*
  Template Name: Contact Page
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

<body class="page-contact">
  <div class="wrapper">
  <?php get_sidebar(); ?>

    <section class="section-1">
      <div class="outer full-height centered with-footer">
        <div class="inner transition">

          <?php $address = new WP_Query(array(
            'post_type' => 'contact_us',
            'order' => 'ASC',
            'orderby' => 'ID'
          ))?>

      <div class="section-contact">
        <p class="section-contact-intro">We are based in London and Budapest <br />
        Feel free to contact us:</p>
          <main class="section-contact-address">
            <?php while ($address->have_posts()) : $address->the_post();?>
              <div class="address-container">
                <p class="address-info"><?php the_field('address_line_1') ?></p>
                <p class="address-info"><?php the_field('address_line_2') ?></p>
                <p class="address-info"><?php the_field('city') ?></p>
                <p class="address-info"><?php the_field('postcode_/_zipcode') ?></p>
                <p class="address-info"><?php the_field('country') ?></p>
                <p class="address-info"><?php the_field('telephone') ?></p>
                <p class="address-info"><?php the_field('fax') ?></p>
                <p class="address-info"><?php the_field('email') ?></p>
              </div>
            <?php endwhile; ?>
          </main>
      </div>


        </div>
      </div>
    </section>

  </div>
</body>
<?php
get_footer(); ?>
