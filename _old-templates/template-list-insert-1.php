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

<main id="primary" class="site-main container">
  <img class="w-25 mx-auto d-block mt-5" src="/wp-content/uploads/2020/07/SelfListLogo.png" alt="">
  <hr>

  <header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"
      integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css"
      integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
  </header>

  <article class="main-content">

    <div class="row">

      <!-- LIST INSERT BLOCK -->
      <section class="col-sm-6">

        <article id="create-new-list-box" class="card p-3  animate__animated animate__zoomIn">

          <!-- THIS IS JUST A MOCK UI UNIT START -->

          <ul id="test-ui-cat-box" class="card  bg-light p-5 animate__animated animate__zoomIn d-none">
            <h5 class="font-weight-bold text-dark">Current categories for your List:</h5>
            <li class="text-dark font-weight-bold ml-1" style="list-style: none;">Tutoring</li>
            <ul>
              <li class="text-danger">Math</li>
              <ul>
                <li class="text-danger">Grade 10</li>
                <ul>
                  <li class="text-danger">Jackson Heights</li>
                </ul>
              </ul>
            </ul>
          </ul>

          <!-- THIS IS JUST A MOCK UI UNIT END -->

          <section id="category-choice-box">
            <label class="font-weight-bold" for="exampleFormControlTextarea1">Choose Your Categories:</label>

            <div class="row">
              <!-- MAIN CATEGORY DROPDOWN -->

              <div class="col-sm-8">
                <article class="main-cat-box">
                  <select id="select-main-cats" class="select-main-cats" placeholder="Pick A Main Category...">
                    <option value="">Select a Main Caterory...</option>
                    <!-- <option value="AL">Tutoring</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option> -->
                  </select>
                </article>
              </div>
              <div class="col-sm-4">
                <a href="#" id="main-cat-new-btn" class="btn btn-dark btn-sm btn-block">
                  New Category
                </a>
              </div>

            </div>
            <!-- END MAIN CATEGORY INTERNAL ROW -->

            <!-- PRIMO CATEGORY DROPDOWN -->
            <div class="row">

              <div class="col-sm-8">
                <article class="main-cat-box">
                  <select id="select-primo-cats" placeholder="Pick A Primo">
                    <option value="">Select a Primo...</option>
                    <!-- <option value="AL">Math</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option> -->
                  </select>
                </article>
              </div>
              <div class="col-sm-4">
                <a id="primo-cat-new-btn" href="#" class="btn btn-danger btn-sm btn-block">
                  New Primo
                </a>
              </div>

            </div>
            <!-- END PRIMO CATEGORY INTERNAL ROW -->

            <!-- SECONDO CATEGORY DROPDOWN -->
            <div class="row">

              <div class="col-sm-8">
                <article class="main-cat-box">
                  <select id="select-secondo-cats" placeholder="Pick A Secondo">
                    <option value="">Select a Secondo...</option>
                    <!-- <option value="AL">Grade 10</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option> -->
                  </select>
                </article>
              </div>
              <div class="col-sm-4">
                <a id="secondo-cat-new-btn" href="#" class="btn btn-danger btn-sm btn-block">
                  New Secondo
                </a>
              </div>

            </div>
            <!-- END SECONDO CATEGORY INTERNAL ROW -->

            <!-- TERZO CATEGORY DROPDOWN -->
            <div class="row">

              <div class="col-sm-8">
                <article class="main-cat-box">
                  <select id="select-terzo-cats" placeholder="Pick A Terzo">
                    <option value="">Select a Terzo</option>
                    <!-- <option value="AL">Jackson Heights</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option> -->
                  </select>
                </article>
              </div>
              <div class="col-sm-4">
                <a id="terzo-cat-new-btn" href="#" class="btn btn-danger btn-sm btn-block">
                  New Terzo
                </a>
              </div>

            </div>
            <!-- END TERZO CATEGORY INTERNAL ROW -->

            <!-- OTHER INFO INPUTS START -->
          </section>

          <div class="form-group mt-5">
            <label class="font-weight-bold" for="exampleFormControlTextarea1">Description:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
              placeholder="Add details of your list ..."></textarea>
          </div>

          <div class="form-group">
            <label class="font-weight-bold" for="exampleFormControlTextarea1">Contact Info:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp"
              placeholder="Your Name">
            <small id="textHelp" class="form-text text-muted">Example: Donald Trump</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp"
              placeholder="Your Address">
            <small id="textHelp" class="form-text text-muted">Example: Trump Tower, 721 Fifth Avenue New York City, NY
              10022 United States </small>
          </div>

          <div class="form-group">
            <label class="font-weight-bold" for="exampleFormControlTextarea1">Social Media:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp"
              placeholder="Your Facebook Info ...">
            <small id="textHelp" class="form-text text-muted">Example: https://facebook.com/mypage</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp"
              placeholder="Your Instagram Info">
            <small id="textHelp" class="form-text text-muted">Example: https://instagram.com/mypage</small>
          </div>

          <button id="#" type="submit" class="btn btn-primary">Submit</button>

          <!-- END OTHER INFO INPUTS  -->

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

      </section>
      <!-- LEFT COLUMN ENDS HERE -->


      <!-- CATEGORY SEARCH COLUMN [RIGHT COLUMN STARTS]-->
      <section class="col-sm-6">
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
    $(document).ready(function() {
      $('select').selectize({
        sortField: 'text'
      });
    });
    </script>
  </footer>

</main><!-- #main -->

<?php
get_footer();