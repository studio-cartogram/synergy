<?php

$item = get_query_var('item');
$count = get_query_var('count');
$total_count = get_query_var('total_count');
$context = get_query_var('context');
$topics = wp_get_post_terms($item->ID, 'topic', array("fields" => "all"));

if ( $count == 1 ): 

echo '<div class="faqs__column">';

endif;

if ( $count == round($total_count/2) ): 

  echo '</div>';
  
  echo '<div class="faqs__column">';
  
  endif;

echo '<div class="faqs__item">';

  echo '<div class="accordion-toggle">';

    echo '<input id="' . $item->post_name . '" type="checkbox" name="tabs">';

    echo '<label class="gamma" for="' . $item->post_name . '">' . get_the_title($item->ID) . '</label>';

    echo '<div class="accordion-content">';

      echo '<p class="answer-text">' . get_the_content($item->ID) . '</p>';

    echo '</div>';

  echo '</div>';

echo '</div>';

if ( $count == $total_count ): 
  
  echo '</div>';
  
endif;

?>
