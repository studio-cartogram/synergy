<?php

$announcement = get_field('announcement', 'options');

if( $announcement ):

  echo '<section class="announcement">';

    echo '<div class="row row--justify-center row--justify-space-around">';

      //echo '<div class="column column-12">';

        echo $announcement;

        echo '<a href="#" class="button button--close">';

          set_query_var( 'icon', 'close' );
          get_template_part('partials/icon');

        echo '</a>';

      //echo '</div>';

    echo '</div>';
  
  echo '</section>';

endif;

?>
