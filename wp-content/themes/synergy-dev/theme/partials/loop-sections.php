<?php

$subtitle = get_field('subtitle');

echo '<section class="title">';

  echo '<div class="row row--justify-center">';

    echo '<div class="column column-8-laptop intro">';

      echo the_title( '<h1>', '</h1>' );

      echo '<h2 class="secondary">' . $subtitle . '</h2>';

    echo '</div>';

   echo '</div>';

echo '</section>';

if( have_rows('sections') ):

    while ( have_rows('sections') ) : the_row();
		
        get_template_part('partials/section', get_row_layout());

    endwhile;

endif;

?>
