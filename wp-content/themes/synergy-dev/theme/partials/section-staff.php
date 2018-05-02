<?php

$press = get_sub_field('staff');

echo '<div class="tertiary__content">';

  if( $staff ):
    
    echo '<div class="related-header">';

      echo '<h3 class="secondary">Staff</h3>';

    echo '</div>';

    echo '<div class="related">';

      foreach( $staff as $staff):

        $staffimage = get_post_thumbnail_id($staff->ID);
        $staffimagesize = 'large';
        $source = get_field('source', $staff->ID);
        $link = get_field('link', $staff->ID);
        
        echo '<div class="item related__item item--staff">';

          echo '<a href="' . $link . '">';

            echo '<div class="item__image">';
          
              echo wp_get_attachment_image( $staffimage, $staffimagesize );
          
            echo '</div>';

            echo '<div class="item__text">';

              echo '<h3 class="item__title">'. get_the_title($staff->ID) .'</h3>';

              echo '<h3 class="secondary">'. $source .'</h3>';

            echo '</div>';
            
          echo '</a>';

        echo '</div>';

      endforeach;
      
    echo '</div>';

  endif;

  echo '</div>';

?>