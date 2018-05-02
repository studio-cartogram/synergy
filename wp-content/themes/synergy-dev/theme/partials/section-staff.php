<?php

$staff = get_sub_field('staff');
$title = get_sub_field('title');

echo '<div class="tertiary__content">';

  if( $staff ):
    
    echo '<div class="related-header">';

      echo '<h3 class="secondary">'. $title .'</h3>';

    echo '</div>';

    echo '<div class="related">';

      foreach( $staff as $staff):

        $staffimage = get_post_thumbnail_id($staff->ID);
        $staffimagesize = 'large';
        $profession = get_field('profession', $staff->ID);
        
        echo '<div class="item related__item item--staff">';

          echo '<a href="' . get_the_permalink($staff->ID) . '">';

            echo '<div class="item__image">';
          
              echo wp_get_attachment_image( $staffimage, $staffimagesize );
          
            echo '</div>';

            echo '<div class="item__text">';

              echo '<h3 class="item__title">'. get_the_title($staff->ID) .'</h3>';

              echo '<h3 class="secondary">'. $profession .'</h3>';

            echo '</div>';
            
          echo '</a>';

        echo '</div>';

      endforeach;
      
    echo '</div>';

  endif;

  echo '</div>';

?>