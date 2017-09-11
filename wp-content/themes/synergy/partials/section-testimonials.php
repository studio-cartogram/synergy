<?php

$section = 'testimonials';
$divider_text = get_sub_field('divider_text');


echo '<section class="' . $section . '">';

    echo '<div class="row ">';

      echo '<div class="column column-12">';

        echo '<div class="blocks__title">';

          echo '<h6 class="with-line secondary serif"><em>' . $divider_text . '</em></h6>';

        echo '</div>';

      echo '</div>';

    echo '</div>';

    if( have_rows('testimonials') ):

    echo '<div id="js-slideshow" class="slideshow row">';

      while ( have_rows('testimonials') ) : the_row();

        echo '<div class="js-slide slideshow__slide">';

        echo '<div class="testimonial">';

          $credit = get_sub_field('credit');

          $testimonial = get_sub_field('testimonial');

          echo '<p class="p--xlarge testimonial__text">' . $testimonial . '</p>';

          echo '<p class="testimonial__credit secondary">&mdash; ' . $credit . '</p>';

        echo '</div>';

        echo '</div>';

      endwhile;

    echo '</div>';

    endif;

echo '</section>';
?>
