<?php

$caption = get_sub_field('caption');
$image = get_sub_field('image');
$size = 'full';

echo '<section class="gallery">';

  echo '<div class="row row--full">';

    if( have_rows('images') ):

      echo '<div class="js-slideshow swiper-container">';

        echo '<div class="gallery__images swiper-wrapper">';

          while ( have_rows('images') ) : the_row();

          $image = get_sub_field('image');
          
          $caption = get_sub_field('caption');

          echo '<figure class="gallery__image swiper-slide">';

            echo wp_get_attachment_image( $image, $size );

            echo '<div class="gallery__caption">' . $caption . '</div>';

          echo '</figure>';

          endwhile;

        echo '</div>';

        echo '<div class="gallery__buttons">';

          echo '<div class="swiper-button-prev button button--circle">';
            
            set_query_var( 'icon', 'arrow-left' );
            get_template_part('partials/icon');
            
          echo '</div>';

          echo '<div class="swiper-button-next button button--circle">';

            set_query_var( 'icon', 'arrow-right' );
            get_template_part('partials/icon');
            
          echo '</div>';
        
        echo '</div>';

      echo '</div>';

    endif;

  echo '</div>';

echo '</section>';
?>
