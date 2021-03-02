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
    /**
     * CATEGORY INSERT TEST
     */
    $args = [ 'parent' => 0, 'hide_empty' => 1 ];
    // $args = [ 'parent' => 0, 'hide_empty' => 0 ];
    $state_list = get_terms( 'states', $args ); // array is returned if taxonomy is given

    // echo 'List of States :';
    // echo "<pre>";
    //   print_r($state_list);
    // echo "</pre>";

    // EMPTY ARRAY
    $states_and_cities = [];
    $cities = [];

    foreach ( $state_list as $state ) {
      $cities_ids = get_term_children($state->term_id, 'states'); // tax_id and taxonomy slug


      foreach ( $cities_ids as $city_id ) {
        $city_obj = get_term($city_id);
        // echo "<pre>";
        // print_r($city_obj);
        // echo "</pre>";

        array_push( $cities, [
          'city_name' => $city_obj->name,
          'city_slug' => $city_obj->slug,
          'city_id' => $city_obj->term_id,
        ] );
      }
      // echo "<pre>";
      // print_r($cities);
      // echo "</pre>";

      array_push( $states_and_cities, [
        'state_name' => $state->name,
        'state_slug' => $state->slug,
        'state_id' => $state->term_id,
        'cities' => $cities,
      ] );

      $cities = [];

    }

    echo 'List of States :';
    echo "<pre>";
      print_r($states_and_cities);
    echo "</pre>";

    // $json_data = wp_send_json($states_and_cities); // auto die() invoked

    // echo "<pre>";
    // echo $json_data;
    // echo "</pre>";

    $array = json_encode($states_and_cities, JSON_PRETTY_PRINT);

    echo "<pre>";
    // echo $array;
    echo "</pre>";

?>

</main><!-- #main -->

<?php
get_footer();