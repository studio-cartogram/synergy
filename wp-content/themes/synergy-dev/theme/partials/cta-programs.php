<?php

  $cta_heading_programs = get_field('cta_heading_programs', 'options');
  $cta_description_programs = get_field('cta_description_programs', 'options');
  $cta_button_text_programs = get_field('cta_button_text_programs', 'options');
  $cta_button_link_programs = get_field('cta_button_link_programs', 'options');

echo '<section class="cta banner banner__center">';

  echo '<div class="row">';

    echo '<div class="cta__text">';

      if(is_archive('programs') ) :

        echo '<h1 class="title">';

          echo $cta_heading_programs;

        echo '</h1>';

        echo '<h2 class="subtitle secondary">';

          echo $cta_description_programs;
        
        echo '</h2>';
        
        echo '<p class="p--large secondary"><a href="' . $cta_button_link_programs .'" class="link link--underline">' . $cta_button_text_programs . '</a></p>';        

      endif;
            
    echo '</div>';

  echo '</div>';

echo '</section>';

?>
