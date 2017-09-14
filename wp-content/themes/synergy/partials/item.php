<?php

$item = get_query_var('item');
$topics = wp_get_post_terms($item->ID, 'topic', array("fields" => "all"));
$context = get_query_var('context');

echo '<article id="' . $item->post_name . '" class="faq faq--' . $context . ' with-paper">';

    echo '<div class="faq__question">';

      echo '<h2><a class="' . ($context === 'single' ? ' is-active ' : '') . '" href="' . get_permalink($item->ID) . '">' . get_the_title($item->ID) . '</a></h2>';

    echo '</div>';

    echo '<div class="format faq__answer">';

    if ($context === 'single') {
      the_content();
    } else {

      the_excerpt();

      if (has_excerpt($item->ID)) {

      echo '<div class="faq__more">';

        more_link('View Full Answer');

      echo '</div>';

      }

    }

    echo '</div>';

    echo '<div class="faq__footer row">';

    if($topics) :

      echo '<ul class="list list--small list--sep-comma">';

      echo '<li>';

        echo '<em class="serif">filed under &mdash;</em> ';

      echo '</li>';

    foreach($topics as $topic) :

      echo '<li>';

        echo '<a href="' . get_term_link($topic) . '" class="link link--secondary">' . $topic->slug . '</a>';

      echo '</li>';

    endforeach;

    echo '</ul>';

    endif;

    echo '</div>';

echo '</article>';

?>
