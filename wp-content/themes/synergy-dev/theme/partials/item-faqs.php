<?php

$item = get_query_var('item');
$context = get_query_var('context');
$topics = wp_get_post_terms($item->ID, 'topic', array("fields" => "all"));

echo '<article id="' . $item->post_name . '" class="item item--faqs">';

  echo '<a class="' . ($context === 'single' ? ' is-active ' : '') . '" href="' . get_permalink($item->ID) . '">';

    echo '<div class="item__text">';

      echo '<h3 class="item__title">' . get_the_title($item->ID) . '</h3>';
      
    echo '</div>';

  echo '</a>';

echo '</article>';

?>
