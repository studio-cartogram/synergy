<?php

$item = get_query_var('item');
$topics = wp_get_post_terms($item->ID, 'topic', array("fields" => "all"));
$context = get_query_var('context');
$image = get_post_thumbnail_id();
$size = 'full';

echo 'hi this is item staff';
echo '<article id="' . $item->post_name . '" class="item item--' . $context . '">';

  echo '<div class="item__image">';

    echo wp_get_attachment_image( $image, $size );

  echo '</div>';

  echo '<div class="item__text">';

    echo '<h2><a class="' . ($context === 'single' ? ' is-active ' : '') . '" href="' . get_permalink($item->ID) . '">' . get_the_title($item->ID) . '</a></h2>';

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
