<?php

$outcomes = get_field('outcomes', 'options');
$button_text = get_field('outcomes', 'options');

$title = get_sub_field('title');
$description = get_sub_field('description');
$subtitle = get_sub_field('subtitle');
$link_text = get_sub_field('link_text');
$link = get_sub_field('link');
$image = get_sub_field('image');
$size = 'full';
$orientation = get_sub_field('orientation');

echo '<section class="banner banner__'. $orientation .'">';

  echo '<div class="banner__background">';

    set_query_var('icon', 'halftone-arrow');
    set_query_var('icon', 'halftone-peak');
    set_query_var('icon', 'halftone-shift');
    set_query_var('icon', 'halftone-square');
    set_query_var('icon', 'halftone-swoosh');
    set_query_var('icon', 'halftone-trio');

    get_template_part('partials/icon');

  echo '</div>';

  echo '<div class="banner__text">';

    echo '<h1 class="">' . $title . ' </h1>';

    echo '<h2 class="secondary">' . $subtitle . '</h2>';

    if ($description) :

    echo '<p class="p--large">' . $description . '</p>';

    endif;

    if ($link && $link_text) :

    echo '<a href="' . $link .'" class="link link--primary link--underline link--large">' . $link_text . '</a>';

    endif;

  echo '</div>';

  if( $image ) :
    
    echo '<div class="banner__image banner__image-crop">';

      echo wp_get_attachment_image( $image, $size );

    echo '</div>';

  endif;
  
echo '</section>';

get_template_part('partials/section-note');

?>
