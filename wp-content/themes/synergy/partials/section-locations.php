<?php

echo '<section class="contactLocations">';

  echo '<h2 class="secondary">Locations</h2>';

  echo '<div class="contactLocations__container">';

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
        $size = 'full';

        echo '<div class="contactLocation">';

          echo '<div class="contactLocation__container">';

            if( $image ) :
          
              echo '<div class="location__image waypoint__item waypoint__item--delay">';
        
                echo wp_get_attachment_image( $image, $size );
        
              echo '</div>';
      
            endif;

            echo '<div class="contactLocation__info">';

              echo '<h3 class="secondary">';
              
              echo ''. $name . '';
              
              echo '</h3>';

              echo '<div class="row">';

                echo '<p class="address">' . $address . '<br><a target="_blank" class="link--underline link" href="' . $directions . '" class="link link--primary">' . 'View map' . '</a></p>';
      
              echo '</div>';

              if( $phone ):

                echo '<p class="phone">Phone<br>' . $phone . '</p>';

              endif;

              if( $fax ):

                echo '<p class="fax">Fax<br>' . $fax . '</p>';

              endif;

            echo '</div>';

            echo '<div class="contactLocation__info">';
            
              if( have_rows('hours') ):

                echo '<div class="row">';
                
                  echo '<h3 class="secondary">Hours</h3>';

                echo '</div>';

                echo '<div class="row">';
              
                  echo '<div class="locations__hours">';
                
                    while ( have_rows('hours') ) : the_row();
                
                      $days = get_sub_field('days');
                      $times = get_sub_field('times');
                    
                      echo '<div class="hours__item">';   
                      
                        echo '<p class="">';
                
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

        echo '</div>';

      endwhile;

    endif;
    
  echo '</div>';
  
echo '</section>';


?>
