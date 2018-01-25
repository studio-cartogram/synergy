<?php

$title = get_sub_field('title');
$gridItem = get_sub_field('grid_item');

echo '<section class="grid">';

  echo '<div class="row">';

    echo '<div class="grid__header">';

      echo '<h2 class="secondary">' . $title . '</h2>';

    echo '</div>';

  echo '</div>';

  if( have_rows('grid_item') ):

    echo '<div class="row">';

      echo '<div class="grid__items">';

      while ( have_rows('grid_item') ) : the_row();

        $itemTitle= get_sub_field('item_title' );
        $itemDescription= get_sub_field('description');

        echo '<div class="grid__item">';

          echo '<h3 class="secondary">' . $itemTitle . '</h3>';
          echo '<h3>' . $itemDescription . '</h3>';

        echo '</div>';

      endwhile;

      echo '</div>';

    echo '</div>';

  endif;


echo '</section>';

?>
