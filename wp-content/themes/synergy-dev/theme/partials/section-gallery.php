<?php

$title = get_sub_field('title');
$description = get_sub_field('description');
$subtitle = get_sub_field('subtitle');
$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link');
$image = get_sub_field('image');
$size = 'full';
$video = get_sub_field('video');
$type = get_sub_field('type');

echo '<section class="gallery">';

  echo '<div class="row">';

    echo '<div class="column intro">';

      echo '<h2>' . $title . '</h2>';

      echo '<p class="secondary">' . $subtitle . '</p>';

    echo '</div>';

  echo '</div>';

  echo '<div class="row">';

    if( have_rows('images') ):

      echo '<div class="column column-6-tablet column-8-laptop">';

        echo '<div class="gallery__images">';

          while ( have_rows('images') ) : the_row();

          $image = get_sub_field('image');

          echo '<figure class="gallery__image">';

            echo wp_get_attachment_image( $image, $size );

          echo '</figure>';

          endwhile;

        echo '</div>';

      echo '</div>';

    endif;

      echo '<div class="column column-6-tablet column-4-laptop">';

        echo '<div class="gallery__content format">';

          echo $description;

        echo '</div>';

      echo '</div>';

  echo '</div>';

echo '</section>';
?>
