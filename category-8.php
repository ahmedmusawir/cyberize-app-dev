<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyberize-app-dev
 */

 get_header();

// GETTING CURRENT CATEGORY OBJECT
$current_category = $wp_query->get_queried_object();
$current_cat_id = $current_category->term_id;
$current_post_count = $current_category->count;
// echo "<pre>";
//   print_r($current_category);
// echo "</pre>";
?>
<main id="primary" class="site-main container">

  <button id="filter-by-state-city-btn" class="btn btn-outline-danger mb-2">Filter by State & City</button>
  <!-- STATE & CITY CATEGORY PROTOTYPING STARTS -->
  <?php 
    // Getting all States (Parent Taxonomies)
    $all_states = get_terms(['taxonomy' => 'states', 'parent' => 0 ]);
    get_state_and_cities($all_states, $current_cat_id);
  ?>
  <!-- STATE & CITY CATEGORY PROTOTYPING ENDS -->

  <div class="row">
    <div class="col-md-9">

      <section id="selflist-search-input-box" class="selflist-search-input-box">

        <input type="text" id="post-search-input" class="selflist-search-input">
        <i class="fas fa-search"></i>

      </section>

      <?php if ( have_posts() ) : ?>

      <header class="page-header">
        <!-- <span class="badge badge-dark float-right"><?php //echo $current_post_count ?></span> -->

        <?php
			the_archive_title( '<h3 class="page-title">', '<span class="badge badge-pill badge-dark ml-2">' . $current_post_count . '</span>
        </h3>' );
        // the_archive_description( '<div class="archive-description">', '</div>' );
        ?>
      </header><!-- .page-header -->

      <?php
		/* Start the Loop */
		while ( have_posts() ) :
      the_post();
     
      // This one is for the nice cascading effect
      echo '<article id="list-index-container" class="animate__animated animate__zoomIn">';
      // CITY & STATE TAXONMY DISPLAY BY LIST START
      // $tax = get_the_terms( get_the_ID(), 'states');
      
      // echo '
      // <p class="text-dark text-uppercase" style="font-size: .8rem; margin-bottom: 0;">
      //   <small class="font-weight-bold">City: 
      //     <span class="text-info">' . $tax[0]->name .',</span> State: <span class="text-info">' . $tax[1]->name .'</span>
      //   </small>
      // </p>';
      
      // CITY & STATE TAXONMY DISPLAY BY LIST END
      
      // SHOW STATE & CITY IN A PARENT CHILD ORDER
      print_taxonomy_ranks( get_the_terms( get_the_ID(), 'states' ) );
			
      /**
       * Include the Post-Type-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
       * 
       */
			 
      get_template_part( 'template-parts/content', 'category' );

      echo '<article>'; //END .post-item



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
        
        
        $cat_list = get_selflist_sub_cats($current_cat_id);
        
      ?>
        </ul>

      </article>

    </div>
  </div>



</main><!-- #main -->

<?php
get_footer();