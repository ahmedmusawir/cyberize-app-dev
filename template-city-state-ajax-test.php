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

get_header('ut');
?>

<main id="primary" class="site-main container">

  <?php 
  $args = [ 'parent' => 0, 'hide_empty' => 0 ];
  $state_list = get_terms( 'states', $args ); 

  // echo 'List of States :';
  // echo "<pre>";
  //   print_r($state_list);
  // echo "</pre>";

  // ADDING EMPTY ARRAY 
  $states_and_cities = [];
  $cities = [];

  // STATE LOOP
  foreach ( $state_list as $state ) {

    // Collect Cities
    $city_ids = get_term_children( $state->term_id, 'states' );

    foreach ( $city_ids as $city_id ) {
      $city_obj = get_term($city_id);

      array_push($cities, [
        'city_name' => $city_obj->name,
        'city_slug' => $city_obj->slug,
        'city_id' => $city_obj->term_id,
      ]);
      
    }
    

    array_push( $states_and_cities, [
      'state_name' => $state->name,
      'state_slug' => $state->slug,
      'state_id'   => $state->term_id,
      'cities' => $cities,
    ] );

    // echo 'List of Cities :';
    // echo "<pre>";
    // print_r($cities);
    // echo "</pre>";
    // Resetting the Cities Array
    $cities = [];
  }

  echo 'List of States & Cities :';
  echo "<pre>";
  print_r($states_and_cities);
  echo "</pre>";

  ?>

</main><!-- #main -->

<?php
get_footer();