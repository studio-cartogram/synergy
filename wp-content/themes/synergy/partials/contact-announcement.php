<?php

$announcement = get_field('announcement', 'options');

if( $announcement ):

  echo '<section class="announcement">';

    echo '<p>' . $announcement . '</p>';
  
  echo '</section>';

endif;

?>
