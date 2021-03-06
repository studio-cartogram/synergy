<?php

$item = get_query_var('item');
$context = get_query_var('context');
$topics = wp_get_post_terms($item->ID, 'category', array("fields" => "all"));
$image = get_post_thumbnail_id();
$profession = get_field('profession');
$hasimage = has_post_thumbnail();
$size = 'full';

echo '<article id="' . $item->post_name . '" class="item item--blog">';

  echo '<a class="' . ($context === 'single' ? ' is-active ' : '') . '" href="' . get_permalink($item->ID) . '">';

    echo '<div class="item__image">';

      echo wp_get_attachment_image( $image, $size );

    echo '</div>';

    echo '<div class="item__text">';

      echo '<h3 class="item__title">' . get_the_title($item->ID) . '</h3>';

      echo '<h3 class="secondary">';

      get_template_part('partials/taxonomy-list-blog');
      
      echo '</h3>';
      
    echo '</div>';

  echo '</a>';

echo '</article>';

?>
