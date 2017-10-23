<?php

$announcement = get_field('announcement', 'options');

if( $announcement ):

  echo '<section class="announcement">';

    echo '<p>' . $announcement . '</p>';

    echo '<a href="#" class="button button--close">';

      set_query_var( 'icon', 'close' );
      get_template_part('partials/icon');

    echo '</a>';
  
  echo '</section>';

endif;

?>
