<?php

  $subtitle_staff = get_field('subtitle_staff', 'options');
  $subtitle_services = get_field('subtitle_services', 'options');

echo '<section class="mast">';

  echo '<div class="row">';

    echo '<div class="column mast__title">';

      echo '<h1 class="title">';

        echo wp_title('');

      echo '</h1>';

      echo '<h2 class="subtitle">';

      if(is_archive('staff') ) : 
      
        echo $subtitle_staff;
      
      elseif(is_archive('services') ) : 

        echo $subtitle_services;

      endif;
            
      echo '</h2>';

    echo '</div>';

  echo '</div>';

echo '</section>';

?>
