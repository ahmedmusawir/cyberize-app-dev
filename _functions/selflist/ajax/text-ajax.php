<?php 
/**
 * INSERT MULTI LEVEL CATEGORIES WITH AJAX
 */

add_action('wp_ajax_nopriv_test_ajax', 'test_ajax');
add_action('wp_ajax_test_ajax', 'test_ajax');

 function test_ajax() {

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
 }