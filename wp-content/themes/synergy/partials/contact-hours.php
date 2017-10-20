<?php

if( have_rows('hours', 'options') ):

  echo '<h3 class="">Hours</h3>';

  echo '<ul class="list footer__list hours row">';

    while ( have_rows('hours', 'options') ) : the_row();

      $days = get_sub_field('days');
      $times = get_sub_field('times');
    
      echo '<li class="column column-6 list-item">';   
      
        echo '<div class="row row--full hour row--space-between">';

          echo '<div class="column column-12">' . $days . '</div>';

          echo '<div class="column column-12">' . $times . '</div>';
        
        echo '</div>';
    
      echo '</li>';

    endwhile;

  echo '</ul>';

endif;

?>
