<?php
/**
 * The template for displaying all pages
 * Template Name: List Signup
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyberize-app-dev
 */

get_header('loggedout');
?>

<main id="primary" class="site-main container">

  <header id="header-test" class="site-header container py-5 text-center">

    <h1 class="text-center text-danger">Custom Signup Coming Soon ...</h1>

    <h3 class="text-center pt-5 h3">If you are already a member, please log in</h3>
    <a class="text-center btn btn-danger btn-lg" href="<?php echo wp_login_url(); ?>">Log In</a>

  </header><!-- #masthead -->

</main><!-- #main -->

<?php
get_footer();