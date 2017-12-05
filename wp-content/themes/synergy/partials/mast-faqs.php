<?php

$subtitle_faq = get_field('subtitle_faq', 'options');
$select_faq = get_field('select_faq', 'options');

echo '<section class="mast">';

  echo '<div class="row">';

    echo '<div class="column mast__title">';

      echo '<h1 class="title">';

        echo wp_title('');

      echo '</h1>';

      echo '<h2 class="subtitle secondary">'. $subtitle_faq .'</h2>';
      
      wp_dropdown_categories(array(
        'taxonomy' => 'tags',
        'class' => 'filter__toggle',
        // 'show_option_all' => 'All',
        'show_option_none' => $select_faq,
        'orderby' => 'name',
        'value_field' => 'slug',
      ));

    echo '</div>';

  echo '</div>';

echo '</section>';

?>
