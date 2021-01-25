<?php
/**
 * The template for displaying all pages
 * Template Name: Test Cat JSON
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

<main id="primary" class="site-main container">

  <!-- START OF MAIN CAT TO JSON -->

  <section id="main-cat-insert" class="p-5 mt-5">

    <div class="cat-json">

      <?php get_selflist_main_cats_to_json(); ?>

    </div>

  </section>

  <!-- END OF MAIN CAT TO JSON -->


</main><!-- #main -->

<?php
get_footer();