<?php

echo '<div class="locations__wrapper">';

  echo '<div class="locations__header">';

    echo '<h3 class="secondary">Choose a location</h3>';

    echo '<a href="#locations" data-toggle-locations class="locations__toggle hamburger--spin hamburger">';

      echo '<span class="hamburger-box">';
    
        echo '<span class="hamburger-inner"></span>';

      echo '</span>';

    echo '</a>';

  echo '</div>';

  echo '<div class="locations__container">';

    if( have_rows('locations', 'options') ):

    while ( have_rows('locations', 'options') ) : the_row();

    echo '<div class="location__item">';

      $name = get_sub_field('name');
      $address = get_sub_field('address');
      $phone = get_sub_field('phone');
      $fax = get_sub_field('fax');
      $map = get_sub_field('map');
      $directions = get_sub_field('directions');
      $note = get_sub_field('note');
      $image = get_sub_field('image');
      $booking = get_sub_field('booking_link');
      $referral = get_sub_field('referral_form');
      $size = 'full';

      if( $image ) :
        
      echo '<div class="location__image waypoint__item waypoint__item--delay">';

        echo wp_get_attachment_image( $image, $size );

      echo '</div>';

      endif;

      echo '<div class="location__info">';
      
        echo '<p class="location__name">';
        echo '<span class="secondary"> '. $name. ' </span><br> '. $address. '<br>';
        echo '<a class="link--underline link" href="' . $directions . '">View map</a>';
        echo '</p>';

        if( $referral ):

          echo '<p class="location_referral"><a target="_blank" href="' . $referral . '" class="link--underline link">Download referral form</a></p>';

        endif;

        if( $phone ):

          echo '<p class="location__phone"><span class="secondary">Phone</span><br>' . $phone . '</p>';

        endif;

        if( $fax ):

          echo '<p class="location__fax"><span class="secondary">Fax</span><br>' . $fax . '</p>';

        endif;

        if( $booking ):
          
          echo '<p><a href="' . $booking . '" class="location__booking button button--primary">Book ' . $name . '</a></p>';
          
        endif;
      
      echo '</div>';
    
    echo '</div>';

    endwhile;

  echo '</div>';

    endif;

echo '</div>';

?>
