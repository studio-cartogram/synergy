<?php

$subtitle = get_field('subtitle');
$findClinician = get_field('show_find_clinician_form');


echo '<section class="title">';

  echo '<div class="row row--justify-center">';

    echo '<div class="column column-8-laptop intro">';

      // echo the_title( '<h1>', '</h1>' );

      // echo '<h2 class="secondary">' . $subtitle . '</h2>';

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
