<?php

$subtitle = get_field('subtitle');
$findClinician = get_field('show_find_clinician_form');


echo '<section class="title">';

  echo '<div class="row row--justify-center">';

    echo '<div class="column column-8-laptop intro">';

      echo the_title( '<h1>', '</h1>' );

      echo '<h2 class="secondary">' . $subtitle . '</h2>';

      if( $findClinician && have_rows('outcomes', 'options') ):

        echo '<div class="row row--justify-center">';

          if( have_rows('outcomes', 'options') ):

            echo '<select class="input__base input__select input__large find-clinician">';
          
              while ( have_rows('outcomes', 'options') ) : the_row();
          
                $source = get_sub_field('source_of_discomfort');
                $result = get_sub_field('result');
              
                echo '<option value="' . $result . '">' . $source . '</option>';
          
              endwhile;
          
            echo '</select>';

            $choice = get_sub_field('result'); // Should be the value of the option selected
            $buttonText = get_field('button_text', 'options');

            echo '<a class="button button--primary button--large" href="' . $choice . '">'. $buttonText .'</a>';
            
          endif;

        echo '</div>';
                  
      endif;

    echo '</div>';

   echo '</div>';

echo '</section>';

if( have_rows('sections') ):
    $count = 0;
    while ( have_rows('sections') ) : the_row(); 
      $layout = get_row_layout();
       
      if($layout == 'banner') {
        $count++;
        set_query_var('count', $count);
      }

      get_template_part('partials/section', $layout);

    endwhile;

endif;

?>
