<?php

  function get_selflist_sub_cats_to_json($cat_id) {
       /**
       * 2ND LEVEL BEGINS
       */
      $args = array( 
        'parent' => $cat_id, // Gives 1st child only. child_of give all the children
        'hide_empty' => 1 
      );
      $sub2_cats = get_categories($args);
        // echo '<pre>';
        // print_r($sub2_cats);
        // echo '</pre>';

      if (! $sub2_cats ) {
        echo '
        <section id="no-cat-found" class="card text-center">

          No More Categories ...
          <p>Back to Category Search<p>
          <a class="btn btn-danger btn-sm btn-block" href="/category-search-index/">Back</a>
          
        </section>
        ';
      }
      /**
       * 2ND LEVEL CATEGORY LOOP
       */

      foreach($sub2_cats as $sub_cat) {
        // global $primo_results;
  
        // array_push($primo_results, array(
        //   'primo-name' => $sub_cat->name,
        //   'primo-slug' => $sub_cat->slug,
        //   'primo-id' => $sub_cat->term_id
        // ));

        $primo_results[] = array(
          'primo-name' => $sub_cat->name,
          'primo-slug' => $sub_cat->slug,
          'primo-id' => $sub_cat->term_id,
          'parent-id' => $sub_cat->parent
        ); 

        /**
         * 3ND LEVEL BEGINS
         */
        $args = array( 
          'parent' => $sub_cat->term_id, // Gives 1st child only. child_of give all the children
          'hide_empty' => 1 
        );
        $sub3_cats = get_categories($args);
        /**
         * 3RD LEVEL CATEGORY LOOP
         */
        foreach($sub3_cats as $sub2_cat) {
        echo '<ul class="secondo">';
          echo '<li>';
            echo '<a href="'. get_category_link( $sub2_cat->term_id ) .'" class="btn btn-outline-danger btn-sm">&nbsp;' . $sub2_cat->name .
                '<span class="badge badge-pill badge-dark">' . $sub2_cat->count . '</span>
              </a>';
          echo '</li>';
        echo '</ul>';


            /**
             * 4TH LEVEL BEGINS
             */
            $args = array( 
              'parent' => $sub2_cat->term_id, // Gives 1st child only. child_of give all the children
              'hide_empty' => 1 
            );
            $sub4_cats = get_categories($args);

            foreach($sub4_cats as $sub3_cat) {
        echo '<ul class="terzo">';
          echo '<li>';
              echo '<a href="'. get_category_link( $sub3_cat->term_id ) .'" class="btn btn-outline-danger btn-sm">&nbsp;' . $sub3_cat->name .
                    '<span class="badge badge-pill badge-dark">' . $sub3_cat->count . '</span>
                  </a>';
          echo '</li>';
        echo '</ul>';
        

            
            } //END sub4_cats

        } //END sub3_cats

      } //END get_sub2_cats

      return $primo_results;
  }
  
  