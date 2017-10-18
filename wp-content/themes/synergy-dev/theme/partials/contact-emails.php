<?php

if( have_rows('emails', 'options') ):

  echo '<h3 class="">Emails</h3>';
  
  echo '<ul class="list emails column column-8-laptop list--vertical">';

  while ( have_rows('emails', 'options') ) : the_row();

    $email = get_sub_field('email'); 
    $type = get_sub_field('type'); 
    
    echo '<li class="email">'; 

      echo '<a href="mailto:' . $email . '" class="contact underline">' . $type . '</a>';
    
    echo '</li>';
  
  endwhile;

  echo '</ul>';

endif;

?>
