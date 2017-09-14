<?php

$title = get_field('404_title', 'options');
$description = get_field('404_description', 'options');
$subtitle = get_field('404_subtitle', 'options');
$button_text = get_field('404_button_text', 'options');
$button_link = get_field('404_button_link', 'options');

echo '<section class="banner">';

  echo '<div class="row row--justify-center">';

    echo '<div class="column column-8-laptop intro">';

      echo '<h1 class="">';

      if ($title) : echo $title; else: echo 'Nothing to see here'; endif;

      echo '</h1>';

      echo '<p class="p--large">' . $description . '</p>';

      if ($button_link && $button_text) :

      echo '<a href="' . $button_link .'" class="button button--primary button--large">' . $button_text . '</a>';

      endif;

    echo '</div>';

   echo '</div>';

echo '</section>';

?>
