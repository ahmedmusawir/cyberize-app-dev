<?php
/**
 * The template for displaying all pages
 * Template Name: List Preview
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

<section id="list-preview-ajax-data" class=""></section>
<div class="navigation-box container">
  <a href="/list-insert/" class="btn btn-outline-danger float-left">Cancel</a>
  <a href="/list-payment-summary-by-points/" class="btn btn-outline-danger float-right">Publish Settings</a>
</div>

<?php
get_footer();