<?php 
/**
 * DELSIT - LIST STATUS UPDATE TO PENDING WITH AJAX
 */

add_action('wp_ajax_nopriv_delete_list_permanently_ajax', 'delete_list_permanently_ajax');
add_action('wp_ajax_delete_list_permanently_ajax', 'delete_list_permanently_ajax');

 function delete_list_permanently_ajax() {

  $delist_id = $_POST['delistId'];

  echo "DeList ID: $delist_id"; 

  // $the_post = get_post($delistId);

  // echo '<pre>';
  // echo print_r($the_post);
  // echo '</pre>';

  // FOLLOWING IS A MUST FOR AJAX
  wp_die();

 }