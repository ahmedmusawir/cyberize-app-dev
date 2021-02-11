<?php
/**
 * The template for displaying all pages
 * Template Name: List Publish Summary
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
<?php 
// COLLECTING USER INFO 
$current_user_id = get_current_user_id();
$user_points = get_field('selflist_points', 'user_' . $current_user_id);
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

<section id="list-publish-success" class="text-center">
  <h3 class="text-uppercase mt-5"><small class="font-weight-bold">List Publish Summary</small></h3>
  <h6 class="text-uppercase">
    <small>
      Lister ID:
      <strong class="text-danger">
        <span class="current-user-id">
          <?php echo $current_user_id; ?>
        </span>
      </strong>
      &nbsp; Available Points:
      <strong class="text-danger">
        <span id="payment-summary-avail-points">
          <?php echo $user_points; ?>
        </span>
      </strong>
    </small>
  </h6>
  <h6 class="text-uppercase font-weight-bold">Listing #<span class="published-post-id"></span></h6>
  <p class="text-uppercase font-weight-bold">
    <small>List Publish Status:
      <strong id="list-publish-status">_____________</strong>
    </small><br>
    <small>Lister Points Update Status:
      <strong id="list-point-status">_____________</strong>
    </small>
  </p>
</section>
<div class="navigation-box container">
  <a href="/list-insert/" class="btn btn-outline-danger float-left">Create New List</a>
  <a href="#" class="btn btn-outline-danger float-right">Go To Your Lists</a>
</div>

<?php
get_footer();