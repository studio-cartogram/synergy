<?php

$title_staff= get_field('title_faq', 'options');
$subtitle_staff = get_field('subtitle_staff', 'options');

echo '<section class="mast">';

  echo '<div class="row">';

    echo '<div class="column mast__title">';

      echo '<h1 class="title">';

        echo $title_staff;

      echo '</h1>';

      echo '<h2 class="subtitle secondary">'. $subtitle_staff .'</h2>';

      get_template_part('partials/filter-staff');      
              
    echo '</div>';

  echo '</div>';

echo '</section>';

?>
