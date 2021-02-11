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
<header id="header-list-preview" class="site-header container py-2 text-center">

  <figure class="logo-container">

    <!-- <a href="/list-index" class="list-links display-4 d-block">LISTINGS</a> -->

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      <img class="mx-auto d-block w-25 mt-4" src="/wp-content/uploads/2020/07/SelfListLogo.png" alt="">
    </a>

  </figure>

</header><!-- #masthead -->
<hr>

<section id="list-preview-ajax-data" class=""></section>
<div class="navigation-box container">
  <a href="/list-insert/" class="btn btn-outline-danger float-left">Cancel</a>
  <a href="#" class="btn btn-outline-danger float-right">Publish Settings</a>
</div>

<?php
get_footer();