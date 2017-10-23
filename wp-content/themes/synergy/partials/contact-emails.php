<?php

if( have_rows('emails', 'options') ):

  echo '<h3 class="footer__heading">Emails</h3>';
  
echo '<ul class="list soft-bottom--quad list--spaced-vertical list--vertical">';

  while ( have_rows('emails', 'options') ) : the_row();

    $email = get_sub_field('email'); 
    $type = get_sub_field('type'); 
    
    echo '<li class="">'; 

      echo '<a href="mailto:' . $email . '" class="link--inverted link--underline">' . $type . '</a>';
    
    echo '</li>';
  
  endwhile;

  echo '</ul>';

endif;

?>
