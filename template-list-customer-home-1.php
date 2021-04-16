<?php
/**
 * The template for displaying all pages
 * Template Name: List Customer Home
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
$user_points = get_field('selflist_points', 'user_' . $current_user->id);
$user_registered = $current_user->user_registered;
$user_email = $current_user->user_email;
$user_total_list_count = count_user_posts($current_user->id, 'post'); // false for all posts
$user_published_list_count = count_user_posts($current_user->id, 'post', true); // true for public only
?>
<style>
.error {
  color: red;
  font-size: .8rem;
  font-weight: bold;
}

input {
  color: red;
  font-size: .8rem;
  font-weight: bold;
}

textarea {
  color: red;
  font-size: .8rem;
  font-weight: bold;
}

input::placeholder {
  font-size: .8rem !important;
}

textarea::placeholder {
  font-size: .8rem !important;
}

#lister-facebook-error,
#lister-twitter-error,
#lister-instagram-error,
#lister-yelp-error,
#lister-linkedin-error,
#lister-google-plus-error {
  position: absolute;
  top: 125%;
  left: 60%;
}
</style>


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
      <a href="/list-chat/" class="btn btn-danger float-right">Chat Room</a>
      <h3 class="text-uppercase"><small class="font-weight-bold">Customer Profile</small></h3>
      <h2 class="h2">Welcome, <?php echo $current_user->user_firstname .' '. $current_user->user_lastname; ?></h2>

      <h6 class="h6 text-uppercase font-weight-bold">
        Your ID:
        <strong class="text-danger">
          <span class="current-user-id">
            <?php echo $current_user->id; ?>
          </span>
        </strong>
      </h6>
      <h6 class="h6 text-uppercase font-weight-bold">
        Your Available Points:
        <strong class="text-danger">
          <span id="payment-summary-avail-points">
            <?php echo $user_points; ?>
          </span>
        </strong>
      </h6>
      <h6 class="h6 text-uppercase font-weight-bold">
        Your Email:
        <strong class="text-danger">
          <span id="payment-summary-avail-points" class="text-lowercase">
            <?php echo $user_email; ?>
          </span>
        </strong>
      </h6>
      <!-- <h6 class="h6 text-uppercase font-weight-bold">
        Your Total List Count:
        <strong class="text-danger">
          <span id="payment-summary-avail-points">
            <?php echo $user_total_list_count; ?>
          </span>
        </strong>
      </h6> -->
      <h6 class="h6 text-uppercase font-weight-bold">
        Your Active List Count:
        <strong class="text-danger">
          <span id="payment-summary-avail-points">
            <?php echo $user_published_list_count; ?>
          </span>
        </strong>
      </h6>
      <h6 class="h6 text-uppercase font-weight-bold">
        Membership:
        <strong class="text-danger">
          <span id="payment-summary-avail-points">
            <?php printf('Member since %s<br>', date("d M yy", strtotime($user_registered)));?>
          </span>
        </strong>
      </h6>
      <hr class="bg-danger">
      <h3 class="text-uppercase"><small class="font-weight-bold">Addtional Information</small></h3>
      <p>The following information will be added to your Add List Page automatically</p>
      <!-- LIST INSERT BLOCK -->
      <section class="col-12">

        <header>
          <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css"
            integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
        </header>

        <article id="create-new-list-box" class="">

          <!-- STATE & CITY SELECTIZE CHOICE BOX -->

          <?php get_template_part('_custom-template-parts/list-insert-city-state-select-box');?>
          <?php get_template_part('_custom-template-parts/city-insert-form');?>

          <!-- END STATE & CITY SELECTIZE CHOICE BOX -->

          <!-- THE MAIN FORM INPUTS START -->

          <?php get_template_part('_custom-template-parts/list-insert-pg-main-inputs');?>

          <!-- END THE MAIN FORM INPUTS  -->

        </article> <!-- END OF id="create-new-list-box" -->

      </section>
      <!-- LEFT COLUMN ENDS HERE -->


    </div>
    <!-- RIGHT PROFILE CONTENT COLUMN ENDS -->

  </div> <!-- END ROW -->

  <hr>

</main><!-- #main -->

<?php
get_footer();