<?php
/**
 * The template for displaying all pages
 * Template Name: List Insert
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
<style>
.error {
  color: red;
  font-size: .8rem;
  font-weight: bold;
}

input {
  color: red;
  font-size: .8rem;
  font-weight: bold;
}

input::placeholder {
  font-size: .8rem !important;
}

textarea::placeholder {
  font-size: .8rem !important;
}

#lister-facebook-error,
#lister-twitter-error,
#lister-instagram-error,
#lister-yelp-error,
#lister-linkedin-error,
#lister-google-plus-error {
  position: absolute;
  top: 125%;
  left: 60%;
}
</style>

<main id="primary" class="site-main container-fluid">

  <header>
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css"
      integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
  </header>

  <article class="main-content">

    <div class="row">
      <!-- LIST INSERT BLOCK -->
      <section class="col-12 col-sm-12 col-md-6">

        <article id="create-new-list-box" class="card p-3  animate__animated animate__zoomIn">

          <!-- MAIN CATEGORY SET DISPLAY AFTER INSERTED INTO THE DB -->

          <?php get_template_part('_custom-template-parts/insert-pg-main-cat-set-display-after-creation'); ?>

          <!-- END MAIN CATEGORY SET DISPLAY AFTER INSERTED INTO THE DB -->

          <!-- CATEGORY SELECTIZE CHOICE BOX - MAIN, PRIMO, SECONDO & TERZO -->

          <?php get_template_part('_custom-template-parts/list-insert-pg-cat-select-box'); ?>

          <!-- END CATEGORY SELECTIZE CHOICE BOX - MAIN, PRIMO, SECONDO & TERZO -->

          <!-- THE MAIN FORM INPUTS START -->

          <?php get_template_part('_custom-template-parts/list-insert-pg-main-inputs'); ?>

          <!-- END THE MAIN FORM INPUTS  -->

        </article> <!-- END OF id="create-new-list-box" -->

        <!-- START OF MAIN CAT INSERT FORM -->

        <?php get_template_part('_custom-template-parts/insert-pg-main-cat-insert-form'); ?>

        <!-- END OF MAIN CAT INSERT FORM -->

        <!-- START OF PRIMO CAT INSERT FORM -->

        <?php get_template_part('_custom-template-parts/insert-pg-primo-cat-insert-form'); ?>

        <!-- END OF PRIMO CAT INSERT FORM -->

        <!-- START OF SECONDO CAT INSERT FORM -->

        <?php get_template_part('_custom-template-parts/insert-pg-secondo-cat-insert-form'); ?>

        <!-- END OF SECONDO CAT INSERT FORM -->

        <!-- START OF TERZO CAT INSERT FORM -->

        <?php get_template_part('_custom-template-parts/insert-pg-terzo-cat-insert-form'); ?>

        <!-- END OF TERZO CAT INSERT FORM -->

        <!-- LIST INSERT USER VALIDATION BOX -->
        <section id="list-insert-user-validation-box" class="card p-5 animate__animated animate__zoomIn d-none">

          <ul class="list-group">
            <!-- THE HEADER ANNOUNCEMENT -->
            <li class="list-group-item active bg-light text-primary">Please Verify Categories Before Creating:<br>
              <small>(You cannot edit categories once they are created)</small>
            </li>
            <!-- THE CATEGORY LIST -->
            <li class="list-group-item">Main Category: <span class="pl-3 font-weight-bold"
                id="list-user-validation-main-cat"></span></li>
            <li class="list-group-item">Primo Category: <span class="pl-3 font-weight-bold"
                id="list-user-validation-primo-cat"></span>
            </li>
            <li class="list-group-item">Secondo Category: <span class="pl-3 font-weight-bold"
                id="list-user-validation-secondo-cat"></span>
            </li>
            <li class="list-group-item">Terzo Category: <span class="pl-3 font-weight-bold"
                id="list-user-validation-terzo-cat"></span>
            </li>
            <!-- THE REST OF THE FORM INPUT VALUES -->
            <li class="list-group-item">Description: <span class="pl-3 font-weight-bold"
                id="list-user-validation-description"></span></li>
            <li class="list-group-item">Name: <span class="pl-3 font-weight-bold" id="list-user-validation-name"></span>
            </li>
            <li class="list-group-item">Phone: <span class="pl-3 font-weight-bold"
                id="list-user-validation-phone"></span>
            </li>
            <li class="list-group-item">City: <span class="pl-3 font-weight-bold" id="list-user-validation-city"></span>
            </li>
            <li class="list-group-item">Zip: <span class="pl-3 font-weight-bold" id="list-user-validation-zip"></span>
            </li>
            <li class="list-group-item">State: <span class="pl-3 font-weight-bold"
                id="list-user-validation-state"></span>
            </li>
            <!-- SOCIAL MEDIA LINKS -->
            <li class="list-group-item">Facebook: <span class="pl-3 font-weight-bold"
                id="list-user-validation-facebook"></span>
            </li>
            <li class="list-group-item">Yelp: <span class="pl-3 font-weight-bold" id="list-user-validation-yelp"></span>
            </li>
            <li class="list-group-item">Instagram: <span class="pl-3 font-weight-bold"
                id="list-user-validation-instagram"></span>
            </li>
            <li class="list-group-item">Linkedin: <span class="pl-3 font-weight-bold"
                id="list-user-validation-linkedin"></span>
            </li>
            <li class="list-group-item">Google Plus: <span class="pl-3 font-weight-bold"
                id="list-user-validation-google-plus"></span>
            </li>
            <li class="list-group-item">Twitter: <span class="pl-3 font-weight-bold"
                id="list-user-validation-twitter"></span>
            </li>
          </ul>

          <button id="list-insert-submit-btn" type="button" class="btn btn-primary btn-block">Create
            Your List</button>
          <button id="list-insert-cancel-btn" type="button" class="btn btn-secondary btn-block">Go Back</button>

          <!-- LEFT OVER FROM CAT USER VALIDATION PAGE - DEL LATER 
          <div class="my-3">
            <span id="ajax-failed-message-1"></span>
          </div> -->

        </section>
        <!-- END OF LIST INSERT USER VALIDATION BOX -->


      </section>
      <!-- LEFT COLUMN ENDS HERE -->


      <!-- CATEGORY SEARCH COLUMN [RIGHT COLUMN STARTS]-->
      <section class="col-12 col-sm-12 col-md-6">
        <section id="selflist-search-input-box" class="selflist-search-input-box mb-3 ">

          <input type="text" id="cat-search-input" class="selflist-search-input">
          <i class="fas fa-search"></i>

        </section>

        <div id="category-search-result" class="moose-cols">

          <?php 

$args = array(
  'parent' => 0,
  'exclude' => 1
);
$categories = get_categories( $args );

/**
 * PRIMARY CATEGORY LOOP - WITH PARENT 0 
 * 
 */ 

foreach($categories as $category) : ?>

          <a href="<?php echo get_category_link( $category->term_id ); ?>">

            <div class="card-moose border-danger mb-3 animate__animated animate__zoomIn">
              <!-- <div class="card border-danger mb-3 animate__animated"> -->
              <div class="card-header bg-dark">
                <span class="text-light">List Count:</span>
                <span class="badge badge-pill badge-light">
                  <?php echo $category->count ?></span>
              </div>


              <div class="card-body text-danger">
                <h5 class="card-title text-danger"><?php echo $category->name ?></h5>
                <section class="">
                  <div class="">
                    <ul class="primo">

                      <?php get_selflist_sub_cats($category->term_id); ?>

                    </ul>
                  </div>
                </section>
              </div>
              <div class="card-footer border-danger bg-light d-none">
                <small class="text-italic"> * Click Subcategoris to find quickly</small>
              </div>
            </div> <!-- END of card -->

          </a>

          <?php endforeach; ?>

        </div> <!-- END card-columns -->
      </section>
    </div>

  </article>

  <footer>
    <script>
    // $(document).ready(function() {
    //   $('select').selectize({
    //     sortField: 'text'
    //   });
    // });
    </script>
  </footer>

</main><!-- #main -->

<?php
get_footer();