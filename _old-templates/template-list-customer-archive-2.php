<?php
/**
 * The template for displaying all pages
 * Template Name: List Customer Archive
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyberize-app-dev
 */

get_header();

?>
<?php
/**
 * CUSOMER/USER PROFILE
 */
$current_user = wp_get_current_user();
// $user_points = get_field('selflist_points', 'user_' . $current_user->id);
// $user_registered = $current_user->user_registered;
// $user_email = $current_user->user_email;
// $user_total_list_count = count_user_posts($current_user->id, 'post', false); // false for all posts
// $user_published_list_count = count_user_posts($current_user->id, 'post', false); // true for public only
?>

<main id="primary" class="site-main container customer-profile-page">

  <div class="row">
    <!-- LEFT PROFILE MENU COLUMN -->
    <div class="col-sm-12 col-md-4">
      <?php
wp_nav_menu(
    array(
        'theme_location' => 'customer-profile-menu',
        'menu_id' => 'profile-menu',
    )
);
?>
    </div>
    <!-- LEFT PROFILE MENU COLUMN ENDS -->
    <!-- RIGHT PROFILE CONTENT COLUMN -->
    <div class="col-sm-12 col-md-8">
      <a href="/list-insert/" class="btn btn-danger float-right">Add New List</a>
      <h3 class="text-uppercase"><small class="font-weight-bold">Your Lists</small></h3>
      <h2 class="h2"><?php echo $current_user->display_name; ?>'s Lists</h2>
      <hr>
      <h5 class="font-weight-bold">ACTIVE LISTS:</h5>
      <?php
// PUBLISHED LIST COUNT
$arg_published = array(
    'author' => $current_user->ID,
    'orderby' => 'post_date',
    'order' => 'ASC',
    'post_status' => 'publish',
    'posts_per_page' => -1,
);

$current_user_published_posts = get_posts($arg_published);

// LIST COUNT
echo '<h6>[ <span><small class="font-weight-bold">TOTAL PUBLISHED LISTS:  ' .
count($current_user_published_posts) .
    '</small></span> ]
</h6>';
echo '<hr>';
// DISPLAY LIST
foreach ($current_user_published_posts as $list) {
    echo '<h6><span class="font-weight-bold">List ID: </span>' . $list->ID . '</h6>';
    echo '<h6><span class="font-weight-bold">List Publish Date: </span>' .
    date('M d, Y', strtotime($list->post_date)) . '</h6>';
    echo '<h6><span class="font-weight-bold">List Content: </span>' . $list->post_content . '</h6>';
    // echo '<h6><span class="font-weight-bold">List Status: </span>' . $list->post_status . '</h6>';

    // ========================================= DISPLAY CATEGORY LIST W/ LINKS ========================================

    $taxonomy = 'category';
    $post_id = $list->ID;

    show_all_categories_w_links_and_arrows($post_id, $taxonomy);
    echo '<hr>';
// ========================================= END CATEGORY LIST W/ LINKS ========================================

}
// wp_reset_query();
// wp_reset_postdata();
// rewind_posts();

?>
      <h5 class="font-weight-bold">NON-ACTIVE LISTS:</h5>
      <?php
// UNPUBLISHED LIST COUNT
$args_pending = array(
    'author' => $current_user->ID,
    'orderby' => 'post_date',
    'order' => 'ASC',
    'post_status' => 'pending',
    'posts_per_page' => -1,
);

$list = new WP_Query($args_pending);

echo '<h6>[ <span><small class="font-weight-bold">TOTAL UNPUBLISHED LISTS:  ' . $list->found_posts . '</small></span> ]</h6>';
echo '<hr class="bg-danger">';

if ($list->have_posts()):

    while ($list->have_posts()): $list->the_post();

        $list_status = get_query_var('post_status');

        echo '<h6><span class="font-weight-bold text-danger">List Status: </span>' . $list->query_vars['post_status'] . '</h6>';

        echo '<h6><span class="font-weight-bold">List ID: </span>' . get_the_id() . '</h6>';
        echo '<h6><span class="font-weight-bold">List Publish Date: </span>' .
        date('M d, Y', strtotime(get_the_date())) . '</h6>';
        echo '<h6><span class="font-weight-bold">List Content: </span>' . get_the_content() . '</h6>';
        // echo '<h6><span class="font-weight-bold">List Status: </span>' . $list->post_status . '</h6>';

        // ========================================= DISPLAY CATEGORY LIST W/ LINKS ========================================

        $taxonomy = 'category';
        $post_id = get_the_id();

        show_all_categories_w_links_and_arrows($post_id, $taxonomy);
        echo '<hr>';

        // ========================================= END CATEGORY LIST W/ LINKS ========================================

    endwhile;

endif;

?>
    </div>
    <!-- RIGHT PROFILE CONTENT COLUMN ENDS -->

  </div> <!-- END ROW -->

  <hr>

</main><!-- #main -->

<?php
get_footer();