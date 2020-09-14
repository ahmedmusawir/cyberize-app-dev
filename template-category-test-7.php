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


  <div class="card-columns">

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

    <div class="card border-danger mb-3">
      <div class="card-header bg-danger">
        <span class="text-light">List Count:</span>
        <span class="badge badge-pill badge-light">
          <?php echo $category->count ?></span>
      </div>


      <div class="card-body text-danger">
        <h5 class="card-title text-danger"><?php echo $category->name ?></h5>
        <section class="row">
          <div class="col-12">
            <ul>

              <?php get_sub_cats($category->term_id); ?>

              <!-- <li class="secondo">
                <i class="fas fa-arrow-right"></i>
                <a href="#" class="btn btn-outline-danger btn-sm">&nbsp;GRADE 10
                  <span class="badge badge-pill badge-dark">31</span>
                </a>
              </li>
              <li class="terzo">
                <i class="fas fa-arrow-right"></i>
                <a href="#" class="btn btn-outline-danger btn-sm">&nbsp;JACKSON HEIGHTS
                  <span class="badge badge-pill badge-dark">2</span>
                </a>
              </li> -->
            </ul>
          </div>
        </section>
      </div>
      <div class="card-footer border-danger bg-light">
        <small class="text-italic"> * Click Subcategoris to narrow down search ...</small>
      </div>
    </div> <!-- END of card -->

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
        
        echo '<li class="primo">';
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

      foreach($sub3_cats as $sub2_cat) {
        echo '<li class="primo">';
        echo '<a href="'. get_category_link( $sub2_cat->term_id ) .'" class="btn btn-outline-danger btn-sm">&nbsp;' . $sub2_cat->name .
              '<span class="badge badge-pill badge-dark">' . $sub2_cat->count . '</span>
             </a>';
        echo '</li>';
      }



      } //END get_sub2_cats
  }

  function get_sub2_cats($cat_id) {
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

     
     echo '<li class="primo">';
     echo '<a href="'. get_category_link( $sub_cat->term_id ) .'" class="btn btn-outline-danger btn-sm">&nbsp;' . $sub_cat->name .
           '<span class="badge badge-pill badge-dark">' . $sub_cat->count . '</span>
          </a>';
     echo '</li>';
   }
}
  
  ?>

</div><!-- #main -->




<?php
get_footer();


$args = array(
  'parent' => 0,
  'exclude' => 1
);
$categories = get_categories( $args );

/**
 * PRIMARY CATEGORY LOOP - WITH PARENT 0 
 * 
 */ 
foreach($categories as $category) {

    
    echo '<div class="card">';
    echo '<article class="card-body">';

    echo '<p><span class="text-bold font-weight-bold text-uppercase text-danger">Category:</span> <a href="' . get_category_link( $category->term_id ) . '" title="' . 
    sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
    
    echo '<p><span class="text-bold font-weight-bold text-uppercase text-danger"> Description:</span> ' . $category->description . '</p>';
    echo '<p><span class="text-bold font-weight-bold text-uppercase text-danger"> Post Count:</span> ' . $category->count . '</p>';  
    echo '<p><span class="text-bold font-weight-bold text-uppercase text-danger"> Cat Link:</span> ' . get_category_link( $category->term_id )  . '</p>';  

    echo '</article>';
    echo '</div>';


    /**
     * 2ND LEVEL BEGINS
     */
    $args = array( 
      'parent' => $category->term_id, // Gives 1st child only. child_of give all the children
      'hide_empty' => 0 
    );
    $sub2_cats = get_categories($args);
    echo "<pre>";
    // print_r($sub_cats);
    echo "</pre>";

    /**
     * 2ND LEVEL CATEGORY LOOP
     */
    foreach($sub2_cats as $sub_cat) {
      echo "<pre>";
      echo '2nd Level Child Name: ' . $sub_cat->name . '<br>';
      echo '2nd Level Child ID: ' . $sub_cat->term_id . '<br>';
      echo '2nd Level Child Post Count: ' . $sub_cat->count . '<br>';
      echo '2nd Level Child Link: ' . get_category_link($sub_cat->term_id) . '<br>';
      echo "</pre>";

        /**
         * 3RD LEVEL BEGINS
         */
        $args = array( 
          'parent' => $sub_cat->term_id, // Gives 1st child only. child_of give all the children
          'hide_empty' => 0 
        );
        $sub3_cats = get_categories($args);
        echo "<pre>";
        // print_r($sub3_cats);
        echo "</pre>";
        
        /**
         * 3RD LEVEL CATEGORY LOOP
         */
        foreach($sub3_cats as $sub_cat) {
          echo "<pre>";
          echo '  3RD Level Child Name: ' . $sub_cat->name . '<br>';
          echo '  3RD Level Child ID: ' . $sub_cat->term_id . '<br>';
          echo '  3RD Level Child Post Count: ' . $sub_cat->count . '<br>';
          echo '  3RD Level Child Link: ' . get_category_link($sub_cat->term_id) . '<br>';
          echo "</pre>";
  
            /**
             * 4TH LEVEL BEGINS
             */
            $args = array( 
              'parent' => $sub_cat->term_id, // Gives 1st child only. child_of give all the children
              'hide_empty' => 0 
            );
            $sub4_cats = get_categories($args);
            echo "<pre>";
            // print_r($sub4_cats);
            echo "</pre>";

            /**
             * 4TH LEVEL CATEGORY LOOP
             */
            foreach($sub4_cats as $sub_cat) {
              echo "<pre>";
              echo '      4TH Level Child Name: ' . $sub_cat->name . '<br>';
              echo '      4TH Level Child ID: ' . $sub_cat->term_id . '<br>';
              echo '      4TH Level Child Post Count: ' . $sub_cat->count . '<br>';
              echo '      4TH Level Child Link: ' . get_category_link($sub_cat->term_id) . '<br>';
              echo "</pre>";
            }
        }
    }
}