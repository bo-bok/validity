<?php
/*
  Template Name: Contact Page
*/
/**
 * The template for displaying the Contact Page
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



      <div class="section-contact">
        <p class="section-contact-intro">
          <?php $contact_blurb = new WP_Query(array(
            'post_type' => 'contact_page'
          )); ?>
          <?php while ($contact_blurb->have_posts()) : $contact_blurb->the_post(); ?>

          <?php the_field('contact_blurb') ?>

          <?php endwhile; ?>

          <main class="section-contact-address">

            <?php $address = new WP_Query(array(
              'post_type' => 'contact_us',
              'order' => 'ASC',
              'orderby' => 'ID'
            ))?>

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
