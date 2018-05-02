<?php

$press = get_sub_field('press');

echo '<div class="tertiary__content">';

  if( $press ):
    
    echo '<div class="related-header">';

      echo '<h3 class="secondary">Press</h3>';

    echo '</div>';

    echo '<div class="related">';

      foreach( $press as $press):

        $pressimage = get_post_thumbnail_id($press->ID);
        $pressimagesize = 'large';
        $source = get_field('source', $press->ID);
        $link = get_field('link', $press->ID);
        
        echo '<div class="item related__item item--press">';

          echo '<a href="' . $link . '">';

            echo '<div class="item__image">';
          
              echo wp_get_attachment_image( $pressimage, $pressimagesize );
          
            echo '</div>';

            echo '<div class="item__text">';

              echo '<h3 class="item__title">'. get_the_title($press->ID) .'</h3>';

              echo '<h3 class="secondary">'. $source .'</h3>';

            echo '</div>';
            
          echo '</a>';

        echo '</div>';

      endforeach;
      
    echo '</div>';

  endif;

  echo '</div>';

?>