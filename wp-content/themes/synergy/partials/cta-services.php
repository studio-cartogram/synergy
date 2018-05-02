<?php

  $cta_heading_services = get_field('cta_heading_services', 'options');
  $cta_description_services = get_field('cta_description_services', 'options');
  $cta_button_text_services = get_field('cta_button_text_services', 'options');
  $cta_button_link_services = get_field('cta_button_link_services', 'options');


echo '<section class="cta banner banner__center">';

  echo '<div class="row">';

    echo '<div class="cta__text">';

      if(is_archive('services') ) :

        echo '<h1 class="title">';

          echo $cta_heading_services;

        echo '</h1>';

        echo '<h2 class="subtitle secondary">';

          echo $cta_description_services;
        
        echo '</h2>';
        
        echo '<p class="p--large secondary"><a href="' . $cta_button_link_services .'" class="link link--underline">' . $cta_button_text_services . '</a></p>';        

      endif;
            
    echo '</div>';

  echo '</div>';

echo '</section>';

?>
