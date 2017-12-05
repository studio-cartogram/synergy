<?php

$subtitle_staff = get_field('subtitle_staff', 'options');
$select_staff = get_field('select_staff', 'options');

$subtitle_services = get_field('subtitle_services', 'options');
$select_services = get_field('select_services', 'options');

$subtitle_faq = get_field('subtitle_faq', 'options');
$select_faq = get_field('select_faq', 'options');

echo '<section class="mast">';

  echo '<div class="row">';

    echo '<div class="column mast__title">';

      echo '<h1 class="title">';

        echo wp_title('');

      echo '</h1>';

      if(is_archive('staff') ) : 

        echo '<h2 class="subtitle secondary">'. $subtitle_staff .'</h2>';
              
        wp_dropdown_categories(array(
          'taxonomy' => 'categories',
          'class' => 'filter__toggle',
          // 'show_option_all' => 'All',
          'show_option_none' => $select_staff,
          'orderby' => 'name',
          'value_field' => 'slug',
        )); 
      
      elseif(is_archive('services') ) : 

        echo '<h2 class="subtitle secondary">'. $subtitle_services .'</h2>';
        
        wp_dropdown_categories(array(
          'taxonomy' => 'tags',
          'class' => 'filter__toggle',
          // 'show_option_all' => 'All',
          'show_option_none' => $select_services,
          'orderby' => 'name',
          'value_field' => 'slug',
        ));

      elseif(is_archive('faq') ) : 
        
        echo '<h2 class="subtitle secondary">'. $subtitle_faq .'</h2>';
        
        wp_dropdown_categories(array(
          'taxonomy' => 'tags',
          'class' => 'filter__toggle',
          // 'show_option_all' => 'All',
          'show_option_none' => $select_faq,
          'orderby' => 'name',
          'value_field' => 'slug',
        ));

      endif;

    echo '</div>';

  echo '</div>';

echo '</section>';

?>
