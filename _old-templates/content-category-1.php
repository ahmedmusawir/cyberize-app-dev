<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyberize-app-dev
 */

?>
<style>
input[type=checkbox] {
  /* Double-sized Checkboxes */
  -ms-transform: scale(2.3);
  /* IE */
  -moz-transform: scale(2.3);
  /* FF */
  -webkit-transform: scale(2.3);
  /* Safari and Chrome */
  -o-transform: scale(2.3);
  /* Opera */
  transform: scale(2.3);
  padding: 10px;
  margin-top: .75rem;
}

input[type="checkbox"]:checked:before {
  font-family: "FontAwesome";
  content: "\f14a";
  /* color: red; */
  /* margin-top: -1rem; */
  background: transparent;
  position: absolute;
  border-radius: 2px;
  width: 12px;
  height: 12px;
  left: 39%;
  top: 6%;
  transform: translate(-50%, -50%);
}

/* DID NOT WORK */
/* 
input[type=checkbox]:checked+label:after {
  background-color: red !important;
  color: red;
} */
</style>
<article id="post-<?php the_ID();?>" <?php post_class('post-item animate__animated');?>>
  <header class="entry-header">

    <?php
          // SHOW STATE & CITY IN A PARENT CHILD ORDER
          print_taxonomy_ranks( get_the_terms( get_the_ID(), 'states' ) );
/**
 *
 * CATEGORY LIST WITH PARENT CHILD RELATIONSHIP
 *
 */

echo '<section class="post-item-cat-list">';
/**
 * DISPLAY USER REGISTRATION DATE
 */
$user_id = get_post_field('post_author'); // Getting Author ID by Post ID (optional)
$udata = get_userdata($user_id);
$registered = $udata->user_registered;
echo '<span class="bg-danger text-light font-weight-bold float-right py-2 px-4" style="font-size: .8rem;">';
printf('%s<br>', date("d", strtotime($registered)));
printf('%s<br>', date("m", strtotime($registered)));
printf('%s<br>', date("y", strtotime($registered)));
echo '</span>';
// DISPLAY LIST ID
echo '<p class="font-weight-bold" style="margin-bottom: -.5rem; font-size: .8rem">LIST #' . get_the_ID() . "</p>";

// ========================================= DISPLAY CATEGORY LIST W/ LINKS ========================================

$taxonomy = 'category';

// Get the term IDs assigned to post.
$post_terms = wp_get_object_terms($post->ID, $taxonomy, array('fields' => 'ids'));

// Separator between links.
$separator = '&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;';

if (!empty($post_terms) && !is_wp_error($post_terms)) {

    $term_ids = implode(',', $post_terms);

    $terms = wp_list_categories(array(
        'title_li' => '',
        'style' => 'none',
        'echo' => false,
        'taxonomy' => $taxonomy,
        'include' => $term_ids,
    ));

    $terms = trim(str_replace('<br />', $separator, $terms));
    // $terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );

    // Display post categories.
    echo $terms;
}

echo '</section>'; //END .post-item-cat-list

// ========================================= END CATEGORY LIST W/ LINKS ========================================

if ('post' === get_post_type()):
?>
    <div class="entry-meta">
      <?php
cyberize_app_dev_posted_on();
// cyberize_app_dev_posted_by();
?>
    </div><!-- .entry-meta -->
    <?php endif;?>
  </header><!-- .entry-header -->

  <?php cyberize_app_dev_post_thumbnail();?>

  <div id="post-content" class="entry-content">
    <?php
the_excerpt();
?>
  </div><!-- .entry-content -->

  <footer class="entry-footer">
    <section class="flex-icon-five">

      <div class="flex-icon-item">
        <a href="#">
          <img title="Your Facebook Page" src="/wp-content/uploads/fb-icon.png" alt="Facebook Link">
        </a>
      </div>
      <div class="flex-icon-item">
        <a href="#">
          <img title="Your Twitter Page" src="/wp-content/uploads/Twitter-Icon.png" alt="Twitter Link">
        </a>
      </div>
      <div class="flex-icon-item">
        <a href="#">
          <img title="Your Yelp Page" src="/wp-content/uploads/Yelp-icon.png" alt="Yelp Link">
        </a>
      </div>
      <div class="flex-icon-item">
        <a href="#">
          <img title="Your Instagram Page" src="/wp-content/uploads/Instagram-icon.png" alt="Instagram Link">
        </a>
      </div>
      <div class="flex-icon-item">
        <a href="#">
          <img title="Your Linkedin Page" src="/wp-content/uploads/Linkedin-Icon.png" alt="Linkedin Link">
        </a>
      </div>
      <div class="flex-icon-item">
        <a href="#">
          <img title="Your Google Plus Page" src="/wp-content/uploads/Google-icon.png" alt="Google Plus Link">
        </a>
      </div>

    </section>

    <section class="flex-icon-five">

      <div class="flex-icon-item">
        <a href="tel:404-321-1234">
          <img title="Phone: 404-321-1234" src="/wp-content/uploads/Cell-icon.png" alt="Phone Number">
        </a>
      </div>
      <div class="flex-icon-item">
        <!-- <a href="mailto:webmaster@example.com"> -->
        <a href="mailto:<?php echo get_field('your_email'); ?>" target="_blank">
          <img title="your@email.com" src="/wp-content/uploads/Email-icon.png" alt="Email Address">
        </a>
      </div>
      <div class="flex-icon-item">
        <a href="#">
          <img title="http://website.com" src="/wp-content/uploads/Website-icon.png" alt="Website Link">
        </a>
      </div>

      <div class="flex-icon-item">
        <a href="#">
          <img title="Your Chat Page" src="/wp-content/uploads/Instant-Messaging-icon.png" alt="Chat Link">
        </a>
      </div>
      <div class="flex-icon-item">
        <!-- <a href="#">
          <img title="Flag This List" src="/wp-content/uploads/Screen-Shot-2021-01-26-at-1.50.39-PM.png"
            alt="Flag Link">
        </a> -->
        <input type="image" src="/wp-content/uploads/Screen-Shot-2021-01-26-at-1.50.39-PM.png" alt="Submit"
          style="width: 40px;">
      </div>
      <div class="flex-icon-item" style="width: 4rem;">
        <input type="checkbox" name="list-hmu-checkbox" class="list-hmu-checkbox" autocomplete="off"
          data-hmu="<?php echo get_field('your_email'); ?>">
        <small class="pl-2">HMU</small>
      </div>

    </section>

  </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID();?> -->