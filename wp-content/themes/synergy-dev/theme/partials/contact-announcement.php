<?php

$announcement = get_field('announcement', 'options');

if( $announcement ):

  echo '<div class="row row--justify-center">';

    echo '<p class="announcement">' . $announcement . '</p>';
  
  echo '</div>';

endif;

?>
