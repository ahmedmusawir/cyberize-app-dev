<?php
/**
 * The template for displaying all pages
 * Template Name: Category Test
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


  <div id="category-search-page" class="card-columns">

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

      <div class="card border-danger mb-3">
        <div class="card-header bg-danger">
          <span class="text-light">List Count:</span>
          <span class="badge badge-pill badge-light">
            <?php echo $category->count ?></span>
        </div>


        <div class="card-body text-danger">
          <h5 class="card-title text-danger"><?php echo $category->name ?></h5>
          <section class="">
            <div class="">
              <ul class="primo">

                <?php get_sub_cats($category->term_id); ?>

              </ul>
            </div>
          </section>
        </div>
        <div class="card-footer border-danger bg-light">
          <small class="text-italic"> * Click Subcategoris to narrow down search ...</small>
        </div>
      </div> <!-- END of card -->

    </a>

    <?php endforeach; ?>

  </div> <!-- END card-columns -->

  <hr>

  <?php

  function get_sub_cats($cat_id) {
       /**
       * 2ND LEVEL BEGINS
       */
      $args = array( 
        'parent' => $cat_id, // Gives 1st child only. child_of give all the children
        'hide_empty' => 0 
      );
      $sub2_cats = get_categories($args);

      /**
       * 2ND LEVEL CATEGORY LOOP
       */
      foreach($sub2_cats as $sub_cat) {
        
          echo '<li>';
            echo '<a href="'. get_category_link( $sub_cat->term_id ) .'" class="btn btn-outline-danger btn-sm">&nbsp;' . $sub_cat->name .
              '<span class="badge badge-pill badge-dark">' . $sub_cat->count . '</span>
             </a>';
          echo '</li>';

        /**
         * 3ND LEVEL BEGINS
         */
        $args = array( 
          'parent' => $sub_cat->term_id, // Gives 1st child only. child_of give all the children
          'hide_empty' => 0 
        );
        $sub3_cats = get_categories($args);
        /**
         * 3RD LEVEL CATEGORY LOOP
         */
        foreach($sub3_cats as $sub2_cat) {
        echo '<ul class="secondo">';
          echo '<li>';
            echo '<a href="'. get_category_link( $sub2_cat->term_id ) .'" class="btn btn-outline-danger btn-sm">&nbsp;' . $sub2_cat->name .
                '<span class="badge badge-pill badge-dark">' . $sub2_cat->count . '</span>
              </a>';
          echo '</li>';
        echo '</ul>';


            /**
             * 4TH LEVEL BEGINS
             */
            $args = array( 
              'parent' => $sub2_cat->term_id, // Gives 1st child only. child_of give all the children
              'hide_empty' => 0 
            );
            $sub4_cats = get_categories($args);

            foreach($sub4_cats as $sub3_cat) {
        echo '<ul class="terzo">';
          echo '<li>';
              echo '<a href="'. get_category_link( $sub3_cat->term_id ) .'" class="btn btn-outline-danger btn-sm">&nbsp;' . $sub3_cat->name .
                    '<span class="badge badge-pill badge-dark">' . $sub3_cat->count . '</span>
                  </a>';
          echo '</li>';
        echo '</ul>';
        

            
            } //END sub4_cats

        } //END sub3_cats

      } //END get_sub2_cats
  }
  
  ?>

</div><!-- #main -->

<?php
get_footer();