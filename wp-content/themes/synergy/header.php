<?php
global $language;

$nav_primary_right = array(
  'theme_location'  => 'header_nav_secondary',
  'container'       => false,
  'items_wrap'      => '%3$s',
);

$nav_primary_left = array(
  'theme_location'  => 'header_nav_primary',
  'container'       => false,
  'items_wrap'      => '%3$s',
);

echo '<header role="banner" class="js-header header">';

  echo '<a href="' . get_bloginfo('url') . '" class="header__logo logo">';

  echo '<span class="visuallyhidden">' . get_bloginfo('name') . '</span>';

    echo '<span class="logo__icon">';

      set_query_var( 'icon', 'logo-icon' );

      get_template_part('partials/icon');

    echo '</span>';

    echo '<span class="logo logo__word">';

      set_query_var( 'icon', 'logo' );

      get_template_part('partials/icon');

    echo '</span>';

  echo '</a>';

  echo '<div class="header__group ">';

    echo '<ul class="header__nav list list--right ">';

      wp_nav_menu( $nav_primary_left );

    echo '</ul>';

  echo '</div>';

  echo '<div class="header__group header__group--right">';

    echo '<ul class="header__nav list--sep-slash list list--right ">';

      wp_nav_menu( $nav_primary_right );

    echo '</ul>';

  echo '</div>';

echo '</header>';

