<?php 
/**
 * INSERT MULTI LEVEL CATEGORIES WITH AJAX
 */

// add_action('wp_ajax_nopriv_list_preview_ajax', 'list_preview_ajax');
add_action('wp_ajax_list_preview_ajax', 'list_preview_ajax');

function list_preview_ajax() {

  $post_id = $_POST['post_id'];


  // DEBUGGING START
  // echo "<h4>New Preview List ID: $post_id</h4><br>"; 

  // $the_post = get_post($post_id);

  // echo '<pre>';
  // echo print_r($the_post);
  // echo '</pre>';

  // DEBUGGING END

  // PAGE TITLE
  echo '<h3 class="text-center">Preview Only<h3>';
  echo '<h6 class="text-center">(List Status: Pending)</h6>';

  $args = [
    'post_type' => 'post',
    'p' => $post_id,
    'post_status' => 'pending',
  ];

  $the_list = new WP_Query($args);

  if ( $the_list->have_posts() ) : 

    while( $the_list->have_posts() ) : $the_list->the_post(); ?>

<section class="category">
  <main id="list-preview" class="site-main container category">
    <article id="" class="category animate__animated  animate__zoomIn">
      <header class="entry-header">

        <?php
          echo '<section class="post-item-cat-list">';
          /**
           * DISPLAY USER REGISTRATION DATE
           */
          $user_id = get_current_user_id();
          $udata = get_userdata( $user_id );
          $registered = $udata->user_registered;
          echo '<span class="bg-danger text-light font-weight-bold float-right py-2 px-4" style="font-size: .8rem;">';
          printf( '%s<br>', date( "d", strtotime( $registered ) ) );
          printf( '%s<br>', date( "m", strtotime( $registered ) ) );
          printf( '%s<br>', date( "y", strtotime( $registered ) ) );
          echo '</span>';
          // DISPLAY LIST ID
          echo '<p class="font-weight-bold" style="margin-bottom: -.25rem; font-size: .8rem">LIST #' . $post_id . "</p>";

              
          /**
           * 
           * CATEGORY LIST WITH PARENT CHILD RELATIONSHIP
           * 
           */
          // Setting the Args to get Parent ID in and Array
          $args = ['parent' => 0];
          // Getting an Array with Parent Category ID
          $post_cat_parent_array = wp_get_post_categories($post_id, $args);
          // Setting the Category Parent ID
          $post_cat_parent_id = $post_cat_parent_array[0];
          // Getting the children Category IDs Array with no List/Post attached
          $post_terms = get_categories(
                          [ 'child_of' => $post_cat_parent_id,
                            'hide_empty' => '0' 
                          ]
                        );

          ?>

        <section class="post-item-cat-list">
          <p class="text-uppercase text-danger font-weight-bold list-inline-item"
            style="margin-bottom: -0.5rem; font-size: 0.8rem;">
            <?php echo get_cat_name($post_cat_parent_id) ?>
          </p>&nbsp;
          <i class="fas fa-arrow-right"></i>&nbsp;
          <?php
          // The Category Loop
          foreach ( $post_terms as $post_term ) : ?>

          <p class="text-uppercase text-danger font-weight-bold list-inline-item"
            style="margin-bottom: -0.5rem; font-size: 0.8rem;">
            <?php echo $post_term->name; ?>
          </p>&nbsp;
          <i class="fas fa-arrow-right"></i>&nbsp;

          <?php endforeach; ?>

        </section>
        <!-- End post-item-cat-list -->

        <?php
        // ====================================== END CATEGORY LIST WITH PARENT CHILD ===================================

        if ( 'post' === get_post_type() ) :
        ?>
        <div class="entry-meta">
          <?php
            cyberize_app_dev_posted_on();
            // cyberize_app_dev_posted_by();
          ?>
        </div><!-- .entry-meta -->
        <?php endif; ?>
      </header><!-- .entry-header -->

      <?php cyberize_app_dev_post_thumbnail(); ?>

      <div id="post-content" class="entry-content">
        <?php
          the_content();
          ?>
      </div><!-- .entry-content -->

      <footer class="entry-footer">
        <section class="flex-icon-five">
          <?php if( get_field('your_facebook') ) : ?>
          <div class="flex-icon-item">
            <a href="#">
              <img title="Your Facebook Page" src="/wp-content/uploads/fb-icon.png" alt="Facebook Link">
            </a>
          </div>
          <?php endif; ?>
          <?php if( get_field('your_twitter') ) : ?>
          <div class="flex-icon-item">
            <a href="#">
              <img title="Your Twitter Page" src="/wp-content/uploads/Twitter-Icon.png" alt="Twitter Link">
            </a>
          </div>
          <?php endif; ?>
          <?php if( get_field('your_yelp') ) : ?>
          <div class="flex-icon-item">
            <a href="#">
              <img title="Your Yelp Page" src="/wp-content/uploads/Yelp-icon.png" alt="Yelp Link">
            </a>
          </div>
          <?php endif; ?>
          <?php if( get_field('your_instagram') ) : ?>
          <div class="flex-icon-item">
            <a href="#">
              <img title="Your Instagram Page" src="/wp-content/uploads/Instagram-icon.png" alt="Instagram Link">
            </a>
          </div>
          <?php endif; ?>
          <?php if( get_field('your_linkedin') ) : ?>
          <div class="flex-icon-item">
            <a href="#">
              <img title="Your Linkedin Page" src="/wp-content/uploads/Linkedin-Icon.png" alt="Linkedin Link">
            </a>
          </div>
          <?php endif; ?>
          <?php if( get_field('your_google_plus') ) : ?>
          <div class="flex-icon-item">
            <a href="#">
              <img title="Your Google Plus Page" src="/wp-content/uploads/Google-icon.png" alt="Google Plus Link">
            </a>
          </div>
          <?php endif; ?>

        </section>

        <section class="flex-icon-five">

          <div class="flex-icon-item">
            <a href="tel:404-321-1234">
              <img title="Phone: 404-321-1234" src="/wp-content/uploads/Cell-icon.png" alt="Phone Number">
            </a>
          </div>
          <div class="flex-icon-item">
            <a href="mailto:webmaster@example.com">
              <img title="your@email.com" src="/wp-content/uploads/Email-icon.png" alt="Email Address">
            </a>
          </div>
          <?php if( get_field('your_site') ) : ?>
          <div class="flex-icon-item">
            <a href="#">
              <img title="http://website.com" src="/wp-content/uploads/Website-icon.png" alt="Website Link">
            </a>
          </div>
          <?php endif; ?>
          <div class="flex-icon-item">
            <a href="#">
              <img title="Hit Me Up" src="/wp-content/uploads/HMU-icon.png" alt="HMU Link">
            </a>
          </div>
          <div class="flex-icon-item">
            <a href="#">
              <img title="Your Chat Page" src="/wp-content/uploads/Instant-Messaging-icon.png" alt="Chat Link">
            </a>
          </div>
          <div class="flex-icon-item">
            <a href="#">
              <img title="Flag This List" src="/wp-content/uploads/Screen-Shot-2021-01-26-at-1.50.39-PM.png"
                alt="Flag Link">
            </a>
          </div>

        </section>

      </footer><!-- .entry-footer -->
    </article><!-- #post-ENDS -->
  </main>
</section>
<?php


      endwhile;

    endif;

  die();
}