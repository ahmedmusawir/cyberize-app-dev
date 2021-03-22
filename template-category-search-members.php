<?php
/**
 * The template for displaying all pages
 * Template Name: Category Search Index Members
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

<div id="primary" class="site-main container pt-5">

  <!-- <hr> -->

  <section id="selflist-search-input-box" class="selflist-search-input-box">

    <input type="text" id="cat-search-input" class="selflist-search-input">
    <i class="fas fa-search"></i>

  </section>


  <div id="category-search-result" class="card-columns">

    <?php 
  
    $args = array(
      'parent' => 0,
      'exclude' => 1
    );
    $categories = get_categories( $args );

    /**
     * PRIMARY CATEGORY LOOP - WITH PARENT 0 
     * 
     */ 

    foreach($categories as $category) : ?>

    <a href="<?php echo get_category_link( $category->term_id ); ?>">

      <div class="card card-moose border-danger mb-3 animate__animated animate__zoomIn">
        <!-- <div class="card border-danger mb-3 animate__animated"> -->
        <div class="card-header bg-danger">
          <span class="text-light">List Count:</span>
          <span class="badge badge-pill badge-light">
            <?php echo $category->count ?></span>
        </div>


        <div class="card-body text-danger">
          <h5 class="card-title text-danger"><?php echo $category->name ?></h5>
          <section class="">
            <div class="">
              <ul class="primo">

                <?php get_selflist_sub_cats($category->term_id); ?>

              </ul>
            </div>
          </section>
        </div>
        <div class="card-footer border-danger bg-light">
          <small class="text-italic"> * Click Subcategoris to find quickly</small>
        </div>
      </div> <!-- END of card -->

    </a>

    <?php endforeach; ?>

  </div> <!-- END card-columns -->

  <hr>

</div><!-- #main -->

<?php
get_footer();