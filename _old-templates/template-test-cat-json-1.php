<?php
/**
 * The template for displaying all pages
 * Template Name: Test Cat JSON
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

  <!-- START OF MAIN CAT TO JSON -->

  <section id="main-cat-insert" class="p-5 mt-5">

    <div class="cat-json">

      <?php 
    
           /**
       * 1ST LEVEL BEGINS
       */
      $args = array( 
        'parent' => 0,
        'exclude' => 1,
        'hide_empty' => 1,
        'hierarchical' => true 
      );
      $main_cats = get_categories($args);

      $results = array(
        'mainCat' => array(
          'primo' => array()
        )
      );
      
      /**
       * 1ST LEVEL CATEGORY LOOP
       */
      foreach($main_cats as $main_cat) {
        // echo '<pre>';
        // print_r($main_cat);
        // echo '</pre>';
        // echo $main_cat->slug . '<br>';

        array_push($results['mainCat'], array(
          'main-cat-name' => $main_cat->name,
          'main-cat-slug' => $main_cat->slug,
          'main-cat-id' => $main_cat->term_id
        ));

        $new_results = get_selflist_sub_cats_to_json($main_cat->term_id);


        array_push($results['mainCat']['primo'], array(
          $new_results
        ));
      }

      $json_data = json_encode($results, JSON_PRETTY_PRINT);
      // $json_data = json_encode($new_results, JSON_PRETTY_PRINT);
      echo $json_data;
    
    
    ?>

    </div>

  </section>

  <!-- END OF MAIN CAT TO JSON -->


</main><!-- #main -->

<?php
get_footer();