<?php 
/**
 * DELSIT - LIST STATUS UPDATE TO PENDING WITH AJAX
 */

add_action('wp_ajax_nopriv_relist_data_update_ajax', 'relist_data_update_ajax');
add_action('wp_ajax_relist_data_update_ajax', 'relist_data_update_ajax');

 function relist_data_update_ajax() {

  $relist_id = $_POST['relistId'];

  $the_list = get_post($relist_id);
  $the_list_cats = get_the_category($relist_id);
  $cat_results = [];

  // GET THE MAIN CAT
  foreach ($the_list_cats as $cat) {
    if ($cat->parent == 0 ) {
      $new_results = get_selflist_sub_cats_to_json($cat->term_id);

      $cat_results = [
        'mainCatName' => $cat->name,
        'mainCatId' => $cat->term_id,
        $new_results,
      ];
    }
  }

  $list_details = [
    'list_content' => $the_list->post_content,
    'list_cats' => $cat_results,
  ];

  wp_send_json($list_details);





  // FOLLOWING IS A MUST FOR AJAX
  wp_die();

 }