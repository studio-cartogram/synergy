<?php

  $cta_heading_staff = get_field('cta_heading_staff', 'options');
  $cta_description_staff = get_field('cta_description_staff', 'options');
  $cta_button_text_staff = get_field('cta_button_text_staff', 'options');
  $cta_button_link_staff = get_field('cta_button_link_staff', 'options');


echo '<section class="cta banner banner__center">';

  echo '<div class="row">';

    echo '<div class="cta__text">';

      if(is_archive('staff') ) :

        echo '<h1 class="title">';

          echo $cta_heading_staff;

        echo '</h1>';

        echo '<h2 class="subtitle secondary">';

          echo $cta_description_staff;
        
        echo '</h2>';
        
        echo '<p class="p--large secondary"><a href="' . $cta_button_link_staff .'" class="link link--underline">' . $cta_button_text_staff . '</a></p>';        

      endif;
            
    echo '</div>';

  echo '</div>';

echo '</section>';

?>
