<?php

$item = get_query_var('item');
$context = get_query_var('context');
$topics = wp_get_post_terms($item->ID, 'topic', array("fields" => "all"));
$image = get_post_thumbnail_id();
$hasimage = has_post_thumbnail();
$size = 'large';

$count = get_query_var('count');
$total_count = get_query_var('total_count');

if ( $count == 1 ): 

echo '<div class="services__column -left">';

elseif ( $count == round($total_count/3) ): 

echo '</div>';

echo '<div class="services__column -center">';

elseif ( $count == round(($total_count/3)+($total_count/3)) ): 

echo '</div>';

echo '<div class="services__column -right">';

endif;

  echo '<article id="' . $item->post_name . '" class="item item--services">';

    echo '<a class="' . ($context === 'single' ? ' is-active ' : '') . '" href="' . get_permalink($item->ID) . '">';

      // echo '<div class="item__image">';

      //   echo wp_get_attachment_image( $image, $size );

      // echo '</div>';

      echo '<div class="item__text">';

        echo '<h3 class="item__title">' . get_the_title($item->ID) . '</h3>';

        // echo '<p class="item__title">' . get_the_excerpt($item->ID) . '</p>';
        
      echo '</div>';

    echo '</a>';

  echo '</article>';



?>
