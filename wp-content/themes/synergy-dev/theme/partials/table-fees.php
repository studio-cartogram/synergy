<?php

if( have_rows('breakdown') ):

  echo '<ul class="list list-sidebar list--medium list--spaced-vertical pricing_policies">';

    while ( have_rows('breakdown') ) : the_row();
  
      $time = get_sub_field('time');
      $type = get_sub_field('type');
      $cost = get_sub_field('cost');
      
      echo '<li class="list-item">';
      
        echo $time;

        echo $type;

        echo $cost;
  
      echo '</li>';
  
    endwhile;
                          
  echo '</ul>';

endif;

?>