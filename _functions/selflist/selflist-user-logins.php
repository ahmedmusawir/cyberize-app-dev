<?php
/**
 * REMOVING ADMIN BAR FOR ALL BUT ADMINS 
 */
 
function remove_admin_bar() {
  if (!current_user_can('administrator') && !is_admin()) {
    show_admin_bar(false);
  }
}
add_action('after_setup_theme', 'remove_admin_bar');

/**
 * LOGIN REDIRECT SUBSCRIBERS & LISTING MANAGERS
*/

function my_login_redirect( $redirect_to, $request, $user ) {
    //validating user login and roles
    if (isset($user->roles) && is_array($user->roles)) {
        //is this a gold plan subscriber?
        if (in_array('listing_manager', $user->roles)) {
            // redirect them to their special plan page
            $redirect_to = "/test-chat";
        } elseif (in_array('subscriber', $user->roles)) {
          //all other members
          $redirect_to = "/list-customer-home";
        } else {
            //all other members
            $redirect_to = "/wp-admin";
        }
    }
    return $redirect_to;
    // echo $redirect_to;
    // die();
}
 
add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );

/**
 * LOG OUT REDIRECTION TO HOME
 */

function ps_redirect_after_logout(){
  wp_redirect( '/' );
  exit();
}
add_action('wp_logout','ps_redirect_after_logout');

/** 
 * LOG IN / LOG OUT BUTTON IN THE PRIMARY NAV
 */

function wti_loginout_menu_link( $items, $args ) {
   if ($args->theme_location == 'menu-1') {
      if (is_user_logged_in()) {
         $items .= '<li class="right"><a href="'. wp_logout_url() .'">'. __("Log Out") .'</a></li>';
      } else {
         $items .= '<li class="right"><a href="'. wp_login_url(get_permalink()) .'">'. __("Log In") .'</a></li>';
      }
   }
   return $items;
}

add_filter( 'wp_nav_menu_items', 'wti_loginout_menu_link', 10, 2 );