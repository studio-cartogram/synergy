<?php

$caption = get_sub_field('caption');
$image = get_sub_field('image');
$size = 'full';

echo '<section class="gallery">';

  echo '<div class="row">';

    if( have_rows('images') ):

      echo '<div class="column column-6-tablet column-8-laptop">';

        echo '<div class="gallery__images">';

          while ( have_rows('images') ) : the_row();

          $image = get_sub_field('image');
          $caption = get_sub_field('caption');

          echo $caption;

          echo '<figure class="gallery__image">';

            echo wp_get_attachment_image( $image, $size );

          echo '</figure>';

          endwhile;

        echo '</div>';

      echo '</div>';

    endif;

  echo '</div>';

echo '</section>';
?>
