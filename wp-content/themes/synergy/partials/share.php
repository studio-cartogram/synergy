<?php

echo '<div class="share-links">';

  echo '<a class="button--share mail" href="mailto:?subject='. get_the_title() .'&amp;body=' . get_the_permalink() .'" title="Share by Email"">';

    set_query_var( 'icon', 'mail' );
    get_template_part('partials/icon');

  echo '</a>';

  echo '<a target="_blank" class="button--share twitter" href="http://twitter.com/home/?status= ' . get_the_title() .'-' . get_the_permalink() .'" title="Tweet this!">';
  
    set_query_var( 'icon', 'twitter' );
    get_template_part('partials/icon');

  echo '</a>';

  echo '<a target="_blank" class="button--share facebook" href="http://www.facebook.com/sharer.php?u=' . get_the_permalink() .'" data-share-url="http://www.facebook.com/sharer.php?u=' . get_the_permalink() .'" title="Share on Facebook.">';
  
  set_query_var( 'icon', 'facebook' );
  get_template_part('partials/icon');

  echo '</a>';

  echo '<a target="_blank" class="button--share linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;title='. get_the_title() .'&amp;url='. get_the_permalink() .'" title="Share on LinkedIn">';

  set_query_var( 'icon', 'linkedin' );
  get_template_part('partials/icon');

  echo '</a>';

  // echo '<a target="_blank" class="button--share pinterest" href="http://pinterest.com/pin/create/button/?url='. get_the_permalink() .'&media='. $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ), $url .'">';

  // set_query_var( 'icon', 'pinterest' );
  // get_template_part('partials/icon');

  // echo '</a>';

echo '</div>';

?>
