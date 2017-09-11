<?php

$description = get_sub_field('description');
$image = get_sub_field('image');
$orientation = get_sub_field('orientation');
$size = 'full';

echo '<section class="image row row--full">';

  echo '<div class="image__content column column-6-laptop">';

    echo '<h2 class="secondary">' . $description . '</h2>';

  echo '</div>';

  if ($image) :

    echo '<figure class="image__image column column-6-laptop">';

      echo wp_get_attachment_image( $image, $size );

    echo '</figure>';

  endif;


echo '</section>';
?>
