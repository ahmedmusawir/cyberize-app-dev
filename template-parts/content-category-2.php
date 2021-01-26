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
    <?php //cyberize_app_dev_entry_footer(); ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->