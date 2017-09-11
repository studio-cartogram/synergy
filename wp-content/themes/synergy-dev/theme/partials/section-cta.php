<?php

$title = get_sub_field('title');
$description = get_sub_field('description');
$divider_text = get_sub_field('divider_text');
$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link');
$button_micro = get_sub_field('button_micro');

echo '<section class="cta">';

  echo '<div class="row row--justify-center">';

    echo '<div class="column intro">';

      echo '<h2 class="text--inverted">' . $title . '</h2>';

      if ($button_link && $button_text) :

      echo '<div class="cta__button">';

      echo '<a href="' . $button_link .'" class="button button--primary button--inverted button--large">' . $button_text . '</a>';

      echo '</div>';

      endif;

      if ($button_micro) :

      echo '<p class="p--small text--inverted">' . $button_micro . '</p>';

      endif;

    echo '</div>';

  echo '</div>';

  if( have_rows('blocks') ):

    echo '<div class="row ">';

      echo '<div class="column column-12">';

        echo '<div class="blocks__title">';

          echo '<h6 class="with-line text--inverted serif"><em>' . $divider_text . '</em></h6>';

        echo '</div>';

      echo '</div>';

    echo '</div>';

    echo '<div class="row ">';
    echo '<div class="row blocks">';

      while ( have_rows('blocks') ) : the_row();

        echo '<div class="block column column-4-tablet column-4-laptop">';

          echo '<div class=" block__content">';

            $title = get_sub_field('title');
            $description = get_sub_field('description');

            echo '<h3 class="text--inverted">' . $title . '</h3>';

            echo '<p class="p--large text--inverted">' . $description . '</p>';

          echo '</div>';

        echo '</div>';

      endwhile;

    echo '</div>';
    echo '</div>';

    endif;

echo '</section>';

?>
