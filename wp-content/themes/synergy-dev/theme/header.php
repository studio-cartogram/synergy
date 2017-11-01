<?php
global $language;

$classes = get_field('class_schedules', 'options');

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

get_template_part('partials/contact-announcement');

echo '<header role="banner" class="js-header header">';

  echo '<a href="#menu" data-toggle=".js-nav" data-toggle-class="is-active" class="nav__toggle">Menu<span class="ico-caret-down right" aria-hidden="true"></span>
  </a>';

  echo '<nav class="nav__wrapper js-nav" role="navigation">';

    echo '<div class="row row--full nav__inner">';

      echo '<div class="header__group header__group--right">';
      
        echo '<ul class="header__nav header__nav--right list">';

          echo '<li class="">';

            echo '<a href="' . $classes . '" class="link link--primary link--external action">' . 'Class schedules';
          
              set_query_var( 'icon', 'arrow-external' );
              get_template_part('partials/icon');
          
            echo '</a>';

          echo '</li>';

          echo '<li class="">';

            echo '<button class="button button--primary">' . 'Book an appointment' . '</button>';  
          
          echo '</li>';

        echo '</ul>';

      echo '</div>';

      echo '<div class="header__group">';

        echo '<a href="' . get_bloginfo('url') . '" class="header__logo">';

          echo '<span class="visuallyhidden">' . get_bloginfo('name') . '</span>';

          echo '<img src="' . get_bloginfo('stylesheet_directory') . '/assets/svg/logo.svg" />';
          
        echo '</a>';

        echo '<ul class="header__nav list">';

          wp_nav_menu( $nav_primary_left );

        echo '</ul>';

      echo '</div>';
    
    echo '</div>';
  
  echo '</nav>';

echo '</header>';

