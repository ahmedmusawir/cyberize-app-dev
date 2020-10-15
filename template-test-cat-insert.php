<?php
/**
 * The template for displaying all pages
 * Template Name: Test Cat Insert
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

  <!-- START OF MAIN CAT INSERT FORM -->

  <section id="main-cat-insert" class="card p-5 animate__animated animate__zoomIn  mt-5">

    <div class="form-box">

      <form>
        <label class="font-weight-bold" for="exampleFormControlTextarea1">Insert New Category and
          Subcategories</label>

        <div class="form-group">
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp"
            placeholder="New Main Category">
          <small id="textHelp" class="form-text text-muted">This is the Main Category</small>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp"
            placeholder="New Primo Category">
          <small id="textHelp" class="form-text text-muted">This is the Primo Category</small>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp"
            placeholder="New Secondo Category">
          <small id="textHelp" class="form-text text-muted">This is the Secondo Category</small>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp"
            placeholder="New Terzo Category">
          <small id="textHelp" class="form-text text-muted">This is the Terzo Category</small>
        </div>

        <button id="main-cat-insert-btn" type="button" class="btn btn-primary btn-block">Submit</button>
      </form>

    </div>

  </section>

  <!-- END OF MAIN CAT INSERT FORM -->


</main><!-- #main -->

<?php
get_footer();