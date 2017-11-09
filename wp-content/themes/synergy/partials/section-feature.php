<?php

$outcomes = get_field('outcomes', 'options');
$button_text = get_field('outcomes', 'options');

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$image = get_sub_field('image');
$video = get_sub_field('video');
$findClinician = get_sub_field('show_find_clinician_cta');
$size = 'full';

echo '<section class="js-waypoint waypoint feature">';

  if( $image ) :
  
    echo '<div class="feature__background waypoint__item"></div>';    
    
  endif;

  echo '<div class="feature__text waypoint__item">';

    echo '<h1 class="mega feature__title">' . $title . ' </h1>';

    echo '<h3 class="secondary feature__subtitle">' . $subtitle . '</h3>';

    if( $findClinician && have_rows('outcomes', 'options') ):
      
      echo '<div class="row row--justify-center">';

        if( have_rows('outcomes', 'options') ):

          echo '<select data-select=".js-find-clinician" class="input__base input__select input__large find-clinician js-find-clinician">';
        
            while ( have_rows('outcomes', 'options') ) : the_row();
        
              $source = get_sub_field('source_of_discomfort');
              $result = get_sub_field('result');
            
              echo '<option value="' . $result . '">' . $source . '</option>';
        
            endwhile;
        
          echo '</select>';

          // $choice = get_sub_field('result'); // Should be the value of the option selected
          // $buttonText = get_field('button_text', 'options');
      
          // echo '<button data-select=".js-find-clinician" class="button button--primary button--large">'. $buttonText .'</button>';
                  
        endif;
      
      echo '</div>';
                        
    endif;

  echo '</div>';

  if( $image ) :
    
    echo '<div class="feature__image feature__image-crop waypoint__item waypoint__item--delay">';

      echo wp_get_attachment_image( $image, $size );

    echo '</div>';

  endif;
  
echo '</section>';

get_template_part('partials/section-note');

?>
