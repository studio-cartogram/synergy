<?php

$services = get_sub_field('services');
$title = get_sub_field('title');

echo '<div class="tertiary__content">';

  if( $services ):
    
    echo '<div class="related-header">';

      echo '<h3 class="secondary">'. $title .'</h3>';

    echo '</div>';

    echo '<div class="related">';

      foreach( $services as $services):

        $servicesimage = get_post_thumbnail_id($services->ID);
        $servicesimagesize = 'large';
        
        echo '<div class="item related__item item--services">';

          echo '<a href="' . get_the_permalink($services->ID) . '">';

            echo '<div class="item__image">';
          
              echo wp_get_attachment_image( $servicesimage, $servicesimagesize );
          
            echo '</div>';

            echo '<div class="item__text">';

              echo '<h3 class="item__title">'. get_the_title($services->ID) .'</h3>';

              echo '<h3 class="secondary">'. get_the_excerpt($service->ID) .'</h3>';

            echo '</div>';
            
          echo '</a>';

        echo '</div>';

      endforeach;
      
    echo '</div>';

  endif;

  echo '</div>';

?>