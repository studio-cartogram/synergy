<?php

$caption = get_sub_field('caption');
$image = get_sub_field('image');
$size = 'full';

echo '<section class="gallery">';

  echo '<div class="row row--full">';

    if( have_rows('images') ):

      echo '<div class="slideshow">';

        echo '<div id="js-slideshow" class="gallery__images">';

          while ( have_rows('images') ) : the_row();

          $image = get_sub_field('image');
          $caption = get_sub_field('caption');

          echo '<figure class="gallery__image js-slide">';

            echo wp_get_attachment_image( $image, $size );

            echo '<div class="gallery__caption">' . $caption . '</div>';

          echo '</figure>';

          endwhile;

        echo '</div>';

      echo '</div>';

    endif;

  echo '</div>';

echo '</section>';
?>
