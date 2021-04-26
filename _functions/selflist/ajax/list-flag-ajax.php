<?php 
/**
 * INSERT MULTI LEVEL CATEGORIES WITH AJAX
 */

add_action('wp_ajax_nopriv_list_flag_ajax', 'list_flag_ajax');
add_action('wp_ajax_list_flag_ajax', 'list_flag_ajax');

 function list_flag_ajax() {

  $the_data = $_POST['newPostData'];

  // echo '<pre>';
  // echo print_r($the_data);
  // echo '</pre>';

  $args = [
    'post_title' => $the_data['title'],
    'post_content' => sanitize_text_field($the_data['content']),
    'post_type' => 'flag',
    'post_status' => 'publish',
  ];
  // CREATING FLAG CUSTOM POST
  $post_result = wp_insert_post($args, true);
  // EMAIL TO ADMIN AND LIST OWNER
  $admin_email = get_bloginfo('admin_email');
  
  // echo $admin_email;

  die();
 }