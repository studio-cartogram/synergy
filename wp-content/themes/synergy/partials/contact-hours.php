<?php

if( have_rows('hours', 'options') ):

  echo '<h3 class="">Hours</h3>';

  echo '<ul class="list footer__list hours column list--vertical">';

    while ( have_rows('hours', 'options') ) : the_row();

      $days = get_sub_field('days');
      $times = get_sub_field('times');
    
      echo '<li class="hour column list-item">';    

        echo '<span class="list-item--top">' . $days . '</span>';

        echo '<span class="list-item--bottom">' . $times . '</span>';
    
      echo '</li>';

    endwhile;

  echo '</ul>';

endif;

?>
