<?php

$subtitle = get_field('subtitle', get_option('page_for_posts'));

echo '<section class="mast">';

  echo '<div class="row">';

    echo '<div class="column mast__title">';

      echo '<h1 class="title">';

        echo wp_title('');

      echo '</h1>';

      echo '<h2 class="subtitle">';
      
        echo $subtitle;
            
      echo '</h2>';

    echo '</div>';

  echo '</div>';

echo '</section>';

?>
