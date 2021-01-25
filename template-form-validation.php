<?php
/**
 * The template for displaying all pages
 * Template Name: Form Validation Test
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

  <header id="header-test" class="site-header container py-5 text-center">

    <h1>Form Validation Test</h1>

  </header><!-- #masthead -->

  <section class="the-form-container">

    <style>
    .error {
      color: red;
      font-size: .8rem;
      font-weight: bold;
    }
    </style>

    <div class="">
      <h2>Test Form</h2>

      <form action="" name="test-form" id="test-form" class="form">

        <div class="form-group">
          <label for="firstname">First Name</label><br>
          <input class="form-control mb-2" type="text" name="firstname" id="firstname" placeholder="John" required />
        </div>
        <div class="form-group">
          <label for="lastname">Last Name</label><br>
          <input class="form-control mb-2" type="text" name="lastname" id="lastname" placeholder="Doe" required />
        </div>
        <div class="form-group">
          <label for="email">Email</label><br>
          <input class="form-control mb-2" type="email" name="email" id="email" placeholder="john@doe.com" required />
        </div>


        <div class="form-group">
          <button class="btn btn-info" id="submit-btn" type="submit">Submit</button>
        </div>

      </form>
    </div>
  </section>
  <section id="php-testing">
    <?php 
      /**
     * COLLECT MAIN CATEGORY ID
     */
    $main_cat_name = 'app a dev';
    $sub_cat_1 = 'aaa';

    $main_cat_id = get_cat_ID($main_cat_name);
    // echo 'main category id: ' . $main_cat_id;

    /**
     * CHECKING IF CATEGORY EXISTS & IF THE MAIN CAT IS THE PARENT
     */
    if (term_exists( $sub_cat_1, 'category', $main_cat_id )) {

      $sub_cat_1_id = get_cat_ID($sub_cat_1);
      echo "$sub_cat_1 has the id: " . $sub_cat_1_id;

      $sub_cat_1_id_test = term_exists( $sub_cat_1, 'category', $main_cat_id );
      echo "<br> $sub_cat_1 has the id: " . $sub_cat_1_id_test['term_id'];
      // print_r($sub_cat_1_id_test);

      if (term_exists( $sub_cat_2, 'category', $sub_cat_1_id )) {

        echo "
      
        <div class='alert alert-danger rounded-0' role='alert'>
          The Secondo Category <strong>$sub_cat_2</strong> already exists ... 
          The Secondo Category must be unique ...
        </div>
        
        ";
        wp_die();
      }

    }
  ?>
  </section>

</main><!-- #main -->

<?php
get_footer();