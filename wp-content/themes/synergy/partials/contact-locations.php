<?php

if( have_rows('locations', 'options') ):

  while ( have_rows('locations', 'options') ) : the_row();

    $name = get_sub_field('name');
    $address = get_sub_field('address');
    $phone = get_sub_field('phone');
    $fax = get_sub_field('fax');
    $map = get_sub_field('map');
    $directions = get_sub_field('directions');
    $note = get_sub_field('note');
    $image = get_sub_field('image');
    $hours = get_sub_field('hours');
  
    echo '<div class="footer__location">';

      echo '<div class="row">';
      
        echo '<h2 class="footer__heading">';
        
        echo ''. $name . '';
        
        echo '</h2>';

      echo '</div>';

      echo '<div class="row">';

        echo '<p class="text--inverted address">' . $address . '<br><a target="_blank" class="link--underline link" href="' . $directions . '" class="link link--primary">' . 'View map' . '</a></p>';

      echo '</div>';

      echo '<div class="row">';

        if( $phone ):

          echo '<p class="text--inverted phone">Phone<br>' . $phone . '</p>';

        endif;

        if( $fax ):

          echo '<p class="text--inverted fax">Fax<br>' . $fax . '</p>';

        endif;

      echo '</div>';

      echo '<div class="row">';
          
        if( have_rows('hours') ):

          echo '<div class="row">';
          
            echo '<h3 class="footer__heading">Hours</h3>';

          echo '</div>';

          echo '<div class="row">';
        
            echo '<div class="locations__hours">';
          
              while ( have_rows('hours') ) : the_row();
          
                $days = get_sub_field('days');
                $times = get_sub_field('times');
              
                echo '<div class="hours__item">';   
                
                  echo '<p class="text--inverted">';
          
                    echo '<span>' . $days . '</span><br>';
        
                    echo '<span>' . $times . '</span>';
          
                  echo '</p>';
                      
                echo '</div>';
          
              endwhile;

            echo '</div>';
        
          echo '</div>';
          
        endif;
          
      echo '</div>';

      echo '<div class="row">';

      if( $note ):
        
        echo '<p class="note location">' . $note . '</p>';
        
      endif;

      echo '</div>';

    echo '</div>';

  endwhile;

endif;

?>
