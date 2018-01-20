<?php

$formid = get_sub_field('form');

echo '<section class="js-waypoint waypoint form">';

  echo '<div class="form__container">';

    echo gravity_form($formid, false, false, false, false);  
    
  echo '</div>';
  
echo '</section>';


?>
