<?php 
/**
 * INSERT MULTI LEVEL CATEGORIES WITH AJAX
 */

add_action('wp_ajax_nopriv_selflist_main_cat_insert_ajax', 'selflist_main_cat_insert_ajax');
add_action('wp_ajax_selflist_main_cat_insert_ajax', 'selflist_main_cat_insert_ajax');

 function selflist_main_cat_insert_ajax() {

  $main_cat = $_POST['mainCat'];
  $primo_cat = $_POST['primoCat'];
  $secondo_cat = $_POST['secondoCat'];
  $terzo_cat = $_POST['terzoCat'];

  echo "
  <h4>Main Cat: $main_cat</h4><br>
  <h4>Primo Cat: $primo_cat</h4><br>
  <h4>Secondo Cat: $secondo_cat</h4><br>
  <h4>Terzo Cat: $terzo_cat</h4><br>
  "; 
  // echo '<h1>Working</h1>';
  
  // THE FOLLOWING IS A MUST FOR AJAX PHP FUNCTIONS
  die();
}