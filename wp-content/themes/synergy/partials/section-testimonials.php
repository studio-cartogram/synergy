<?php

$testimonials = get_sub_field('testimonials');

echo '<div class="tertiary__content">';

  if( $testimonials ):
    
    echo '<div class="related-header">';

      echo '<h3 class="secondary">Words from our clients</h3>';

    echo '</div>';

    echo '<div class="related">';

      foreach( $testimonials as $testimonial ):

        $testimonialText = get_field('testimonial', $testimonial->ID);
        $client = get_field('client', $testimonial->ID);
        $services = get_field('related_services', $testimonial->ID);
        
        echo '<div class="item related__item item--press">';

          echo '<div class="item__text">';

            echo '<h3 class="">'. $testimonialText .'</h3>';

            echo '<h5 class="secondary">'. $client .'';

              if( $services ):
                
                foreach( $services as $service ):
    
                  echo '<a class"link--underline" href="' . get_the_permalink($service->ID) . '">, ';
    
                    echo get_the_title($service->ID);
                  
                  echo '</a>';
    
                endforeach;
    
              endif;

            echo '</h5>';

          echo '</div>';
            
        echo '</div>';

      endforeach;
      
    echo '</div>';

  endif;

  echo '</div>';

?>