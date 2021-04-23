<?php
/**
 * The template for displaying all pages
 * Template Name: List HMU Thanx
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyberize-app-dev
 */

if (is_user_logged_in()) {
  get_header();
} else {
  get_header('loggedout');
}
?>

<main id="primary" class="site-main container">
  <h2 class="text-center font-weight-bold mt-5">SelfList HMU <small>(Hit Me Up)</small></h2>
  <!-- THE HMU THANX MESSAGE -->
  <h3 class="text-center font-weight-bold mt-5">Your HMU Message has been sent successfully!</h3>

</main><!-- #main -->

<?php
get_footer();