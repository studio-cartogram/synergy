<?php

if( have_rows('locations', 'options') ):

    while ( have_rows('locations', 'options') ) : the_row();

      $name = get_sub_field('name');
      $address = get_sub_field('address');
      $phone = get_sub_field('phone');
      $fax = get_sub_field('fax');
      $map = get_sub_field('map');
      $directions = get_sub_field('directions');
      $note = get_sub_field('note');
      $image = get_sub_field('image');
    
      echo '<div class="footer__right column column-3-tablet ">';
        
        echo '<h3>' . $name . '</h3>';

        echo '<p class="address">' . $address . '<br><a class="underline" href="' . $directions . '" class="link link--primary">' . 'View map' . '</a></p>';

        if( $phone ):

          echo '<p class="address">Phone:<br>' . $phone . '</p>';

        endif;

        if( $fax ):

          echo '<p class="address">Fax:<br>' . $fax . '</p>';

        endif;
    
      echo '</div>';

    endwhile;

endif;

?>
