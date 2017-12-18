<?php

$title_faq = get_field('title_faq', 'options');
$subtitle_faq = get_field('subtitle_faq', 'options');

echo '<section class="mast">';

  echo '<div class="row">';

    echo '<div class="column mast__title">';

      echo '<h1 class="title">';

        echo $title_faq;

      echo '</h1>';

      echo '<h2 class="subtitle secondary">'. $subtitle_faq .'</h2>';
      
      get_template_part('partials/filter-faqs');   

    echo '</div>';

  echo '</div>';

echo '</section>';

?>
