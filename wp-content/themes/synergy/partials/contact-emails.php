<?php

if( have_rows('emails', 'options') ):

  echo '<h3 class="">Emails</h3>';
  
  echo '<ul class="emails column column-8-laptop">';

  while ( have_rows('emails', 'options') ) : the_row();

    $email = get_sub_field('email'); 
    $type = get_sub_field('type'); 
    
    echo '<li class="email">'; 

      echo '<a href="mailto:' . $email . '" class="contact">' . $type . '</a>';
    
    echo '</li>';
  
  endwhile;

  echo '</ul>';

endif;

?>
