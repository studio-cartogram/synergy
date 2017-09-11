<?php

$next_post = get_next_post();
$prev_post = get_previous_post();

echo '<section class="prevnext">';

  if (!empty( $prev_post )):
    echo '<a class="prevnext__link prevnext__link--right" href="' . get_permalink($prev_post->ID) . '">';
      echo '<span class="visuallyhidden">' . $prev_post->post_title . '</span>';
      echo 'Prev';
    echo '</a>';
  endif;

  if (!empty( $next_post )):
    echo '<a class="prevnext__link" href="' . get_permalink($next_post->ID) . '">';
      echo '<span class="visuallyhidden">' . $next_post->post_title . '</span>';
      echo 'Next';
    echo '</a>';
  endif;


echo '</section>';

?>
