<?php

if( have_rows('locations', 'options') ):

  echo '<div class="locations column column-8-laptop">';

    while ( have_rows('locations', 'options') ) : the_row();

      $name = get_sub_field('name');
      $address = get_sub_field('address');
      $phone = get_sub_field('phone');
      $fax = get_sub_field('fax');
      $map = get_sub_field('map');
      $directions = get_sub_field('directions');
      $note = get_sub_field('note');
      $image = get_sub_field('image');
    
      echo '<div class="column location">';
        
        echo '<h3 class="">' . $name . '</h3>';

        echo '<p class="">' . $address . '</p>';

        echo '<a href="' . $directions . '" class="link link--primary">' . 'View map' . '</a>';

        echo '<p class="">' . $phone . '</p>';

        echo '<p class="">' . $fax . '</p>';
    
      echo '</div>';

    endwhile;

  echo '</div>';

endif;

?>
