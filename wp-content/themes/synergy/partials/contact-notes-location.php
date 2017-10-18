<?php

if( have_rows('locations', 'options') ):

  while ( have_rows('locations', 'options') ) : the_row();

    $note = get_sub_field('note'); 

    if( $note ):

      echo '<p class="note location">' . $note . '</p>';

    endif;
  
  endwhile;

endif;

?>
