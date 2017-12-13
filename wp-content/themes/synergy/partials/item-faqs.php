<?php

$item = get_query_var('item');
$context = get_query_var('context');
$topics = wp_get_post_terms($item->ID, 'topic', array("fields" => "all"));

echo '<div class="item--faqs">';

  echo '<div class="accordion-toggle">';

    echo '<input id="' . $item->post_name . '" type="checkbox" name="tabs">';

    echo '<label class="gamma" for="' . $item->post_name . '">' . get_the_title($item->ID) . '</label>';

    echo '<div class="accordion-content">';

      echo '<p class="answer-text">' . get_the_content($item->ID) . '</p>';

    echo '</div>';

  echo '</div>';

echo '</div>';

?>
