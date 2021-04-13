<?php 
/**
 * DELSIT - LIST STATUS UPDATE TO PENDING WITH AJAX
 */

add_action('wp_ajax_nopriv_relist_data_update_ajax', 'relist_data_update_ajax');
add_action('wp_ajax_relist_data_update_ajax', 'relist_data_update_ajax');

 function relist_data_update_ajax() {

  $delist_id = $_POST['delistId'];


  $delist_args = array(
    'ID'           => $delist_id,
    'post_status'   => 'publish',
  );

  wp_update_post( $delist_args, true );                        
      if (is_wp_error($delist_id)) {
        $errors = $delist_id->get_error_messages();
        foreach ($errors as $error) {
          echo $error;
      }
  }

  echo "ReList ID: $delist_id"; 


  // FOLLOWING IS A MUST FOR AJAX
  wp_die();

 }