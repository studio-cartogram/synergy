<?php

if( have_rows('sections') ):
    $count = 0;
    while ( have_rows('sections') ) : the_row(); 
      $layout = get_row_layout();
       
      if($layout == 'banner') {
        $count++;
        set_query_var('count', $count);
      }

      get_template_part('partials/section', $layout);

    endwhile;

endif;

?>