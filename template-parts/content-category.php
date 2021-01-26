<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyberize-app-dev
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-item animate__animated'); ?>>
  <header class="entry-header">

    <?php
       /**
         * 
         * CATEGORY LIST WITH PARENT CHILD RELATIONSHIP
         * 
         */
        
        echo '<section class="post-item-cat-list">';

        $taxonomy = 'category';
 
        // Get the term IDs assigned to post.
        $post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
         
        // Separator between links.
        // $separator = '> ';
        $separator = '&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;';
         
        if ( ! empty( $post_terms ) && ! is_wp_error( $post_terms ) ) {
         
            $term_ids = implode( ',' , $post_terms );
         
            $terms = wp_list_categories( array(
                'title_li' => '',
                'style'    => 'none',
                'echo'     => false,
                'taxonomy' => $taxonomy,
                'include'  => $term_ids
            ) );
         
            $terms = trim( str_replace( '<br />',  $separator, $terms ));
            // $terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );
         
            // Display post categories.
            echo  $terms;
        }

        echo '</section>'; //END .post-item-cat-list

         // =========================================END MOOSE TEST========================================

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
		the_excerpt();
		?>
  </div><!-- .entry-content -->

  <footer class="entry-footer">
    <section class="flex-icon-five">

      <div class="flex-icon-item">
        <a href="#">
          <img title="Your Facebook Page" src="/wp-content/uploads/Screen-Shot-2021-01-26-at-1.40.19-PM.png"
            alt="Facebook Link">
        </a>
      </div>
      <div class="flex-icon-item">
        <a href="#">
          <img title="Your Twitter Page" src="/wp-content/uploads/icon-social-twitter-outline-128.png"
            alt="Twitter Link">
        </a>
      </div>
      <div class="flex-icon-item">
        <a href="#">
          <img title="Your Yelp Page" src="/wp-content/uploads/Screen-Shot-2021-01-26-at-1.40.32-PM.png"
            alt="Yelp Link">
        </a>
      </div>
      <div class="flex-icon-item">
        <a href="#">
          <img title="Your Instagram Page" src="/wp-content/uploads/Screen-Shot-2021-01-26-at-1.40.44-PM.png"
            alt="Instagram Link">
        </a>
      </div>
      <div class="flex-icon-item">
        <a href="#">
          <img title="Your Linkedin Page" src="/wp-content/uploads/Screen-Shot-2021-01-26-at-1.42.26-PM.png"
            alt="Linkedin Link">
        </a>
      </div>
      <div class="flex-icon-item">
        <a href="#">
          <img title="Your Google Plus Page" src="/wp-content/uploads/Screen-Shot-2021-01-26-at-1.42.12-PM.png"
            alt="Google Plus Link">
        </a>
      </div>

    </section>

    <section class="flex-icon-five">

      <div class="flex-icon-item">
        <a href="tel:404-321-1234">
          <img title="Phone: 404-321-1234" src="/wp-content/uploads/Screen-Shot-2021-01-26-at-1.42.48-PM.png"
            alt="Phone Number">
        </a>
      </div>
      <div class="flex-icon-item">
        <a href="mailto:webmaster@example.com">
          <img title="your@email.com" src="/wp-content/uploads/Screen-Shot-2021-01-26-at-1.41.54-PM.png"
            alt="Email Address">
        </a>
      </div>
      <div class="flex-icon-item">
        <a href="#">
          <img title="http://website.com" src="/wp-content/uploads/Screen-Shot-2021-01-26-at-1.41.15-PM.png"
            alt="Website Link">
        </a>
      </div>
      <div class="flex-icon-item">
        <a href="#">
          <img title="Hit Me Up" src="/wp-content/uploads/Screen-Shot-2021-01-26-at-1.44.13-PM.png" alt="HMU Link">
        </a>
      </div>
      <div class="flex-icon-item">
        <a href="#">
          <img title="Your Chat Page" src="/wp-content/uploads/Screen-Shot-2021-01-26-at-1.41.00-PM.png"
            alt="Chat Link">
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
</article><!-- #post-<?php the_ID(); ?> -->