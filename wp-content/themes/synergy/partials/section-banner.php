<?php

$outcomes = get_field('outcomes', 'options');
$button_text = get_field('outcomes', 'options');

$title = get_sub_field('title');
$description = get_sub_field('description');
$subtitle = get_sub_field('subtitle');
$link_text = get_sub_field('link_text');
$link = get_sub_field('link');
$image = get_sub_field('image');
$size = 'img_xlarge';
$orientation = get_sub_field('orientation');

echo '<section class="js-waypoint waypoint banner banner__'. $orientation .' banner--' . $count . '">';

  echo '<div class="banner__text waypoint__item">';

    echo '<h1 class="">' . $title . ' </h1>';

    echo '<h2 class="secondary">' . $subtitle . '</h2>';

    if ($description) :

    echo '<span class="p--large secondary">' . $description . '</span>';

    endif;

    if ($link && $link_text) :

    echo '<p class="p--large secondary"><a href="' . $link .'" class="link link--underline">' . $link_text . '</a></p>';

    endif;

  echo '</div>';

  if( $image ) :
    
    echo '<div class="banner__image banner__image-crop waypoint__item waypoint__item--delay">';

      echo wp_get_attachment_image( $image, $size );

    echo '</div>';

  endif;
  
echo '</section>';

get_template_part('partials/section-note');

?>
