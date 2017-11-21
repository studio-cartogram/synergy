<?php

echo '<div class="locations__wrapper">';

  echo '<div class="locations__header">';

    echo '<h3 class="secondary">Choose a location</h3>';

    echo '<a href="#locations" data-toggle-locations class="locations__toggle is-active">';

      get_template_part('partials/hamburger');

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
      $size = 'full';

      if( $image ) :
        
      echo '<div class="location__image waypoint__item waypoint__item--delay">';

        echo wp_get_attachment_image( $image, $size );

      echo '</div>';

      endif;

      echo '<div class="location__info">';
      
        echo '<p class="secondary location__name">' . $name . '</p>';

        echo '<p class="">' . $address . '<br><a class="link--underline link" href="' . $directions . '" class="link link--primary">' . 'View map' . '</a></p>';

        if( $phone ):

          echo '<p class="location__phone"><span class="secondary">Phone</span><br>' . $phone . '</p>';

        endif;

        if( $fax ):

          echo '<p class="location__fax"><span class="secondary">Fax</span><br>' . $fax . '</p>';

        endif;

        if( $booking ):
          
          echo '<a href="' . $booking . '" class="location__booking button button--primary">Book ' . $name . '</a>';
          
        endif;
      
      echo '</div>';
    
    echo '</div>';

    endwhile;

  echo '</div>';

    endif;

echo '</div>';

?>
