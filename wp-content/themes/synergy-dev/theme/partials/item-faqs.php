<?php

$item = get_query_var('item');
$context = get_query_var('context');
$topics = wp_get_post_terms($item->ID, 'topic', array("fields" => "all"));

echo '<article id="' . $item->post_name . '" class="item item--faqs">';

  echo '<div class="faq__text">';

    echo '<a class="' . ($context === 'single' ? ' is-active ' : '') . '" href="#answer" data-toggle-answer>';
    
      echo '<h3 class="faq__title">' . get_the_title($item->ID) . '</h3>';

    echo '</a>';

    echo '<div class="answer faq__answer js-answer">';

      echo '<p class="">' . get_the_content($item->ID) . '</p>';

    echo '</div>';
    
  echo '</div>';

echo '</article>';

?>
