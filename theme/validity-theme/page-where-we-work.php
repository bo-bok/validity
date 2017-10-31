<?php
/*
  Template Name: Where We Work Page
*/
/**
 * The template for displaying
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

        <!-- This paragraph will be replaced by coutnry name, if country is selected -->
        <p>When society decides that you have a learning disability or a
        mental health issue, the odds are stacked against you.</p>

        <!-- description here -->
        <p> We fearlessly represent people through the courts.
         We give them a voice to demand that their governments change unjust
         laws. We won’t stop until those voices are heard. Equality and inclusion
         are not abstract concepts. They are tangible realities. They are rights
         that can be achieved...but they have to be fought for.
        </p>
        <!-- dropdown here -->
        <!-- country map here -->


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
                    <a class="dropdown-country" href="#">Montenegro</a>
                    <a class="dropdown-country" href="#">Poland</a>
                    <a class="dropdown-country" href="#">Russia</a>
										<a class="dropdown-country" href="#">Romania</a>
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
