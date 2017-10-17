<?php

if( have_rows('hours', 'options') ):

  echo '<h3 class="">Hours</h3>';

  echo '<ul class="hours column column-8-laptop">';

    while ( have_rows('hours', 'options') ) : the_row();

      $days = get_sub_field('days');
      $times = get_sub_field('times');
    
      echo '<li class="column hour">';    

        echo '<span class="">' . $days . '</span>';

        echo '<span class="">' . $times . '</span>';
    
      echo '</li>';

    endwhile;

  echo '</ul>';

endif;

?>
