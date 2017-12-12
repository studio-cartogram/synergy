<?php

$item = get_query_var('item');
$context = get_query_var('context');
$topics = wp_get_post_terms($item->ID, 'topic', array("fields" => "all"));

echo '<div class="item--faqs">';

  echo '<div class="faq-question">';

    echo '<input id="' . $item->post_name . '" type="checkbox" name="tabs">';

    echo '<label for="' . $item->post_name . '">' . get_the_title($item->ID) . '</label>';

    echo '<div class="faq-answer">';

      echo '<p class="">' . get_the_content($item->ID) . '</p>';

    echo '</div>';

  echo '</div>';

echo '</div>';

?>
