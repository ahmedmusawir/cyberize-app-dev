<?php
/**
 * The template for displaying all pages
 * Template Name: City State Ajax
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
/**
 * TAXONOMY INSERT TEST
 */
$parent_term = term_exists( 'florida', 'states' ); // array is returned if taxonomy is given
$parent_term_id = $parent_term['term_id'];  // get numeric term id

echo "<pre>";
  print_r($parent_term);
  echo $parent_term_id;
echo "</pre>";

$term_insert_result = wp_insert_term(
    'Fort Lauderdale',   // the term 
    'states', // the taxonomy
    array(
        'description' => 'A City in FL',
        'slug'        => 'Fort Lauderdale',
        'parent'      => $parent_term_id,
    )
);
echo 'New City Inserted :';
echo "<pre>";
  print_r($term_insert_result);
echo "</pre>";
?>

<main id="primary" class="site-main container">

  <header id="header-test" class="site-header container py-5 text-center">

    <h1>CITY STATE AJAX testing ...</h1>

  </header><!-- #masthead -->

  <section class="wp-loop">
    <?php 
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 10,
        'category__in' => [39],
        'tax_query' => [
          [
            'taxonomy' => 'states',
            'field' => 'slug',
            'terms' => ['florida', 'miami'],
            'operator' => 'NOT IN',
          ],
        ],
      );


      // $args = [
      //   'post_type' => 'post',
      //   'posts_per_page' => 10,
      // ];

      // $args = array(
      //   'post_type' => 'post',
      //   'posts_per_page' => 10,
      //   'category__in' => [39], //App Dev
      //   // 'category__in' => [4], //Tutoring
      //   'tax_query' => [
      //     'relation' => 'AND',
      //     [
      //       'taxonomy' => 'states',
      //       'field' => 'slug',
      //       'terms' => ['florida'],
      //     ],
      //     [
      //       'taxonomy' => 'states',
      //       'field' => 'slug',
      //       'terms' => ['tampa'],
      //     ],
      //   ],
      // );


      $query = new WP_Query( $args );

      if ( $query->have_posts() ) {
        
        while ( $query->have_posts() ) {
          $query->the_post();

          // CITY & STATE TAXONMY DISPLAY BY LIST START
          $tax = get_the_terms( get_the_ID(), 'states');
          // echo '<pre>';
          // print_r($tax);
          // echo '</pre>';
          foreach( $tax as $term ) {
            if ( $term->parent == 0 ) {
              // echo '<br>State: ' . $term->name;
              $current_state = $term->name;
            } else {
              $current_city = $term->name;
            }
          } 

          echo '
          <p class="text-dark text-uppercase" style="font-size: .8rem; margin-bottom: 0;">
            <small class="font-weight-bold">City: 
              <span class="text-info">' . $current_city .',</span> State: <span class="text-info">' . $current_state .'</span>
            </small>
          </p>';

          the_content();
          the_ID();
          // SHOW STATE & CITY IN A PARENT CHILD ORDER
          // print_taxonomy_ranks( get_the_terms( get_the_ID(), 'states' ) );


          $cats = get_the_category();
          foreach( $cats as $cat ) {
            if ( $cat->parent == 0 ) {
              // echo '<br>State: ' . $cat->name;
              $current_main_cat = $cat->name;
            } 
          }
          echo '<pre>';
          // print_r($cats);
          // print_r($cats[0]->name);
          echo $current_main_cat;
          echo '</pre>';
          
        }
      } else {

        echo 'No Post Found ...';
        
      }
    ?>
  </section>

</main><!-- #main -->

<?php
get_footer();