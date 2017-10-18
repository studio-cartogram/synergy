<?php

if( have_rows('notes', 'options') ):

  while ( have_rows('notes', 'options') ) : the_row();

    $note = get_sub_field('note');   

    echo '<p class="note contact">' . $note . '</p>';
  
  endwhile;

endif;

?>
