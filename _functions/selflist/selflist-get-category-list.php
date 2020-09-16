<?php

  function get_selflist_sub_cats($cat_id) {
       /**
       * 2ND LEVEL BEGINS
       */
      $args = array( 
        'parent' => $cat_id, // Gives 1st child only. child_of give all the children
        'hide_empty' => 0 
      );
      $sub2_cats = get_categories($args);

      /**
       * 2ND LEVEL CATEGORY LOOP
       */
      foreach($sub2_cats as $sub_cat) {
        
          echo '<li class="primo-item">';
            echo '<a href="'. get_category_link( $sub_cat->term_id ) .'" class="btn btn-outline-danger btn-sm">&nbsp;' . $sub_cat->name .
              '<span class="badge badge-pill badge-dark">' . $sub_cat->count . '</span>
             </a>';
          echo '</li>';

        /**
         * 3ND LEVEL BEGINS
         */
        $args = array( 
          'parent' => $sub_cat->term_id, // Gives 1st child only. child_of give all the children
          'hide_empty' => 0 
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
              'hide_empty' => 0 
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
  }
  
  