<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyberize-app-dev
 */

get_header();
?>
<main id="primary" class="site-main container">

  <div class="row">
    <div class="col-md-9">
      <?php if ( have_posts() ) : ?>

      <header class="page-header">
        <?php
			the_archive_title( '<h3 class="page-title">', '</h3>' );
			// the_archive_description( '<div class="archive-description">', '</div>' );
			?>
      </header><!-- .page-header -->

      <?php
		/* Start the Loop */
		while ( have_posts() ) :
      the_post();
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

        echo '</section>';

         // =========================================END MOOSE TEST========================================

			/*
			 * Include the Post-Type-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
			 */
      get_template_part( 'template-parts/content', 'category' );


		endwhile;

		the_posts_navigation();

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>
    </div>
    <div class="col-md-3">

      <article class="category-sidebar">
        <ul class="primo">
          <?php 
        $current_category = $wp_query->get_queried_object();
        $current_cat_id = $current_category->term_id;
        
        get_selflist_sub_cats($current_cat_id)
      ?>
        </ul>

      </article>

    </div>
  </div>



</main><!-- #main -->

<?php
get_footer();