<?php
/*
  Template Name: Where We Work Page
*/
/**
 * The template for displaying the Where We Work Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package validity
 */

get_header(); ?>

<body class="page-where-we-work">
  <div class="wrapper">
  <?php get_sidebar(); ?> <!-- sidebar = nav -->


  <section class="section-1">
    <div class="outer full-height centered with-footer">
      <div class="inner transition">

        <?php $blurb = new WP_Query(array(
          'post_type' => 'where_we_work_blurb'
        )); ?>
        <?php while ($blurb->have_posts()) : $blurb->the_post(); ?>
          <?php the_field('where_we_work_blurb_text'); ?>
        <?php endwhile; ?>

								<div class="dropdown dropdown-country-list">
									<span>Country</span>
									<div>
                    <a class="dropdown-country" href="#">Belgium</a>
                    <a class="dropdown-country" href="#">Bulgaria</a>
                    <a class="dropdown-country" href="#">Czech Republic</a>
                    <a class="dropdown-country" href="#">Hungary</a>
                    <a class="dropdown-country" href="#">Ireland</a>
                    <a class="dropdown-country" href="#">Kenya</a>
                    <a class="dropdown-country" href="#">Latvia</a>
                    <a class="dropdown-country" href="#">Lithuania</a>
                    <a class="dropdown-country" href="#">Moldova</a>
                    <a class="dropdown-country" href="#">Montenegro</a>
                    <a class="dropdown-country" href="#">Poland</a>
                    <a class="dropdown-country" href="#">Romania</a>
                    <a class="dropdown-country" href="#">Russia</a>
                    <a class="dropdown-country" href="#">Slovakia</a>
                    <a class="dropdown-country" href="#">Slovenia</a>
										<a class="dropdown-country" href="#">Uganda</a>
                    <a class="dropdown-country" href="#">UK</a>
										<a class="dropdown-country" href="#">Zambia</a>
									</div>
								</div>

      </div>
      <div class="filtered-posts">
        <img class="map" src="<?= get_template_directory_uri()?>/assets/img/countries/plain.png"></img>
      </div>
    </div>
  </section>



<!-- get_sidebar(); -->
<script type="text/javascript">
console.log('you are in herere');
let dropdownList = document.querySelectorAll(".dropdown-country");

console.log(dropdownList);
Object.keys(dropdownList).map((elem) => {
  var element = dropdownList[elem];
  var value = dropdownList[elem].getAttribute('value');

  element.addEventListener('click', function(value){
    jQuery(function($) {

      $.post(my_ajax_object.ajax_url, {
        'action': 'my_load_ajax_content',
        'value': value.target.text
      }, function(data) {
        var $response = $(data);
        var postdata = $response.filter('#postdata').html();
        console.log(postdata);
        $('.filtered-posts').html(postdata);
      });
    });
  });
});
</script>

<?php
get_footer();?>
</div>
