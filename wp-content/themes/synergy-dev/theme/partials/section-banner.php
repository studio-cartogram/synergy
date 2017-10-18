<?php

$title = get_sub_field('title');
$description = get_sub_field('description');
$subtitle = get_sub_field('subtitle');
$link_text = get_sub_field('link_text');
$link = get_sub_field('link');
$image = get_sub_field('image');
$size = 'full';
$orientation = get_sub_field('orientation');

echo '<section class="banner">';

  echo '<div class="banner__background">';

    set_query_var('icon', 'splotches');

    get_template_part('partials/icon');

  echo '</div>';

  echo '<div class="row row--justify-center">';

    echo '<div class="column column-8-laptop intro">';

      echo '<h1 class="">' . $title . '</h1>';

      echo '<h2 class="secondary">' . $subtitle . '</h2>';

      if ($description) :

      echo '<p class="p--large">' . $description . '</p>';

      endif;

      if ($link && $link_text) :

      echo '<a href="' . $link .'" class="link link--primary link--large">' . $link_text . '</a>';

      endif;

    echo '</div>';

   echo '</div>';

  if( $image ) :

    echo '<div class="content__image">';

    echo wp_get_attachment_image( $image, $size );

    echo '</div>';

  endif;

echo '</section>';

get_template_part('partials/section-note');

?>
