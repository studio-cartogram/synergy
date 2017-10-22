<?php

if( have_rows('hours', 'options') ):

  echo '<h3 class="footer__heading">Hours</h3>';

  echo '<ul class="list">';

    while ( have_rows('hours', 'options') ) : the_row();

      $days = get_sub_field('days');
      $times = get_sub_field('times');
    
      echo '<li class="list-item hours__item">';   
      
          echo '<p class="text--inverted">';

            echo '<span>' . $days . '</span><br>';

            echo '<span>' . $times . '</span>';

          echo '</p>';
            
      echo '</li>';

    endwhile;

  echo '</ul>';

endif;

?>
