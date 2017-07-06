<?php
/*
  Template Name: Donation Page
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

<body class="page-donate">
  <div class="wrapper">
    <?php get_sidebar(); ?> <!-- sidebar = nav -->

<section class="section-1">
  <div class="outer">
    <div class="inner">

      <div class="donate-intro">
        <div class="container">
          <h1 class="page-heading">Donate</h1>
          <p>By supporting Validity you will help us use the law to advance the rights of people around the world. </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-2">
  <div class="outer">
    <div class="inner">
    <div class="donate">
      <div class="donate__content">
      <h1 class="page-heading">Why donate to Validity?</h1>
      <p>We have changed the lives of many individuals who would otherwise have been forgotten. We are the only charity using the law to advance the rights of people with mental health issues and intellectual disabilities worldwide. By focusing our efforts on test cases we have helped to redefine archaic laws to benefit thousands of people, not just our clients.</p>

      <p>Our core funding, including our fundraising, administration, and governance, is covered by the Open Society Foundations, meaning that 100% of your donation goes directly to our human rights work.

      As a small charity every donation makes a real difference to the work that we undertake.

      If you would like to know more, or are interested in making a philanthropic gift, please contact Antony Butcher, Development Officer, on antony@validity.ngo</p>

      <p>Other ways to donate:

      Send a cheque payable to ‘Validity UK’ and post it to:
        PO Box 68543
        London SW15 9FP
        UNITED KINGDOM
      </p>
    </div>
</div>
  </div>
</div>
</section>

<section class="section-3">
  <div class="outer">
    <div class="inner">

    <div class="donate">

      <div id="CAFDonateWidgetContainer"></div>
    </div>
  </div>
  </div>
</section>


<script type="text/javascript">
var caf_BeneficiaryCampaignId=480;
document.write(unescape('%3Cscript id="CAFDonateWidgetLoader_script" src="https://cafdonate.cafonline.org/js/CAF.DonateWidgetLoader_script.js" type="text/javascript"%3E%3C/script%3E'));
</script>

<?php
get_footer(); ?>
</div>
