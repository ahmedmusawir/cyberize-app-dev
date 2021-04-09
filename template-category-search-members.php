<?php
/**
 * The template for displaying all pages
 * Template Name: Category Search Index Members
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

<div id="primary" class="site-main container pt-5">

  <!-- <hr> -->

  <section id="selflist-search-input-box" class="selflist-search-input-box">

    <input type="text" id="cat-search-input-json" class="selflist-search-input">
    <i class="fas fa-search"></i>

  </section>


  <div id="category-search-json-result" class="card-columns">


  </div> <!-- #main -->

  <?php
get_footer();