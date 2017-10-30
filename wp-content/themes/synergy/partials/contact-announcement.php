<?php

$announcement = get_field('announcement', 'options');

if( $announcement ):

  echo '<section class="announcement">';

    echo '<div class="row row--justify-center">';

      echo $announcement;

      echo '<button class="button button--close button--close-annoucement" data-toggle=".announcement">';

        set_query_var( 'icon', 'close' );
        get_template_part('partials/icon');

      echo '</button>';

    echo '</div>';
  
  echo '</section>';

endif;

?>
