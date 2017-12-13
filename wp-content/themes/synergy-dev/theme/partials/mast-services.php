<?php

$subtitle_services = get_field('subtitle_services', 'options');

echo '<section class="mast">';

  echo '<div class="row">';

    echo '<div class="column mast__title">';

      echo '<h1 class="title">';

        echo wp_title('');

      echo '</h1>';

      echo '<h2 class="subtitle secondary">'. $subtitle_services .'</h2>';

      get_template_part('partials/filter-services');

    echo '</div>';

  echo '</div>';

echo '</section>';

?>