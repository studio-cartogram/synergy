<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$type = get_sub_field('type');
$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link');
$section = 'explain';

echo '<section class="' . $section . '">';

  echo '<div class="row row--justify-center">';

    echo '<div class="column column-10-laptop intro">';

        echo '<h1>' . $title . '</h1>';

        echo '<p class="secondary">' . $subtitle . '</p>';

      echo '</div>';

    echo '</div>';

    if( have_rows('blocks') ):

      echo '<div class="row blocks--' . $section . '">';

        while ( have_rows('blocks') ) : the_row();

          echo '<div class="block block--' . $section  . ' column column-6-tablet column-6-laptop">';

            echo '<div class="with-paper block__inverted block__content">';

            $title = get_sub_field('title');
            $description = get_sub_field('description');

            // get_template_part('partials/block-icon');
            $icon = get_sub_field('icon');
            set_query_var( 'icon', $icon );
            set_query_var( 'context', 'block' );
            get_template_part('partials/icon');

            echo '<h3 class="primary block__title">' . $title. '</h3>';

            echo '<p class="secondary">' . $description . '</p>';

            echo '</div>';

          echo '</div>';

        endwhile;

      echo '</div>';

    endif;

    if( have_rows('badges') ):

      echo '<div class="row badges">';

        while ( have_rows('badges') ) : the_row();

          echo '<div class="badge">';

            $title = get_sub_field('title');

            $icon = get_sub_field('icon');
            set_query_var( 'icon', $icon );
            set_query_var( 'context', 'badge' );
            get_template_part('partials/icon');

            echo '<h4 class="badge__title">' . $title. '</h3>';

          echo '</div>';

        endwhile;

      echo '</div>';

    endif;

    if ($button_link && $button_text) :

      echo '<p class="buttons"><a href="' . $button_link .'" class="button button--primary button--large">' . $button_text . '</a></p>';

    endif;

echo '</section>';

?>
