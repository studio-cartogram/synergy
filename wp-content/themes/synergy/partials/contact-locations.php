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
    
      echo '<div class="column column-6-mobile column-3-tablet ">';
        
        echo '<h3 class="footer__heading">' . $name . '</h3>';

        echo '<p class="text--inverted">' . $address . '<br><a class="link--underline link" href="' . $directions . '" class="link link--primary">' . 'View map' . '</a></p>';

        if( $phone ):

          echo '<p class="text--inverted">Phone<br>' . $phone . '</p>';

        endif;

        if( $fax ):

          echo '<p class="text--inverted">Fax<br>' . $fax . '</p>';

        endif;
    
      echo '</div>';

    endwhile;

endif;

?>
