<?php
/**
 * The template for displaying all pages
 * Template Name: Date Picker Test
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyberize-app-dev
 */

get_header();
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

<main id="primary" class="site-main container">

  <header id="header-test" class="site-header container py-5 text-center">

    <h1>Date Picker Test</h1>

    <div class="datepicker-box"></div>
    <input type="text" class="datepicker-input">

    <section class="datepicker-range-box">
      <div class="row">
        <div class="col-sm-6">
          <h3>List From:</h3>
          <div class="outputFromDate"></div>
          <input type="text" id="list-from-date-input">
        </div>
        <div class="col-sm-6">
          <h3>List Till:</h3>
          <div class="outputToDate"></div>
          <input type="text" id="list-to-date-input">
        </div>
      </div>
    </section>

  </header><!-- #masthead -->

</main><!-- #main -->

<?php
get_footer();