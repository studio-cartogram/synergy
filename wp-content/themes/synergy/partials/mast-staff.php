<?php

$subtitle_staff = get_field('subtitle_staff', 'options');
$select_staff = get_field('select_staff', 'options');

echo '<section class="mast">';

  echo '<div class="row">';

    echo '<div class="column mast__title">';

      echo '<h1 class="title">';

        echo wp_title('');

      echo '</h1>';

      echo '<h2 class="subtitle secondary">'. $subtitle_staff .'</h2>';

      get_template_part('partials/filter-staff');      
              
    echo '</div>';

  echo '</div>';

echo '</section>';

?>
