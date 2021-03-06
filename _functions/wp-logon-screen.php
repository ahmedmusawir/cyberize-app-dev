<?php
/**
 * CUSTOM REGISTER URL SETUP
 */
function custom_register_url($register_url)
{
    $register_url = get_permalink($register_page_id = 778);
    return $register_url;
}
add_filter('register_url', 'custom_register_url');

/**
 * FUNCTION FOR LOGO CHANGE
 */
function cy_login_logo()
{?>
<style type="text/css">
#login h1 a,
.login h1 a {
  background-image: url('/wp-content/uploads/SelfListLogo-login.png');
  height: 60px;
  width: 323px;
  background-size: 323px 60px;
  background-repeat: no-repeat;
  padding-bottom: 30px;
}
</style>
<?php }

add_action('login_enqueue_scripts', 'cy_login_logo');

/**
 * FUNCTION FOR LOGO URL and TEXT CHANGE
 */

function my_login_logo_url()
{
    return home_url();
}
add_filter('login_headerurl', 'my_login_logo_url');

function my_login_logo_url_title()
{
    return 'SelfLIST';
}
add_filter('login_headertext', 'my_login_logo_url_title');

/**
 * FUNCTION FOR LOGIN PAGE STYLES
 */

function my_login_stylesheet()
{
    wp_enqueue_style('custom-login', get_stylesheet_directory_uri() . '/assets/admin-styles/style-login.css');
    // wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/style-login.js' );
}
add_action('login_enqueue_scripts', 'my_login_stylesheet');