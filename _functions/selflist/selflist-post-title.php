<?php
 /**
 * ADDING CUSTOM TITLE WITH ID TO LIST POST
 * DID NOT WORK
 */

function wpd_default_title_filter( $post_title, $post ) {
  if( 'post' == $post->post_type ) {
      return $post->ID;
  }

  // $post_title = "The List ID: "
  return $post_title;
}
add_filter( 'default_title', 'wpd_default_title_filter', 20, 2 );